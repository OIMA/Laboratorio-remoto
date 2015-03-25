$.ajax({
  url: "index.php",
  type: "POST"
  data: {
    mensaje1: "Hola",
    mensaje2: "Mundo"
  },
  success: function( respuesta ) {
    $( "#idDiv" ).html( "<h1>" + respuesta + "</h1>" );
  }
});