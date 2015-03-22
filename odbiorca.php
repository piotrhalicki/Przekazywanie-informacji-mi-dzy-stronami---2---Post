<!DOCTYPE html>

<html lang="pl-PL">
	<head>
		<meta charset="UTF-8">
		<meta name="Przekazywanie informacji" content="przekazywanie informacji, post, formularze">	
		<title>						
		Przekazywanie informacji między stronami - 2 - Post / Formularze
		</title>
	</head>

	<body>

	<h1>
	<strong><em>Przekazywanie informacji między stronami</em></strong>
	</h1>
	
		<br>
	<hr>
		<br>
	
	<h2> 							
	<strong>02 - Post / Formularze</strong>
	</h2>
		
		<br>
	<hr>
		<br>
		

<?php
		
$imie = '';
$nazwisko = '';
$miasto = '';
$wiek = '';
$plec = '';
$oSobie = '';
$komunikat = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
	if(isset($_POST['imie']) && strlen(trim($_POST['imie'])) > 2){
		$imie = trim($_POST['imie']);
	}
	if(isset($_POST['nazwisko']) && strlen(trim($_POST['nazwisko'])) > 2){
		$nazwisko = trim($_POST['nazwisko']);
	}
	if(isset($_POST['miasto']) && strlen(trim($_POST['miasto'])) > 2){
		$miasto = trim($_POST['miasto']);
	}
	if(isset($_POST['wiek']) && strlen(trim($_POST['wiek'])) != 0){
		$wiek = trim($_POST['wiek']);
	}
	if(isset($_POST['plec'])){
		$plec = ($_POST['plec']);
	}
	if(isset($_POST['osobie']) && strlen($_POST['osobie']) > 2){
		$oSobie = $_POST['osobie'];
	}
	if($imie && $nazwisko && $miasto && $wiek && $plec && $oSobie){
		$komunikat = "Gratulacje! Formularz wypełniony poprawnie.";
		echo $komunikat;
		var_dump($_POST);
		echo '<strong>', "Imię: ", '</strong>', ucfirst($_POST["imie"]), ",", '<br>';
		echo '<strong>', "Nazwisko: ", '</strong>', ucfirst($_POST["nazwisko"]), ",", '<br>';
		echo '<strong>', "Miasto: ", '</strong>', ucfirst($_POST["miasto"]), ".", '<br>';
		echo '<strong>', "Wiek: ", '</strong>', ucfirst($_POST["wiek"]), ",", '<br>';
		echo '<strong>', "Płeć: ", '</strong>', ucfirst($_POST["plec"]), ",", '<br>';
		echo '<strong>', "O sobie: ", '</strong>', ucfirst($_POST["osobie"]), ".", '<br>';
	}
	else{
		$komunikat = "Coś poszło nie tak. Formularz wypełniony NIEpoprawnie! :(";
		echo $komunikat;
	}
}
		
?>
		
		
	</body>

</html>	