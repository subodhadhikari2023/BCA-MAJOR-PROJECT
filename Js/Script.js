// For password checking
function checkPasswordMatch() {
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirm-password");
  const error = document.getElementById("password-match-error");

  if (password.value !== confirmPassword.value) {
    error.style.display = "block";
  } else {
    error.style.display = "none";
  }
}





