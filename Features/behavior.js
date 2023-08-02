const input = document.querySelector('.search-box input[type="text"]');
const button = document.querySelector('.search-box button');

button.addEventListener('click', function() {
  input.focus();
})

input.addEventListener('focus', function() {
  input.classList.add('active');
})

input.addEventListener('blur', function() {
  input.classList.remove('active');
})
