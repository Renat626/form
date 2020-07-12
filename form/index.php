<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css" integrity="sha384-xxzQGERXS00kBmZW/6qxqJPyxW3UR0BPsL4c8ILaIWXva5kFi7TxkIIaMiKtqV1Q" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container">
    <div class="form">
      <button id="buttonClose"><i class="fas fa-times"></i></button>

      <div class="form__header">
        <h1>Не можете определиться с выбором?</h1>
        <h2>Заполните форму , мы перезвоним и соберём <span>идеальный букет</span> для Вашего случая!</h2>
      </div>

      <div class="form__content">
        <form action="assets/php/post.php" method="post">
          <p>Ваше имя *</p>
          <input type="text" name="userName"><br>
          <p>Телефон *</p>
          <input type="tel" name="userPhone" id="phone"><br>
          <input type="checkbox" class="custom-checkbox" id="checkbox"><label for="checkbox">Я согласен на <span>обработку персональных данных</span></label><br>
          <input type="submit" disabled>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="assets/js/jquery.maskedinput.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/jquery.js"></script>
</body>
</html>
