<?php

// Connexion à la base de données

$conn = new PDO("mysql:host=localhost;dbname=reservation_formulaire;charset=utf8mb4", "titi", "Kheirabouzidi64.", []);

// Requête avec PHP

$stmt = $conn->prepare("SELECT * FROM formulaire");
$stmt->execute();

// Récupération de tout les enregistrements sous forme de tableau

$reservation = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($formulaire);