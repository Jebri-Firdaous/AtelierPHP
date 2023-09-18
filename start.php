<?php
include 'Club.php';
include 'config.php';


$club = new Club(1, "Club Robotique", "Test", "Esprit Ghazala", "Electromecanique");

$club->afficherClub();echo "<br>";echo "--------------------------------------";echo "<br>";echo "<br>";
Club::afficherClubs();
?>
