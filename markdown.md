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
    $('#sobo-einausblenden').click(function(){
    	$('#sozialbookmarks').toggle('slow');
    })
});
</script>
</head>
<body>
<p id="socialbookmarksanzeigen">
    <a href="#" id="sobo-einausblenden">Weiterempfehlen</a>
</p>
<div id="sozialbookmarks" style="display:none">
  <p><b>Bereich für social bookmarks</b><br>
  Hier kommen nun die üblichen Verdächtigen und Logos dazu.<br>
  Nicht vergessen, meine Seite zu bookmarken!</p>
</div>
</body>

### Test

<h3><img style="float: left; margin: 0px 15px 15px 0px;" src="assets/images/Frohberg.png" width="120" hight="180"/>Franziska Frohberg</h3><p><i>Lehrkraft für besondere Aufgaben</i></p><p>Franziska Frohberg lehrt und forscht am Institut für Bildungswissenschaften am Lehrstuhl für Empirische Schul- und Unterrichtsforschung an der Universität Leipzig.Sie lehrt in den Modulen 1 und 2 der Bildungswissenschaften. Im Mittelpunkt ihrer Forschungsinteressen stehen Implizite Theorie zu Intelligenz, Veränderung von Mindsets bei Lehrpersonen und deren Einfluss auf Lehr-Lern-Arrangements.</p><br style="clear: both;" />
<head>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<style>
#sonstigesanzeigen {
  background-color: lightgrey;
  padding: 0.4em;
}
#sonstiges {
  background-color: white;
  padding: 0.4em;
}
</style>
<script>
$(document).ready(function(){
    /* Hier der jQuery-Code */
    $('#sobo-einausblenden').click(function(){
      $('#sonstiges').toggle('slow');
    })
});
</script>
</head>
<body>
<p id="sonstigesanzeigen">
    <a href="#" id="sobo-einausblenden">Kontakt und Kurzbiografie</a>
</p>
<div id="sonstiges" style="display:none">
  <p><b>Kontakt</b><br>
  Hier kommen nun die üblichen Verdächtigen und Logos dazu.<br>
  Nicht vergessen, meine Seite zu bookmarken!</p>
  <p><b>Kurzbiografie</b><br>
  Hier kommen nun die üblichen Verdächtigen und Logos dazu.<br>
  Nicht vergessen, meine Seite zu bookmarken!</p>
</div>
</body>