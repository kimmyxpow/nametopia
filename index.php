<<<<<<< HEAD
<?php require 'assets/functions/main.php' ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <title>Name Generator</title>
</head>

<body>
  <canvas id="canvas"></canvas>
  <section class="section-top">
    <nav class="row">
      <div class="nav">
        <a class="nav__logo" href="#">MyName</a>
        <div class="nav__menu-wrapper">
          <button class="nav__menu"><i class='bx bx-menu-alt-right'></i></button>
          <div class="nav__menu-dropdown">
            <div class="nav__menu-links">
              <a href="form.php" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>Submit Suggestions</span>
              </a>
              <a href="https://github.com/bbhpowpow/myname" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>Github Repository</span>
              </a>
            </div>
            <hr>
            <div class="nav__menu-links">
              <a href="https://www.instagram.com/envil.a/" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>My Instagram</span>
              </a>
              <a href="https://github.com/bbhpowpow" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>My Github</span>
              </a>
              <a href="https://saweria.co/abinf" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>Saweria</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <main class="row">
      <div class="main">
        <div class="main__header">
          <h1 class="main__header-text">WELCOME TO OUR WEBSITE</h1>
        </div>
        <p class="main__text">
          Dapatkan nama terbaik untuk karaktermu dengan mudah<br>bersama <span class="main__logo">MyName</span>.
        </p>
        <div id="btn-wrapper">
          <a class="btn btn-black" data-scroll href="#generate">Mulai</a>
        </div>
      </div>
    </main>
  </section>
  <section class="section-main">
    <div id="particles-js"></div>
    <div class="lds-ring">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="generate" id="generate">
      <div class="generate__header">
        <h2 class="generate__header-text">Generate Nama</h2>
      </div>
      <div class="generate__main">
        <div class="generate__btn-wrapper">
          <select class="btn select-generate" name="" id="select-country">
            <?php for ($i = 0; $i < count(allCountries()); $i++) { ?>
              <option value="<?= allCountries()[$i][1]; ?>" <?= (allCountries()[$i][1] == 'id_ID' ? 'selected' : '') ?>><?= allCountries()[$i][0]; ?></option>
            <?php } ?>
          </select>
          <select class="btn select-generate" name="" id="select-gender">
            <option value="female">Perempuan</option>
            <option value="male" selected>Laki-laki</option>
          </select>
          <button class="btn btn-generate" id="btn-generate">Generate</button>
        </div>
        <h1 class="generate__name">Abi Noval Fauzi</h1>
        <input class="generate__input" type="text" value="Abi Noval Fauzi" id="input-copy" readonly>
      </div>
      <button class="btn btn-generate btn-salin">Salin</button>
    </div>
    <p id="alert">Tunggu Sebentar</p>
  </section>
  <script src="https://unpkg.com/starback@1.0.0/dist/starback.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="assets/js/particles.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/starback.js"></script>
</body>

</html>
=======
<?php require 'assets/functions/main.php' ?>

<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <title>Name Generator</title>
</head>

<body>
  <canvas id="canvas"></canvas>
  <section class="section-top">
    <nav class="row">
      <div class="nav">
        <a class="nav__logo" href="#">MyName</a>
        <div class="nav__menu-wrapper">
          <button class="nav__menu"><i class='bx bx-menu-alt-right'></i></button>
          <div class="nav__menu-dropdown">
            <div class="nav__menu-links">
              <a href="form.php" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>Submit Suggestions</span>
              </a>
              <a href="https://github.com/bbhpowpow/myname" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>Github Repository</span>
              </a>
            </div>
            <hr>
            <div class="nav__menu-links">
              <a href="https://www.instagram.com/envil.a/" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>My Instagram</span>
              </a>
              <a href="https://github.com/bbhpowpow" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>My Github</span>
              </a>
              <a href="https://saweria.co/abinf" target="_blank" rel="noopener noreferrer" class="nav__menu-link">
                <i class='bx bx-chevron-right'></i>
                <span>Saweria</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <main class="row">
      <div class="main">
        <div class="main__header">
          <h1 class="main__header-text">WELCOME TO OUR WEBSITE</h1>
        </div>
        <p class="main__text">
          Dapatkan nama terbaik untuk karaktermu dengan mudah<br>bersama <span class="main__logo">MyName</span>.
        </p>
        <div id="btn-wrapper">
          <a class="btn btn-black" data-scroll href="#generate">Mulai</a>
        </div>
      </div>
    </main>
  </section>
  <section class="section-main">
    <div id="particles-js"></div>
    <div class="lds-ring">
      <div></div>
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="generate" id="generate">
      <div class="generate__header">
        <h2 class="generate__header-text">Generate Nama</h2>
      </div>
      <div class="generate__main">
        <div class="generate__btn-wrapper">
          <select class="btn select-generate" name="" id="select-country">
            <?php for ($i = 0; $i < count(allCountries()); $i++) { ?>
              <option value="<?= allCountries()[$i][1]; ?>" <?= (allCountries()[$i][1] == 'id_ID' ? 'selected' : '') ?>><?= allCountries()[$i][0]; ?></option>
            <?php } ?>
          </select>
          <select class="btn select-generate" name="" id="select-gender">
            <option value="female">Perempuan</option>
            <option value="male" selected>Laki-laki</option>
          </select>
          <button class="btn btn-generate" id="btn-generate">Generate</button>
        </div>
        <h1 class="generate__name">Abi Noval Fauzi</h1>
        <input class="generate__input" type="text" value="Abi Noval Fauzi" id="input-copy" readonly>
      </div>
      <button class="btn btn-generate btn-salin">Salin</button>
    </div>
    <p id="alert">Tunggu Sebentar</p>
  </section>
  <script src="https://unpkg.com/starback@1.0.0/dist/starback.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
  <script src="assets/js/particles.min.js"></script>
  <script src="assets/js/app.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/starback.js"></script>
</body>

</html>
>>>>>>> e1a562a (Add Faker)
