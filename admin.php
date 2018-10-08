<!DOCTYPE html>
<html lang="en">
<head>
    <title>DU-admin</title>
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
<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login']) {
    echo '<h2>Vítejte, ';
    //var_dump($_SESSION['login']);
    print_r($_SESSION['login']);
    echo '</h2>
          <table class="table table-bordered">';
    if (isset($_SESSION['data']) && $_SESSION['data']) {
        //var_dump($_SESSION['data']);
        foreach (($_SESSION['data']) as $polozka => $hodnota) {
            echo "<tr>
                    <td>$polozka</td>
                    <td>$hodnota</td>
                  </tr>";
             }
    }
    echo '</table>
          <div class="form-group col-md-4">
            <a href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Odhlášení</a>
          </div>';    
} else {
    echo 'Přístup zamítnut';
}
?>
</div>
</body>
</html>


