<!DOCTYPE html>
<html lang="en">
<head>
    <title>DU-ukol-3</title>
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

    <table class="table table-bordered">
<?php

$predmety = ['matematika' => 1, 'fyzika' => 2, 'chemie' => 1, 'zeměpis' => 4 ];
$prumer = array_sum($predmety) / count($predmety);
foreach ($predmety as $predmet => $znamka) {
    if ($znamka > 3) {
        $trida = 'class="alert-danger"';
    }
    else {
        $trida = '';
    }
   echo "<tr $trida>
            <td>$predmet</td>
            <td>$znamka</td>
        </tr>";
}

echo '</table>';  
echo "Průměr: $prumer";
?>
</div>
</body>
</html>
