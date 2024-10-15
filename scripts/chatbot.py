import sys
import google.generativeai as ai
import requests

# API configuration
API_KEY = 'AIzaSyAOl_uvObdzhbiRwaIeJVJ3OAKci89F62M'
ai.configure(api_key=API_KEY)

model = ai.GenerativeModel("gemini-pro")
chat = model.start_chat()

system_instruction = """
AI is restricted to only answering questions related to medical topics.
Any questions outside of medical subjects, such as personal inquiries, technical assistance, or general knowledge, must not be addressed.
Respond to non-medical queries by politely redirecting the user towards asking a medically relevant question.
If the user asks about doctor availability for appointments, provide a list of available doctors based on the requested time or day.
"""

def get_available_doctors(day=None):
    try:
        # URL of the PHP API 
        # modify if may server na
        url = 'http://localhost/DocConnect/classes/get_available_doctors.php'
        
        params = {'day': day} if day else {}

        response = requests.get(url, params=params)

        if response.status_code == 200:
            doctors = response.json()
            if doctors:
                doctor_list = "\n".join(
                    [f"Dr. {doctor['doctor_last_name']} - Available from {doctor['start_wt']} to {doctor['end_wt']} on {doctor['start_day']} to {doctor['end_day']}" for doctor in doctors]
                )
                return f"Available doctors:\n{doctor_list}"
            else:
                return "No doctors are available at the specified time or day."
        else:
            return f"Error fetching data: {response.status_code}"

    except Exception as e:
        return f"Error accessing the API: {str(e)}"


if len(sys.argv) < 2:
    print("Please provide a medical question as an argument.")
    sys.exit(1)

message = sys.argv[1].lower()
complete_message = f"{system_instruction}\nUser: {message}"

# Check if the user is asking about doctor availability
if "doctor availability" in message or "available doctors" in message:
    # Extract day from message if available (you can improve extraction logic)
    day = None
    if "monday" in message:
        day = "Monday"
    elif "tuesday" in message:
        day = "Tuesday"
    elif "saturday" in message:
        day = "Saturday"
    # Add more days as needed

    # Fetch available doctors
    doctor_info = get_available_doctors(day)
    print(doctor_info)
else:
    response = chat.send_message(complete_message)
    print(response.text)