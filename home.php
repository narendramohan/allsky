<?php

session_start();
if(!$_SESSION['auth']) {
 header('location:loginPage.php);
}
?

<h1> welcome to home page </h1>