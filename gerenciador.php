<?php
?>

<!DOCTYPE html>
<html>

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Gerenciador</title>
	<link rel="stylesheet" href="css/gerenciador.css">
	<script src="js/jquery-3.5.1.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body>
	<div class="box">

		<div id="menulateral">

			<div id="imgperfil2"><img src="imagens/admin.jpg" class="img2"></div>

			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link w-100 text-center active" id="v-pills-home-tab" data-toggle="pill" href="#abertas" role="tab" aria-controls="abertas" aria-selected="true">Cadastrar Questão aberta</a>
				<a class="nav-link w-100 text-center" id="v-pills-profile-tab" data-toggle="pill" href="#mult" role="tab" aria-controls="mult" aria-selected="false">Cadastrar Questão mult</a>
				<a class="nav-link w-100 text-center" id="v-pills-messages-tab" data-toggle="pill" href="#verfal" role="tab" aria-controls="verfal" aria-selected="false">Cadastrar Questão Ver/fal</a>
				<a class="nav-link w-100 text-center" id="v-pills-settings-tab" data-toggle="pill" href="#team" role="tab" aria-controls="team" aria-selected="false">Cadastrar Equipes</a>
				<a class="nav-link w-100 text-center" id="v-pills-settings-tab" data-toggle="pill" href="#eventostech" role="tab" aria-controls="evento" aria-selected="false">Cadastrar eventos</a>
			</div>
			</div>

		<div class="tab-content">
		
			<div id="abertas" aria-labelledby="abertas" class="tab-pane fade show active" role="tabpanel">
			<form action="creates/create.php"method="POST">

			<input type="text" name="nomeaberta" class="abertas abertas-nome" placeholder=" Nome da Questão aberta" autocomplete="off">
			<input type="text" name="textoaberta" class="abertas abertas-texto" placeholder=" Texto da Questão" autocomplete="off">
			<input type="text" name="rubricaaberta" class="abertas abertas-rubrica" placeholder=" Resposta da Questão" autocomplete="off">
			<input type="submit" value="enviaraberta" class="button button-aberta">
				</form>
			</div>
		  
		<div id="mult" aria-labelledby="mult" class="tab-pane fade" role="tabpanel">
		<form action="creates/createmult.php" method="POST">

			<input type="text" name="nomemult" class="mult mult-nome" placeholder=" Nome da Questão multipla escolha" autocomplete="off">
			<input type="text" name="textomult" class="mult mult-texto" placeholder=" Texto da Questão" autocomplete="off">
			<input type="text" name="Alternativaa" class="mult mult-alta" placeholder=" Alternativa a" autocomplete="off">
			<input type="text" name="Alternativab" class="mult mult-altb" placeholder=" Alternativa b" autocomplete="off">
			<input type="text" name="Alternativac" class="mult mult-altc" placeholder=" Alternativa c" autocomplete="off">
			<input type="text" name="Alternativad" class="mult mult-altd" placeholder=" Alternativa d" autocomplete="off">
			<input type="text" name="Alternativae" class="mult mult-alte" placeholder=" Alternativa e" autocomplete="off">
			<input type="text" name="Alternativacerta" class="mult mult-altcerta" placeholder=" Alternativa certa" autocomplete="off">
			<input type="submit" value="enviarmult" class="button button-mult">

				</form>
			</div>

			<div id="verfal" aria-labelledby="verfal" class="tab-pane fade" role="tabpanel">
			<form action="creates/createvf.php" method="POST">

			<input type="text" name="nomeverfal" class="verfal verfal-nome" placeholder=" Nome da Questão verdadeiro/falso" autocomplete="off">
			<input type="text" name="textoverfal" class="verfal verfal-texto" placeholder=" Texto da Questão" autocomplete="off">
			<input type="text" name="rubricaverfal" class="verfal verfal-rubrica" placeholder=" Resposta da Questão" autocomplete="off">
			<input type="submit" value="enviarverfal" class="button button-verfel">

			</form>
			</div>

			<div id="team" aria-labelledby="team" class="tab-pane fade" role="tabpanel">

			<form action="creates/createteam.php" method="POST">
			<input type="text" name="nomeequipe" class="equipe equipe-nome" placeholder=" Nome da equipe" autocomplete="off">
			<select name="eventoequipe" class="equipe equipe-evento" placeholder=" Selecione o evento">
		</select>
			<input type="text" name="loginequipe" class="equipe equipe-login" placeholder=" Login da equipe" autocomplete="off">
			<input type="password" name="senhaequipe" class="equipe equipe-senha" placeholder=" Senha da equipe" autocomplete="off">
			<input type="submit" value="enviarteam" class="button button-team">
			</form>
			</div>

		<div id="eventostech" aria-labelledby="evento" class="tab-pane fade" role="tabpanel"> 
		<form action="creates/createevento.php" method="POST">
		<input type="text" name="nomeevento" class="evento evento-nome" placeholder=" nome do evento" autocomplete="off">
			<input type="text" name="semestreevento" class="evento evento-semestre" placeholder=" Semestre do evento" autocomplete="off">
			<input type="submit" value="enviarequipe" class="button button-team">
			</form>	
			</div>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>