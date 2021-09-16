<<<<<<< HEAD
const scriptURL = 'https://script.google.com/macros/s/AKfycbwYhrXVgJYcdLTfU4_tIpNPCrVQzI9hSnQ3gyZywQ0hhAeGHTg-ADXwkr_qEb8MpAY_/exec';
const form = document.forms['submit-to-google-sheet'];
const formSubmit = document.querySelector('.form-submit');
const MyAlert = document.querySelector('#alert');

form.addEventListener('submit', e => {
  e.preventDefault();
  formSubmit.innerHTML = "Tunggu";
  formSubmit.setAttribute('disabled', 'disabled');
  fetch(scriptURL, {
      method: 'POST',
      body: new FormData(form)
    })
    .then(response => {
      setAlert("Pesan Berhasil Dikirim!!");
      console.log('Success!', response);
    })
    .catch(error => {
      setAlert("Pesan Gagal Dikirim!!");
      console.error('Error!', error.message);
    })
});

function setAlert(message) {
  formSubmit.innerHTML = "Send";
  formSubmit.removeAttribute('disabled');
  MyAlert.innerHTML = message;
  MyAlert.classList.add('show');
  setTimeout(() => {
    MyAlert.classList.remove('show');
  }, 2000);
  form.reset();
=======
const scriptURL = 'https://script.google.com/macros/s/AKfycbwYhrXVgJYcdLTfU4_tIpNPCrVQzI9hSnQ3gyZywQ0hhAeGHTg-ADXwkr_qEb8MpAY_/exec';
const form = document.forms['submit-to-google-sheet'];
const formSubmit = document.querySelector('.form-submit');
const MyAlert = document.querySelector('#alert');

form.addEventListener('submit', e => {
  e.preventDefault();
  formSubmit.innerHTML = "Tunggu";
  formSubmit.setAttribute('disabled', 'disabled');
  fetch(scriptURL, {
      method: 'POST',
      body: new FormData(form)
    })
    .then(response => {
      setAlert("Pesan Berhasil Dikirim!!");
      console.log('Success!', response);
    })
    .catch(error => {
      setAlert("Pesan Gagal Dikirim!!");
      console.error('Error!', error.message);
    })
});

function setAlert(message) {
  formSubmit.innerHTML = "Send";
  formSubmit.removeAttribute('disabled');
  MyAlert.innerHTML = message;
  MyAlert.classList.add('show');
  setTimeout(() => {
    MyAlert.classList.remove('show');
  }, 2000);
  form.reset();
>>>>>>> e1a562a (Add Faker)
}