// Add code to handle toggle button click and show/hide forms
const toggleButton = document.querySelector('.toggle-button');
const loginForm = document.querySelector('.login-form');
const signupForm = document.querySelector('.signup-form');

toggleButton.addEventListener('click', () => {
  loginForm.classList.toggle('active');
  signupForm.classList.toggle('active');
});
