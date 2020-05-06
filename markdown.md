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

### Ein- und Ausblenden

<div id="akkordeon">

<a class="show" href="#akkordeon">Zusätzliche Infos</a>
<a class="hide" href="#">Weniger Infos</a>

<div class="inhalt">
<h3>Gut zu Wissen</h3>
Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
</div>

</div>

#akkordeon:not(:target) .inhalt,
#akkordeon:not(:target) .hide,
#akkordeon:target .show {display: none;}
#akkordeon:target .inhalt {display: block;}
.inhalt {
box-shadow: inset 0px 0px 10px rgba(0,0,0,0.3);
padding: 20px 20px 1px;
margin: 0px 0px 10px;
}
.show,
.hide {
padding:10px;
background: rgb(254, 164, 0);
box-shadow:none!important;
color:#fff;
font-weight:bold;
}
.show:hover,
.hide:hover {
background: rgb(255, 214, 118);
color:#fff!important;
transition:0.2s all ease-in-out!important;
}