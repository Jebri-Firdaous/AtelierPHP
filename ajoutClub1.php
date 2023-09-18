<?php
include 'Club.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["Id"];
    $nom = $_POST["Nom"];
    $description = $_POST["Desc"];
    $adresse = $_POST["Adress"];
    $domaine = $_POST["Domain"];

    $club1 = new Club($id, $nom, $description, $adresse, $domaine);

    var_dump($club1);
}

?>
