<?php  

// Les données en provenance du formulaire

$prenom = $_POST["prenom"];
$nom = $_POST["nom"];


// Connexion à la base de données
$conn = new PDO("mysql:host=localhost;dbname=reservation_formulaire;charset=utf8mb4", "titi","Kheirabouzidi64.", []);

// Requête SQL
$sql = "INSERT INTO formulaire(nom,prenom) VALUES (:nom, :prenom)";

// Envoi de la requête SQL à la base de données
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nom', $nom);
$stmt->bindParam(':prenom', $prenom);
$stmt->execute();