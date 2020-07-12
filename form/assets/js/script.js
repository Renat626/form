const checkbox = document.querySelector('#checkbox');
const buttonClose = document.querySelector('#buttonClose');
let submit = document.querySelector('input[type=submit]');
let form = document.querySelector('.form');

buttonClose.addEventListener('click', () => {
  form.className = 'hideForm';
})

checkbox.addEventListener('click', () => {
  if (checkbox.checked == true) {
    submit.removeAttribute('disabled');
  } else {
    submit.setAttribute('disabled', 'disabled');
  }
})
