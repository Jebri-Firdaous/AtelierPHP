<?php
if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
  header('Location: ajoutClub.html');
  exit;
}

if (isset($_GET['Id']) && ($_GET['Nom']) && ($_GET['Desc']) && ($_GET['Adress']) && ($_GET['Domain'])) {
  $Id = $_GET['Id'];
  $Nom = $_GET['Nom'];
  $Desc = $_GET['Desc'];
  $Adress = $_GET['Adress'];
  $Domain = $_GET['Domain'];
?>
<html>
    <style>
        table, th, td {
         border: 1px solid black;
        }
        .centred-title,{
            text-align: center;
        }
        </style>
<h1 class="centred-title">Affichage des Clubs</h1>
<table>
  <thead>
    <tr>
      <th>Id</th>
      <th >Nom</th>
      <th >Description</th>
      <th >Adress</th>
      <th >Domaine</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><?php echo $Id; ?></td>
      <td><?php echo $Nom; ?></td>
      <td><?php echo $Desc; ?></td>
      <td><?php echo $Adress; ?></td>
      <td><?php echo $Domain; ?></td>
    </tr>
  </tbody>
</table>
<?php
} else 
  echo "Champs manquants";
?>
</html>