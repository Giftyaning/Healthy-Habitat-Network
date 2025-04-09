//Login Functions
document.addEventListener("DOMContentLoaded", function () {
  const loginForm = document.getElementById("loginForm");

  if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();

      const email = document.getElementById("email")?.value;
      const password = document.getElementById("password")?.value;
      const rememberMe = document.getElementById("rememberMe")?.checked;

      if (!email || !password) {
        alert("Please fill in all fields");
        return;
      }

      if (!document.getElementById("email").checkValidity()) {
        alert("Please enter a valid email address");
        return;
      }

      console.log("Login attempt:", { email, password, rememberMe });
      alert("Login successful! (Demo)");

    });
  }
});
