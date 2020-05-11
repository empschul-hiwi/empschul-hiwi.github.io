---
layout: page
title: Test Markdown
---

## Lernen

### Ein- und Ausblenden 

<head>
    <script language="JavaScript" type="text/javascript">
      <!--
      function alleAusblenden(){
        var elemente = document.getElementById

("ebenen").getElementsByTagName("p");
        for (var i = 0; i < elemente.length; i++) {
          elemente[i].style.display = "none";
        }
      }
      
      function einblenden(div){
        alleAusblenden()
        document.getElementById(div).style.display = 

"inline";
      }
      
      //-->
    </script>
  </head>
  <body>
  <div id="ebenen">  
    <li><a href="#" onclick="einblenden('ebene2'); return 

false;">Nierenphysiologie</a></li>
    
      <p id="ebene2" style="display:none;">
        Glomerulus<br>Tubulus
      </p>
    
<li><a href="#" onclick="einblenden('ebene3'); return 

false;">nfi </a></li>
       <p id="ebene3" style="display:none;">
        Glomerul<br>Tubul
      </p>
</div>
	</body>


### Ein- und Ausblenden Variante 2

<head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<style>
#socialbookmarksanzeigen {
	background-color: lightgrey;
	padding: 0.4em;
}
#sozialbookmarks {
	background-color: white;
	padding: 0.4em;
}
</style>
<script>
$(document).ready(function(){
    /* Hier der jQuery-Code */
    $('#sobo-auseinblenden').click(function(){
    	$('#sozialbookmarks').toggle('slow');
    })
});
</script>
</head>
<body>
<p id="socialbookmarksanzeigen">
    <a href="#" id="sobo-auseinblenden">Weiterempfehlen</a>
</p>
<div id="sozialbookmarks">
  <p><b>Bereich für social bookmarks</b><br>
  Hier kommen nun die üblichen Verdächtigen und Logos dazu.<br>
  Nicht vergessen, meine Seite zu bookmarken!</p>
</div>
</body>

### Ein- und Ausblenden

<html>
<head>
<title>www.tutorials.de</title>
<meta name="author" content="Quaese">
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
  <!--
$(document).ready(function(){
  // Alle Links ermitteln, die zum Togglen dienen
  var arrA = $("a[rel='toggle']").each(function(intIndex){
    // ID des zugehörigen Toggle-Elements ermitteln
    var linkID = String($(this).attr('href')).substr(1, $(this).attr('href').length);
    // Element verstecken
    if(linkID){
      $('#'+linkID).hide();
    }

    // Togglefunktion an Link binden
    $(this).toggle(
      function(){
        $('#'+linkID).show('slow'); // Einblenden
      },
      function(){
        $('#'+linkID).hide('slow'); // Ausblenden
      }
    );
  });
});
 //-->
</script>
</head>
<body>
<a href="#dieseEbene" rel="toggle">diese Ebene einblenden</a>
<div id="dieseEbene">
  Lorem Ipsum
</div>

<a href="#andereEbene" rel="toggle">andere Ebene einblenden</a>
<div id="andereEbene">
  Lorem Ipsum
</div>
</body>
</html>

