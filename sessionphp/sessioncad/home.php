<?php

session_start();

if(!isset($_session['usuario'])){
    header('Location: cad.php?erro=true'); 
    exit;
}

echo "<body style = 'background-color: lightblue'>
    <h1>Home</h1>
    </body>";
