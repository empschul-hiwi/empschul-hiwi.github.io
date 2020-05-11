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
    <a href="#" id="sobo-auseinblenden">Weiterempfehlen</a>
</p>
<div id="sozialbookmarks">
  <p><b>Bereich für social bookmarks</b><br>
  Hier kommen nun die üblichen Verdächtigen und Logos dazu.<br>
  Nicht vergessen, meine Seite zu bookmarken!</p>
</div>
</body>

