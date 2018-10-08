<!DOCTYPE html>
<html lang="en">
<head>
    <title>DÚ-login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <form method="POST">
      <div class="form-group col-md-4">
        <label>Login:</label>
        <input type="text" name='login' placeholder="">
      </div>
      <div class="form-group col-md-4">
        <label>Heslo:</label>
        <input type="password" name='heslo' placeholder="">
      </div>
      <div class="form-group col-md-4">
        <button type="submit" class="btn btn-primary" name='done' value='submit' >Přihlásit</button>
      </div
    </form>
<?php
session_start();
//var_dump($_POST);
$data = ['Datum registrace:' => '2.4.2018', 'Souhlas s podmínkami' => 'ANO', 'Počet objednávek' => 23];
if (isset($_POST['login']) && $_POST['login']=='admin' && $_POST['heslo']=='top-secret') {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['data'] = $data ;
    echo '<a href="admin.php">Pokračovat do administrace</a>';
}
elseif (isset($_POST['login']) && $_POST['login']!='admin' && !$_POST['heslo']!='top-secret'){
    echo '<strong>Chybné jméno nebo heslo</strong';
}
else {
   echo ''; 
}

?>
</div>
</body>
</html>
