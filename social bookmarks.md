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