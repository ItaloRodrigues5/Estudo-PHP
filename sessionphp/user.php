<?php

session_start();

var_dump(session_id());

if(isset($_SESSION['user'])){
    var_dump($_SESSION['user']);
}

var_dump($_SESSION['person']);

?>