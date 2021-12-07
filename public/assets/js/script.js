var input = document.querySelector('#password');
var img = document.querySelector('#zoio');
img.addEventListener('click', function () {
  input.type = input.type == 'text' ? 'password' : 'text';
});
var input2 = document.querySelector('#password_confirmation');
var img2 = document.querySelector('#zoio_confirm');
img2.addEventListener('click', function () {
  input2.type = input2.type == 'text' ? 'password' : 'text';
});


function home()

{
    window.location.href = "/";
}
