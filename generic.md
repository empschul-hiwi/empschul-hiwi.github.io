---
layout: page
title: Team
permalink: /generic/
---

<h2 id="content">Unser Team</h2>
<p>Kurzankündigung</p>

<head>
<style>
   img { float: left; margin-right: 1em; }
   h3 {clear: left; }
</style>
</head>

<body>

<h3><img src="assets/images/Frohberg.png" alt="Franzi" 
width="120" height="180"/>Franziska Frohberg</h3>
<p><i>Lehrkraft für besondere Aufgaben</i></p>
<p>Franziska Frohberg lehrt und forscht am Institut für Bildungswissenschaften am Lehrstuhl für Empirische Schul- und Unterrichtsforschung an der Universität Leipzig. 
Sie lehrt in den Modulen 1 und 2 der Bildungswissenschaften.   
Im Mittelpunkt ihrer Forschungsinteressen stehen Implizite Theorie zu Intelligenz, Veränderung von Mindsets bei Lehrpersonen und deren Einfluss auf Lehr-Lern-Arrangements.</p>

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


