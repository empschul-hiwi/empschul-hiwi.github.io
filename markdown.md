---
layout: page
title: Kontaktformular
permalink: /markdown/
---
<html>

<p>Wir freuen uns, wenn Sie Interesse daran haben, an unseren Studien teilzunehmen. Bitte nutzen Sie dieses Formular zur Anmeldung und Kontaktaufnahme.<br>
Sobald wir Ihre Anfrage erhalten haben, melden wir uns bei Ihnen. Sie erhalten dann ausführliche Informationen zum Thema und zur Durchführung der Studie, sodass Sie entscheiden können, ob Sie an der Studie teilnehmen und einen Termin vereinbaren möchten. Sie können uns jederzeit mitteilen, wenn Sie keine Einladungen mehr erhalten möchten oder wir Ihre Kontaktdaten wieder löschen sollen.</p>

<form method="post" action="kontaktformular.php" method="POST">
			<div class="row uniform">
				<div class="6u 12u$(xsmall)">
					<input type="text" name="vorname" id="vorname" value="" placeholder="Vorname Ansprechperson*" required="Bitte füllen Sie dieses Feld aus!" />
				</div>
				<div class="6u 12u$(xsmall)">
					<input type="text" name="nachname" id="nachname" value="" placeholder="Nachhname Ansprechperson*" required="Bitte füllen Sie dieses Feld aus!" />
				</div>
				<div class="6u$ 12u$(xsmall)">
					<input type="email" name="email" id="email" value="" placeholder="E-Mail-Adresse*" required="Bitte füllen Sie dieses Feld aus!" />
				</div>
				<div class="6u$ 12u$(xsmall)">
					<input type="tel" name="telefon" id="telefon" value="" placeholder="Telefon (optional)" />
				</div>
				<!-- Break -->
				<div class="12u$">
					<div class="select-wrapper">
						<select name="kategorie" id="kategorie">
						    <option value="">Funktion/ Tätigkeit</option>
						    <option value="1">Schulleiter/in</option>
							<option value="1">Lehrer/in</option>
							<option value="1">Referendar/in</option>
							<option value="1">Student/in</option>
							<option value="1">Anderes</option>
						</select>
					</div>
				</div>
				<!-- Break -->
				<div class="12u$">
					<textarea name="anschrift" id="anschrift" 
					placeholder="Anschrift der Schule/ Name der Universität*" rows="6" required="Bitte füllen Sie dieses Feld aus!"></textarea> 
				</div>
				<div class="12u$">
					<textarea name="nachricht" id="nachricht" 
					placeholder="Nachricht" rows="6"></textarea>
				</div>
				<!-- Break -->
				<div class="4u 12u$(small)">
					<input type="radio" 
					id="einverständnis-kontaktaufnahme" 
					name="einverständnis-kontaktaufnahme" 
					required="Bitte füllen Sie dieses Feld aus!"> 
					<label for="einverständnis-kontaktaufnahme">
						<b>Einverständnis Kontaktaufnahme*</b><br>
						Ich bin damit einverstanden, dass Mitarbeiter/innen der Professur für "Empirische Schul- und Unterrichtsforschung" an der Universität Leipzig mit mir zur weiteren Absprache einer Studienteilnahme in Kontakt treten. 
					</label>
				</div>
				<div class="4u 12u$(small)">
					<input type="radio" 
					id="einverständnis-datenspeicherung"
					name="einverständnis-datenspeicherung" 
					required="Bitte füllen Sie dieses Feld aus!"> 
					<label for="einverständnis-datenspeicherung">
						<b>Einverständnis Datenspeicherung*</b><br>
						Ich bin damit einverstanden, dass meine Daten zum Zweck der Kontaktaufnahme gespeichert werden. Ich kann mein Einverständnis jederzeit widerrufen.
					</label>
				</div>
				<div class="4u$ 12u$(small)">
					<input type="radio" 
					id="datenschutzhinweis" 
					name="datenschutzhinweis"
					required="Bitte füllen Sie dieses Feld aus!">
					<label for="datenschutzhinweis">
						<b>Datenschutzhinweis*</b><br>
			    		Ich habe die Hinweise zum Datenschutz gelesen und bin einverstanden.
			    		<p><i>Link zu Datenschutzhinweisen in Bearbeitung.</i></p>
			    	</label>
				</div>
				<p> 
				Die mit * gekennzeichneten Felder sind Pflichtfelder!
			    </p>
				<!-- Break -->
				<div class="12u$">
					<ul class="actions">
						<li><input type="submit" name="absenden" value="Absenden" class="special" /></li>
						<li><input type="reset" name="löschen" value="Löschen" /></li>
					</ul>
				</div>
			</div>
		</form>
</html>
<a href="https://empschul-hiwi.github.io/test%20markdown#Modulinhalt">link text</a>
<?php>
     if(isset($_POST['absenden']))
     {
     	require("inc/db_connect.php");

     	$nachname = $_POST['nachname'];
     	$vorname = $_POST['vorname'];
     	$email = $_POST['email'];
     	$telefon = $_POST['telefon'];
     	$kategorie = $_POST['kategorie'];
     	$anschrift = $_POST['anschrift'];
     	$nachricht = $_POST['nachricht'];
     	$einverständnis-kontaktaufnahme= $_POST['einverständnis-kontaktaufnahme'];
     	$einverständnis-datenspeicherung= $_POST['einverständnis-kontaktaufnahme'];
     	$datenschutzhinweis = $_POST['datenschutzhinweis'];
     	$datum = date("Y-m-d H:i:s"); 

     	$sql = "INSERT INTO kontaktformular_studienteilnahme(Nachhname, Vorname, E-Mail, Telefon, Funktion/ Tätigkeit, Anschrift, Nachricht, Check_Ev_Kontakt, Check_Ev_Daten, Check_Hinweis, Datum") VALUES (:nachname,:vorname,  :email, :telefon, :kategorie, :anschrift, :nachricht, :einverständnis-kontaktaufnahme, :einverständnis-datenspeicherung, :datenschutzhinweis, :datum);
		$stmt = $dbh->prepare($sql)
		$stmt->bindValue(':nachname', $nachname);
		$stmt->bindValue(':vorname', $vorname);		
		$stmt->bindValue(':email', $email);
		$stmt->bindValue(':telefon', $telefon);
		$stmt->bindValue(':kategorie', $kategorie);
		$stmt->bindValue(':anschrift', $anschrift);
		$stmt->bindValue(':nachricht', $nachricht);
		$stmt->bindValue(':einverständnis-kontaktaufnahme', $einverständnis-kontaktaufnahme);
		$stmt->bindValue(':einverständnis-datenspeicherung', $einverständnis-datenspeicherung);
		$stmt->bindValue(':datenschutzhinweis', $datenschutzhinweis);
		$stmt->bindValue(':datum', $datum);

		$stmt-> execute();


     }
