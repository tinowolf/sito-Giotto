<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="gallery-clean.css">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    /*.row.content {height: 450px}*/

    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }

    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>
<?php
	// this is a php script
	include 'menu.php';
?>

<div class="container-fluid text-center">
  <div class="row content">
  <?php include "sideL.php"; ?>
    <div class="col-sm-10 text-left">
      <h1>Benvenuti</h1>
      <p>Un progetto di alternanza scuola-lavoro pu&#242 diventare, se concepito e vissuto con lo spirito giusto,
	  una preziosa occasione di crescita per gli studenti e - cosa non banale - per le persone che hanno l'onore di assisterli.
	  Una simile ricorsivit&#224 d'apprendimento &#232 possibile perch&#233 questo progetto conduce gli studenti lungo un sentiero di formazione
	  che si apre sulla ricca bellezza del ciclo giottesco della Cappella degli Scrovegni, la cui messa in mostra in forma digitale &#232
	  allestita presso la Scuola Grande di San Rocco di Venezia. La passione del Professore Roberto Filippetti, che da anni si cura
	  di illustrare uno dei diamanti della cultura occidentale, incontra la disponibilit&#224 degli Uffici Scolastici e la collaborazione
	  dell'Associazione Terzo Millennio: di qui l'opportunit&#224 di richiamare l'attenzione dei nostri studenti, affinch&#233 i loro sguardi
	  possano volgersi verso il bello che d&#224 luce al presente, irradiando da tempi apparentemente remoti.</p>
      <hr>
    </div>
	<?php include "sideR.php"; ?>
  </div>

</div>

<?php
include 'footer.php';
?>

</body>
</html>
