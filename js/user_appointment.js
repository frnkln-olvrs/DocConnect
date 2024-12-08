document.addEventListener("DOMContentLoaded", function () {
  const doctorSearch = document.getElementById("doctorSearch");
  const doctorDropdown = document.getElementById("doctorDropdown");
  const doctorIdInput = document.getElementById("doctor_id");
  const specialty = document.getElementById("specialty");
  const contact = document.getElementById("contact");
  const email = document.getElementById("email");
  const workingDays = document.getElementById("working_day");
  const workingHours = document.getElementById("working_time");
  const accountImage = document.getElementById("account_image");
  const appointmentTime = document.getElementById("appointment_time");
  const appointmentDate = document.getElementById("appointment_date");
  const doctorName = document.getElementById("doctor_name");
  const requestButton = document.getElementById("request");

  let startDay, endDay;

  // Utility Functions
  const formatTime = (time) => {
    let [hours, minutes] = time.split(":");
    hours = parseInt(hours);
    const suffix = hours >= 12 ? "PM" : "AM";
    hours = hours % 12 || 12;
    return `${hours}:${minutes} ${suffix}`;
  };

  const formatMySQLTimeTo24Hour = (time) => {
    const [hours, minutes] = time.split(":");
    return `${hours}:${minutes}`;
  };

  const formatDate = (date) => {
    const year = date.getFullYear();
    const month = String(date.getMonth() + 1).padStart(2, "0");
    const day = String(date.getDate()).padStart(2, "0");
    return `${year}-${month}-${day}`;
  };

  const getAllowedDaysRange = (startDay, endDay) => {
    const daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    const startIdx = daysOfWeek.indexOf(startDay);
    const endIdx = daysOfWeek.indexOf(endDay);

    const allowedDays = [];
    for (let i = startIdx; i !== (endIdx + 1) % 7; i = (i + 1) % 7) {
      allowedDays.push(daysOfWeek[i]);
    }
    return allowedDays;
  };

  const validateDate = () => {
    const minDate = new Date();
    const maxDate = new Date(minDate);
    maxDate.setMonth(maxDate.getMonth() + 1);

    appointmentDate.min = formatDate(minDate);
    appointmentDate.max = formatDate(maxDate);

    const allowedDays = getAllowedDaysRange(startDay, endDay);
    const selectedDate = new Date(appointmentDate.value);
    const dayName = selectedDate.toLocaleDateString("en-US", { weekday: "long" });

    if (!allowedDays.includes(dayName)) {
      appointmentDate.setCustomValidity(`Please select a valid day from ${startDay} to ${endDay}.`);
    } else {
      appointmentDate.setCustomValidity("");
    }
  };

  const populateDropdown = (doctors) => {
    doctorDropdown.innerHTML = "";
    doctors.forEach((doctor) => {
      const li = document.createElement("li");
      li.classList.add("list-group-item", "cursor-pointer");
      li.textContent = doctor.doctor_name;
      li.setAttribute("data-id", doctor.account_id);

      li.addEventListener("click", () => {
        doctorName.querySelector("span.text-black-50").nextSibling.textContent = ` ${doctor.doctor_name}`;
        doctorIdInput.value = doctor.doctor_id;
        specialty.querySelector("span.fw-semibold").nextSibling.textContent = ` ${doctor.specialty}`;
        contact.querySelector("span.fw-semibold").nextSibling.textContent = ` ${doctor.contact}`;
        email.querySelector("span.fw-semibold").nextSibling.textContent = ` ${doctor.email}`;
        workingDays.querySelector("span.fw-semibold").nextSibling.textContent = ` ${doctor.start_day} to ${doctor.end_day}`;
        workingHours.querySelector("span.fw-semibold").nextSibling.textContent = ` ${formatTime(doctor.start_wt)} to ${formatTime(doctor.end_wt)}`;
        accountImage.src = `../assets/images/${doctor.account_image}`;
        appointmentTime.min = formatMySQLTimeTo24Hour(doctor.start_wt);
        appointmentTime.max = formatMySQLTimeTo24Hour(doctor.end_wt);
        appointmentDate.dataset.startday = doctor.start_day;
        appointmentDate.dataset.endday = doctor.end_day;
        requestButton.removeAttribute("disabled");
        doctorDropdown.classList.add("d-none");

        startDay = doctor.start_day;
        endDay = doctor.end_day;

        validateDate();
      });

      doctorDropdown.appendChild(li);
    });

    doctorDropdown.classList.toggle("d-none", doctors.length === 0);
  };

  // Fetch doctors and attach event listeners
  fetch("../handlers/get_doctors.php")
    .then((response) => response.json())
    .then((data) => {
      doctorSearch.addEventListener("focus", () => {
        if (!doctorSearch.value && data.length > 0) {
          populateDropdown(data);
        }
      });

      doctorSearch.addEventListener("input", () => {
        const searchTerm = doctorSearch.value.toLowerCase();
        const filteredDoctors = data.filter((doctor) =>
          doctor.doctor_name.toLowerCase().includes(searchTerm)
        );
        populateDropdown(filteredDoctors);
      });

      document.addEventListener("click", (event) => {
        if (!doctorSearch.contains(event.target) && !doctorDropdown.contains(event.target)) {
          doctorDropdown.classList.add("d-none");
        }
      });
    })
    .catch((error) => console.error("Error fetching doctors:", error));

  // Round time to nearest half hour
  document.getElementById("appointment_time").addEventListener("change", function () {
    const roundTimeToNearestHalfHour = (time) => {
      let [hours, minutes] = time.split(":").map(Number);

      if (minutes < 15) {
        minutes = "00";
      } else if (minutes < 45) {
        minutes = "30";
      } else {
        minutes = "00";
        hours = (hours + 1) % 24;
      }

      return `${String(hours).padStart(2, "0")}:${String(minutes).padStart(2, "0")}`;
    };

    this.value = roundTimeToNearestHalfHour(this.value);
  });

  // Validate date input on change
  appointmentDate.addEventListener("input", validateDate);

  // Validate form on submit
  const form = document.querySelector("form");
  form.addEventListener("submit", (event) => {
    if (!appointmentDate.checkValidity()) {
      event.preventDefault();
      appointmentDate.reportValidity();
    }
  });
});