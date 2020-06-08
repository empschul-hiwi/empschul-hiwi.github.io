<html>

<head>
<title>Anmeldung zur Studienteilnahme<title>
</head>

<body>
    <?php
        if($_POST('von')!= "" and $_POST('mail')!="" and $_POST('betreff')!="" and $_POST('nachricht')!="") {
        $empf = "anni-s2000@gmx.de";
        $betreff = $_POST['betreff'];
        $from = "From: ";
        $from .= $_POST['von'];
        $from .= " <";
        $from .= $_POST['mail'];
        $from .= ">\n";
        $from .= "Reply-To: ";
        $from .= $_POST['mail'];
        $from .= ">\n";
        $from .= "Content-Type: text/html\n";
        $text = $_POST['nachricht'];
        
        mail($empf, $betreff, $text, $from);
        echo "Vielen Dank";
        } else (
        echo "Bitte alle Felder ausfüllen.";
        }        
    ?>
</body>

</html>
