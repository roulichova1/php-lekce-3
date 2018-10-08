<?php

session_start();
var_dump(isset($_SESSION['loggedIn']));
echo '<br>';
if (isset($_SESSION['loggedIn'])) {
    echo 'přihlášen';
}
else {
    echo 'nepřihlášen';
}
echo '<br>';
var_dump(session_id());
