<?php
  $pdo = new PDO("mysql:host=localhost;dbname=patientenverwaltung","root","");
  
  $sql = "INSERT INTO patienten (Vorname, Nachname, Geburtsdatum, Versicherungsnummer, Versicherungen_idVersicherungen) VALUES (?,?,?,?,?)";


  $Vorname = $_POST["Vorname"];
  $Nachname = $_POST["Nachname"];
  $Geburtsdatum = $_POST["Geburtsdatum"];
  $Versicherungsnummer = $_POST["Versicherungsnummer"];
  $Versicherungen_idVersicherungen = $_POST["Versicherungen_idVersicherungen"];
  

  $statement = $pdo->prepare($sql);
  $statement->execute(array($Vorname, $Nachname, $Geburtsdatum, $Versicherungsnummer, $Versicherungen_idVersicherungen));

?>