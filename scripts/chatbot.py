import sys
import google.generativeai as ai
import requests
import re
from datetime import datetime, timedelta

# API configuration
API_KEY = 'AIzaSyAOl_uvObdzhbiRwaIeJVJ3OAKci89F62M'
ai.configure(api_key=API_KEY)

model = ai.GenerativeModel("gemini-pro")
chat = model.start_chat()

system_instruction = """
AI is restricted to answering questions related to medical topics and can recommend medications for specific illnesses. If the illness is not clear or the AI cannot recommend a suitable medication, it should direct the user to a doctor from the database for further consultation.

For non-medical queries, such as personal inquiries, technical assistance, or general knowledge, politely redirect the user towards asking a medically relevant question.

If the user asks about doctor availability for appointments, provide a list of available doctors based on the requested time or day.
"""

def format_time_12_hour(time_str):
    try:
        time_obj = datetime.strptime(time_str, '%H:%M:%S')
        return time_obj.strftime('%I:%M %p')
    except ValueError:
        return time_str

def get_available_doctors(day=None):
    try:
        url = 'http://localhost/DocConnect/handlers/get_available_doctors.php'
        params = {'day': day} if day else {}
        response = requests.get(url, params=params)

        if response.status_code == 200:
            doctors = response.json()
            if doctors:
                doctor_list_items = "\n".join(
                    [f"<li class='list-group-item'><span class='fw-bold'>Dr. {doctor['doctor_last_name']}</span> - Available from {format_time_12_hour(doctor['start_wt'])} to {format_time_12_hour(doctor['end_wt'])} on {doctor['start_day']} to {doctor['end_day']}</li>" for doctor in doctors]
                )
                return f"<div class='container mt-2'><h2 class='text-white'>Available doctors:</h2><ul class='list-group'>{doctor_list_items}</ul>{get_schedule_link()}</div>"
            else:
                return f"<div class='container mt-2'><h2 class='text-warning'>No doctors are available at the specified time or day.</h2>{get_schedule_link()}</div>"
        else:
            return f"<div class='container mt-2'><h2 class='text-danger'>Error fetching data: {response.status_code}</h2>{get_schedule_link()}</div>"

    except Exception as e:
        return f"<div class='container mt-2'><h2 class='text-danger'>Error accessing the API: {str(e)}</h2>{get_schedule_link()}</div>"

def get_schedule_link():
    return '<a class="btn btn-primary text-white my-2" href="http://localhost/DocConnect/user/appointment">Schedule an appointment</a>'

def extract_day(message):
    days_of_week = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
    
    if "today" in message:
        return datetime.now().strftime('%A')
    elif "tomorrow" in message:
        return (datetime.now() + timedelta(days=1)).strftime('%A')
    
    for day in days_of_week:
        if re.search(r'\b' + re.escape(day) + r'\b', message):
            return day.capitalize()
    
    return None

if len(sys.argv) < 2:
    print("Please provide a medical question as an argument.")
    sys.exit(1)

message = sys.argv[1].lower()
complete_message = f"{system_instruction}\nUser: {message}"

if "doctor availability" in message or "available doctors" in message:
    day = extract_day(message)
    if day:
        doctor_info = get_available_doctors(day)
        print(doctor_info)
    else:
        print("Please specify a valid day for checking doctor availability.")
else:
    response = chat.send_message(complete_message)
    print(response.text)
