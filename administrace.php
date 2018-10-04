<?php

session_start();
var_dump(isset($_SESSION['loggedIn']));
if (isset($_SESSION['loggedIn'])) {
    echo 'přihlášen';
}
else {
    echo 'nepřihlášen';
}

var_dump(session_id());
