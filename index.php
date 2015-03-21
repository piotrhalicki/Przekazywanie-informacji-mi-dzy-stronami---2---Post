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
		
<form action="odbiorca.php" method="POST"> <!-- Definiowanie formularza / WAŻNE - "action" oraz "method"-->
<fieldset>						<!-- "field set" - zbiór pól, grupowanie podobnych pól -->
		<legend><strong>Kwestionariusz</strong></legend> 			<!-- "legend" - etykieta zbioru pól -->
	
	
	<p> 						<!--  -->
	<label> 					<!--  -->
		<strong>Imię:</strong>
		<br>
		<input type="text" name="imie" placeholder="Podaj imię"> 	<!--  -->
	</label>
	</p>
	
	<p>
	<label>
		<strong>Nazwisko:</strong>
		<br>
	<input type="text" name="nazwisko" placeholder="Podaj nazwisko">
	</label>
	</p>
	
	<p>
	<label>
		<strong>Miasto:</strong>
		<br>
		<input type="text" name="miasto" placeholder="Podaj miasto">
	</label>
	</p>
	
	<p>
	<label>
		<strong>Wiek:</strong>
		<br>
		<select name="wiek">	<!--  -->
			<option value="0">Wybierz</option>
		<optgroup label="junior">									<!--  -->
			<option value="1-25">1 - 25 lat</option>
		</optgroup>
		<optgroup label="już nie junior">
			<option value="26-50">26 - 50 lat</option>
		</optgroup>
		<optgroup label="jeszcze nie senior">
			<option value="51-75">51 - 75 lat</option>
		</optgroup>
		<optgroup label="senior">
			<option value="76-100">76 - 100 lat</option>	
		</optgroup>
		</select>
	</label>
	</p>	
	
	<p>
	<label>
		<strong>Płeć:</strong>
		<br>
		<input type="radio" name="plec" value="1">Kobieta<br>		<!--  -->
		<input type="radio" name="plec" value="2">Mężczyzna
	</label>
	</p>
		
	<p>
	<label>
		<strong>Parę słów o sobie:</strong>
		<br>
		<textarea name="osobie" cols="50" rows="10" placeholder="Napisz parę słów o sobie..."></textarea>	<!--  -->
	</label>
	</p>		
		
		
	<input type="submit" value="Wyślij">							<!--  -->
</fieldset>
</form>	
		
		
	</body>

</html>	