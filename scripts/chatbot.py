import sys
import google.generativeai as ai
import requests
import re

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


def extract_day(message):
    days_of_week = ['monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday']
    
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

    # Fetch available doctors
    doctor_info = get_available_doctors(day)
    print(doctor_info)
else:
    response = chat.send_message(complete_message)
    print(response.text)
