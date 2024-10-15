import sys
import google.generativeai as ai
import mysql.connector
from mysql.connector import Error

# API configuration
API_KEY = 'AIzaSyAOl_uvObdzhbiRwaIeJVJ3OAKci89F62M'
ai.configure(api_key=API_KEY)

model = ai.GenerativeModel("gemini-pro")
chat = model.start_chat()

# System instruction for medical topics
system_instruction = """
AI is restricted to only answering questions related to medical topics.
Any questions outside of medical subjects, such as personal inquiries, technical assistance, or general knowledge, must not be addressed.
Respond to non-medical queries by politely redirecting the user towards asking a medically relevant question.
If the user asks about doctor availability for appointments, provide a list of available doctors based on the requested time or day.
"""

# Function to fetch available doctors from the database
def get_available_doctors(day=None):
    try:
        # Connect to MySQL database
        connection = mysql.connector.connect(
            host='localhost',
            database='docconnect_db',
            user='root',
            password=''
        )

        if connection.is_connected():
            cursor = connection.cursor(dictionary=True)

            # Correctly specify the last name column based on your actual database schema
            last_name_column = "last_name"  # Change this to the actual column name
            
            # Query to fetch doctors' last names and availability based on the provided day
            if day:
                query = f"""
                SELECT a.{last_name_column} AS doctor_last_name, d.start_wt, d.end_wt, d.start_day, d.end_day
                FROM doctor_info d
                JOIN account a ON d.account_id = a.account_id
                WHERE d.start_day <= %s AND d.end_day >= %s
                """
                cursor.execute(query, (day, day))
            else:
                query = f"""
                SELECT a.{last_name_column} AS doctor_last_name, d.start_wt, d.end_wt, d.start_day, d.end_day
                FROM doctor_info d
                JOIN account a ON d.account_id = a.account_id
                """
                cursor.execute(query)

            doctors = cursor.fetchall()

            if doctors:
                doctor_list = "\n".join(
                    [f"Dr. {doctor['doctor_last_name']} - Available from {doctor['start_wt']} to {doctor['end_wt']} on {doctor['start_day']} to {doctor['end_day']}" for doctor in doctors]
                )
                return f"Available doctors:\n{doctor_list}"
            else:
                return "No doctors are available at the specified time or day."

    except Error as e:
        return f"Error accessing the database: {str(e)}"

    finally:
        if connection.is_connected():
            cursor.close()
            connection.close()


# Check if message argument is provided
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
    # Add more days as needed

    # Fetch available doctors
    doctor_info = get_available_doctors(day)
    print(doctor_info)
else:
    # If the question is not about doctor availability, use the AI model
    response = chat.send_message(complete_message)
    print(response.text)
