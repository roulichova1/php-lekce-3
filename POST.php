
    <form method="POST">
    Jméno: <input type="text"name="firstName">
    </br>
    Heslo: <input type="password"name="secret">
    </br>
    <input type="checkbox"name="optIn"> Souhlasím
    <input type="submit">
</form>
<?php
  echo '<br>POST: ';
var_dump($_POST);

