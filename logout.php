<!DOCTYPE html>
<html lang="en">
<head>
    <title>DU-logout</title>
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
            <button type="submit" class="btn btn-primary" name='button' value='submit' >Odhlásit</button>
        </div
      </form> 
<?php
session_start();
if (isset($_POST['button']) && $_POST['button']=='submit'){
    unset($_SESSION['login']);
    unset($_SESSION['heslo']);
    if (!isset($_SESSION['login']) && !isset($_SESSION['login'])) {
        echo '<strong>Odhlášení proběhlo úspěšně</strong>';
        echo '<br>';
        echo '<br>';
        echo '<a href="login.php">Zpět na přihlašovací formulář</a>';
        }
    }

?>
</div>
</body>
</html>
