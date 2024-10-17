import sys
import google.generativeai as ai

# API configuration
API_KEY = 'AIzaSyAOl_uvObdzhbiRwaIeJVJ3OAKci89F62M'
ai.configure(api_key=API_KEY)

model = ai.GenerativeModel("gemini-pro")
chat = model.start_chat()

system_instruction = "AI is restricted to only answering questions related to medical topics. Any questions outside of medical subjects, such as personal inquiries, technical assistance, or general knowledge, must not be addressed. Respond to non-medical queries by politely redirecting the user towards asking a medically relevant question."

# Check if message argument is provided
if len(sys.argv) < 2:
    print("Please provide a medical question as an argument.")
    sys.exit(1)

message = sys.argv[1]
complete_message = f"{system_instruction}\nUser: {message}"

response = chat.send_message(complete_message)
print(response.text)
