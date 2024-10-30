const axios = require('axios');
const { GoogleGenerativeAI } = require('@google/generative-ai');

const apiKey = 'AIzaSyAOl_uvObdzhbiRwaIeJVJ3OAKci89F62M';
const genAI = new GoogleGenerativeAI(apiKey);

const model = genAI.getGenerativeModel({
  model: 'gemini-pro',
});

const generationConfig = {
  temperature: 1,
  topP: 0.95,
  topK: 64,
  maxOutputTokens: 8192,
  responseMimeType: 'text/plain',
};

const systemInstruction = `
AI is restricted to answering questions related to medical topics and can recommend medications for specific illnesses. If the illness is not clear or the AI cannot recommend a suitable medication, it should direct the user to a doctor from the database for further consultation.

For non-medical queries, such as personal inquiries, technical assistance, or general knowledge, politely redirect the user towards asking a medically relevant question.

If the user asks about doctor availability for appointments, provide a list of available doctors based on the requested time or day.
`;

async function formatTime12Hour(timeStr) {
  const timeParts = timeStr.split(':');
  if (timeParts.length === 3) {
    const hours = parseInt(timeParts[0], 10);
    const minutes = parseInt(timeParts[1], 10);
    const period = hours >= 12 ? 'PM' : 'AM';
    const formattedHours = ((hours + 11) % 12 + 1); // Convert to 12-hour format
    return `${formattedHours}:${String(minutes).padStart(2, '0')} ${period}`;
  }
  return timeStr;
}

async function getAvailableDoctors(day) {
  try {
    const url = 'http://localhost/DocConnect/classes/get_available_doctors.php';
    const params = day ? { day } : {};
    const response = await axios.get(url, { params });

    if (response.status === 200) {
      const doctors = response.data;
      if (doctors.length > 0) {
        const doctorListItems = await Promise.all(doctors.map(async (doctor) => {
          const startTime = await formatTime12Hour(doctor.start_wt);
          const endTime = await formatTime12Hour(doctor.end_wt);
          return `<li class='list-group-item'><span class='fw-bold'>Dr. ${doctor.doctor_last_name}</span> - Available from ${startTime} to ${endTime} on ${doctor.start_day} to ${doctor.end_day}</li>`;
        }));
        
        return `<div class='container mt-2'><h2 class='text-white'>Available doctors:</h2><ul class='list-group'>${doctorListItems.join('')}</ul>${getScheduleLink()}</div>`;
      } else {
        return `<div class='container mt-2'><h2 class='text-warning'>No doctors are available at the specified time or day.</h2>${getScheduleLink()}</div>`;
      }
    } else {
      return `<div class='container mt-2'><h2 class='text-danger'>Error fetching data: ${response.status}</h2>${getScheduleLink()}</div>`;
    }
  } catch (error) {
    return `<div class='container mt-2'><h2 class='text-danger'>Error accessing the API: ${error.message}</h2>${getScheduleLink()}</div>`;
  }
}

function getScheduleLink() {
  return '<a class="btn btn-primary text-white my-2" href="http://localhost/DocConnect/user/appointment">Schedule an appointment</a>';
}

function extractDay(message) {
  const daysOfWeek = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday'];
  
  const today = new Date();
  if (message.includes('today')) {
    return today.toLocaleString('en-US', { weekday: 'long' });
  } else if (message.includes('tomorrow')) {
    return new Date(today.setDate(today.getDate() + 1)).toLocaleString('en-US', { weekday: 'long' });
  }

  for (const day of daysOfWeek) {
    if (new RegExp(`\\b${day}\\b`, 'i').test(message)) {
      return day.charAt(0).toUpperCase() + day.slice(1);
    }
  }
  return null;
}

async function run() {
  if (process.argv.length < 3) {
    console.log("Please provide a medical question as an argument.");
    process.exit(1);
  }

  const message = process.argv[2].toLowerCase();
  const completeMessage = `${systemInstruction}\nUser: ${message}`;

  if (message.includes('doctor availability') || message.includes('available doctors')) {
    const day = extractDay(message);
    if (day) {
      const doctorInfo = await getAvailableDoctors(day);
      console.log(doctorInfo);
    } else {
      console.log("Please specify a valid day for checking doctor availability.");
    }
  } else {
    const chatSession = model.startChat({
      generationConfig,
      history: [],
    });

    const result = await chatSession.sendMessage(completeMessage);
    console.log(result.response.text());
  }
}

run();