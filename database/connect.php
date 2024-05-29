<?php
try {
  session_start();
  $dbo = new PDO('mysql:host=localhost;dbname=base_for_site', 'root', 'root');
} catch (PDOException $e) {
  print "Error!: " . $e->getMessage();
  die();
}
