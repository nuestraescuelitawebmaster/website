<html>
<head>
        
 <title>Untitled</title>
<link rel="stylesheet" type"text/css" href="../c.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42600327-1', 'nuestraescuelita.org');
  ga('send', 'pageview');

</script>

</head>
<body>

<?php
 
$comentario=$_POST['comentario'];
$correo=$_POST['correo'];
$nombre=$_POST['nombre'];

$to = "info@nuestraescuelita.org";

 $subject = "Comentario de un usuario";
 $body = "Querida Andrea, \n\n Este es un comentario de un visitante de nuestra pagina, por favor dale respuesta\n\n"
.
"\n\n Su nombre es: "
.
"$nombre"
.
"\n\n Su email es: "
.
"$correo"
.
"\n\n Su comentario es: "
.
"$comentario";



 if (mail($to, $subject, $body)) {
   echo("<p>Message successfully sent! iMensaje Enviado!</p>");
  } else {
   echo("<p>Message delivery failed...</p>");
  }





?> 








</body>
</html>



