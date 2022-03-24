<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/reservations.css">
    <link rel="stylesheet" href="../styles/mediaqueries2.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    </style>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');
    </style>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.12.4.js"></script>
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Réservation</title>
</head>
<body>
<?php include '../includes/navbar.php'; ?>
<div class="block">
<div class="block-inside">
<ul class="reservUL">
        <li class="reservli active"><span class="glyphicon glyphicon-calendar"></span><span class="textli">&nbsp;Date & Heure</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-user"></span><span class="textli">&nbsp;Menus</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-option-horizontal"></span><span class="textli">&nbsp;Options</span><li>
        <li class="reservli"><span class="glyphicon glyphicon-ok"></span><span class="textli">&nbsp;Confirmation & Paiement</span><li>
</ul>
<div class="all1">
<h2 class="titre">Réservez une table</h2>
<div id="datepicker"></div>
<h2 class="titre1">Services possibles</h2>
<table class="table services-Table">
    <tbody>
        <tr>
            <th></th>
            <th>Horaire</th>
            <th>Lieu</th>
            <th></th>
        </tr>
        <tr>
            <td rowspan="3" class="top">Déjeuner</td>
            <td>12h15</td>
            <td>Arc de Triomphe</td>
            <td><a class="load" href="reservation2.php">Choisir</td>
        </tr>
        <tr>
            <td>12h15</td>
            <td>Arc de Triomphe</td>
            <td><a class="load" href="reservation2.php">Choisir</td>
        </tr>
        <tr>
            <td>12h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
        <tr>
            <td rowspan="4" class="down">Diner</td>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td><a class="load" href="reservation2.php">Choisir</td>
        </tr>
        <tr>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
        <tr>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
        <tr>
            <td>19h45</td>
            <td>Arc de Triomphe</td>
            <td class="end">Non disponible</td>
        </tr>
    </tbody>
</table>
</div>        
</div>
<?php include '../includes/footer.php'; ?>
</div>



<script>
$( "#datepicker" ).datepicker();
</script>
</body>
</html>