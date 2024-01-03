document.addEventListener("DOMContentLoaded", function () {
    var emailInput = document.querySelector('input[name="email"]');
    var passwordInput = document.querySelector('input[name="password"]');
    var errorText = document.querySelector('.error-message');

    // Clear error message when email input is clicked
    emailInput.addEventListener("click", function () {
      errorText.textContent = "";
    });

    // Clear error message when password input is clicked
    passwordInput.addEventListener("click", function () {
      errorText.textContent = "";
    });
  });