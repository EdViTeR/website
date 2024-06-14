<?php
session_start();
unset($_SESSION['search_ornaments']);
header('Location: collections.php');