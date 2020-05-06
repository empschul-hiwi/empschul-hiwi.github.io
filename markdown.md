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


<meta charset="UTF-8">
<title>jQuery Beispiel: Elemente ausblenden und einblenden mit 1 Link</title>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<style>
#socialbookmarksanzeigen {
	background-color: #00CC00;
	padding: 0.4em;
}
#sozialbookmarks {
	background-color: orange;
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
<h1>jQuery: Elemente ein- und ausblenden</h1>
<a href="https://www.html-seminar.de/" title="HTML, CSS u. jQuery lernen">
https://www.HTML-Seminar.de</a>
<p id="socialbookmarksanzeigen">
    <a href="#" id="sobo-einausblenden">Weiterempfehlen</a>
</p>
<div id="sozialbookmarks">
  <p><b>Bereich für social bookmarks</b><br>
  Hier kommen nun die üblichen Verdächtigen und Logos dazu.<br>
  Nicht vergessen, meine Seite zu bookmarken!</p>
</div>
</body>



