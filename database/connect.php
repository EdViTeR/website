<?php
    try {
      $dbo = new PDO('mysql:host=localhost;dbname=base_for_site', 'root', 'root');
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      die();
    }
?>