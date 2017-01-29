<?php
  session_start();
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Checkout</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class='container'>
  <form class='modal' action="pagamento.php" method="post">
    <header class='header'>
      <h1>Pagamento di € </h1>
      <div class='card-type'>
        <a class='card active' href='#'>
          <img src='icon/1.png'>
        </a>
        <a class='card' href='#'>
          <img src='icon/2.png'>
        </a>
        <a class='card' href='#'>
          <img src='icon/3.png'>
        </a>
        <a class='card' href='#'>
          <img src='icon/4.png'>
        </a>
      </div>
    </header>
    <div class='content'>
      <div class='form'>
        <div class='form-row'>
          <div class='input-group'>
            <label for=''>Intestatario della carta</label>
            <input name="intestatario" type='text'>
          </div>
        </div>
        <div class='form-row'>
          <div class='input-group'>
            <label for=''>Numero della carta</label>
            <input maxlength='16' name="number" type='number'>
          </div>
        </div>
        <div class='form-row'>
          <div class='input-group'>
            <label for=''>Data scadenza</label>
            <input name="data" type='month'>
          </div>
          <div class='input-group'>
            <label for=''>CVS</label>
            <input maxlenght='4' name="cvs" type='number'>
          </div>
        </div>
      </div>
    </div>
    <footer class='footer'>
      <button type="submit" class='button'>Completa pagamento</button>
    </footer>
  </form>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
