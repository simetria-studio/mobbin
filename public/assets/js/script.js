var input = document.querySelector('#password');
var img = document.querySelector('#zoio');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});
