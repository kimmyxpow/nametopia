// ? My Script

const navMenu = document.querySelector('.nav__menu');
const navMenuDropdown = document.querySelector('.nav__menu-dropdown');
const selectCountry = document.querySelector('#select-country');
const selectGender = document.querySelector('#select-gender');
const btnGenerate = document.querySelector('#btn-generate');
const generateName = document.querySelector('.generate__name');
const btnSalin = document.querySelector('.btn-salin');
const MyAlert = document.querySelector('#alert');
const copyText = document.querySelector('#input-copy');
const ldsRing = document.querySelector('.lds-ring');
const container = document.querySelector('#container');

navMenu.addEventListener('click', () => {
  navMenuDropdown.classList.toggle('show');
});

document.addEventListener('click', (e) => {
  const element = navMenuDropdown.contains(e.target);
  const element2 = navMenu.contains(e.target);
  if (!element && !element2) {
    navMenuDropdown.classList.remove('show');
  }
});

btnGenerate.addEventListener('click', function () {
  getAjax();
});

selectCountry.addEventListener('change', () => {
  getAjax();
});

selectGender.addEventListener('change', () => {
  getAjax();
});

function getAjax() {
  ldsRing.classList.add('show');
  container.classList.add('no-scroll');
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      generateName.innerHTML = xhr.responseText;
      copyText.value = xhr.responseText;
      ldsRing.classList.remove('show');
      container.classList.remove('no-scroll');
    }
  }
  xhr.open('GET', `backend/generate.php?c=${selectCountry.value}&g=${selectGender.value}`, true);
  xhr.send();
}

btnSalin.addEventListener('click', () => {
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  MyAlert.innerHTML = "Berhasil Disalin!";
  MyAlert.classList.add('show');
  setTimeout(() => {
    MyAlert.classList.remove('show');
  }, 2000);
});

// ? gsap 

gsap.from('nav', {
  duration: 0.8,
  opacity: 0,
  delay: 1.6,
});
gsap.from('.main__header-text', {
  duration: 0.8,
  y: -100,
  opacity: 0,
  ease: 'back',
  delay: 0.5,
});
gsap.from('.main__text', {
  duration: 0.8,
  y: -100,
  opacity: 0,
  ease: 'back',
  delay: 0.8,
});
gsap.from('#btn-wrapper', {
  duration: 0.8,
  y: -100,
  opacity: 0,
  ease: 'back',
  delay: 1.1,
});
