function validateForm() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const dl = document.getElementById("dl").value;
    const vehicle = document.getElementById("vehicle").value;
    const checkInDatetime = document.getElementById("checkInDatetime").value;
    const vehicle_type = document.getElementById("vehicle_type").value;

  
    // Basic validation
    if (name === "") {
      alert("Please enter your name.");
      return false;
    }
  
    if (email === "") {
      alert("Please enter your email address.");
      return false;
    }
  
    if (!isValidEmail(email)) {
      alert("Please enter a valid email address.");
      return false;
    }
  
    if (phone === "") {
      alert("Please enter your phone number.");
      return false;
    }
  
    if (dl === "") {
      alert("Please enter your DL number");
      return false;
    }
  
    if (vehicle === "") {
      alert("Please enter your vehicle registration number");
      return false;
    }
  
    if (checkInDatetime === "") {
      alert("Please select your date and time");
      return false;
    }

    if (vehicle_type === "") {
      alert("Please select your vehicle type");
      return false;
    }
   
  
    // Additional validation (e.g., date range, room availability) can be added here
  
    return true;
  }
  
  function isValidEmail(email) {
    // Regular expression for email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
  }
  