<?php

	require_once('lib/Game.php');

	$game = new Game();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Juego de Memoria</title>
	<link href="assets/css/styles.css" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="assets/js/game.js"></script>
</head>
<body>
     
    <div>
        <h1>Juego de <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
        <h2>Hora y Fecha de Inicio del Juego <b><?php date_default_timezone_set('America/Panama'); echo
        $today = date("Y-m-d H:i:s"); ?></b>.</h2>

    </div>
	<?php //var_dump($game); ?>
	<div id="board">
		<?php
			$board = $game->getBoard();
			$rows = $game->getNumberOfRows();
			$columns = $game->getNumberOfColumns();
			$k = 0;
			for ($i = 0; $i < $rows; $i++) {
				echo '<div class="row">';
				for ($j = 0; $j < $columns; $j++) {

		?>
				<div class="card" data-index="<?php echo $k ?>"></div>
		<?php
				$k++;
				}

				echo "</div>";
			}
		?>
                 
               
	</div>
</body>
</html>