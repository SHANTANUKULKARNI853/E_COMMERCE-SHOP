function validateForm() {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  if (username === "" || password === "") {
    var errorMessage = document.getElementById("error-message");
    errorMessage.innerHTML = "Please enter a username and password.";
    return false;
  }

  // Additional validation logic goes here...

  return true;
}
