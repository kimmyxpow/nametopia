<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Suggestion | MyName</title>
</head>

<body class="body-form">
  <canvas id="canvas"></canvas>
  <div class="form">
    <h1 class="form__header">Suggestion</h1>
    <form class="form-input" name="submit-to-google-sheet">
      <div class="input-field">
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
      </div>
      <div class="input-field">
        <label for="message">Message</label>
        <textarea name="message" id="message"></textarea>
      </div>
      <button class="form-submit" type="submit">Send</button>
    </form>
  </div>
  <p id="alert">Pesan Berhasil Dikirim!!</p>
  <!-- ? starback.js -->
  <script src="https://unpkg.com/starback@1.0.0/dist/starback.js"></script>
  <script src="assets/js/formSubmit.js"></script>
  <script src="assets/js/starback.js"></script>
</body>

</html>