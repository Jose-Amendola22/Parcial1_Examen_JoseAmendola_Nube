<html>
<head>
<meta charset="utf-8">
<title>Parcial 1</title>
   <link rel="stylesheet" type="text/css" href="colores_José Améndola.css">
</head>
<body> 
  <header><h1>El Espacio: El blog de Breaking Bad y Parcial 1 de José Améndola</h1></header>    
           
      <header><h7>Prueba de Base de datos Gato:</h7></header>     
<?php
$enlace = mysqli_connect("host.docker.internal", "root", "25!#@PaRciAl1NUbedOcKerCOm23%&", "Animales","1011");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sqlQuery = "SELECT * from Gatos ORDER by id_gato ASC";
$ob = mysqli_query($enlace,$sqlQuery);

echo "Total de gatos: ".mysqli_num_rows($ob)."<br><br>";
for($i=0;$i<mysqli_num_rows($ob);$i++){
    $data = mysqli_fetch_array($ob);
    echo "Nombre de gato y raza: ".$data["nombre"]." (".$data["raza"].")<br>";
}


?>
 <h2>14 aniversario de Breaking Bad</h2>
 <img src="https://i.imgur.com/dlTJjV4.jpeg" width="500">
<p>Breaking Bad cumple 14 años. Parece que fue ayer cuando esta serie se estrenaba en la cadena norteamericana AMC sin hacer demasiado ruido. Como todas las grandes series, fue tildada de “lenta” o de "poco sustancial" en sus inicios. Pero lo que no se puede negar es que el tiempo ha acabado dando la razón a sus creadores. Así lo atestiguan millones de fans que, una década después de la emisión de su primer capítulo, han colmado las redes sociales de mensajes de recuerdo.</p>

<p>Pero, ¿realmente es tan buena? ¿Es la mejor serie de televisión de los últimos diez años? Para responder a esta pregunta hemos realizado un análisis de lo que supuso su estreno y de cómo ha envejecido hasta el día de hoy.</p>

<p> <a class="Primero">La ciencia es tu amiga</a></p>
<p>Al igual que otras series de la misma temática con las que siempre se la compara (Los Soprano, The Wire, Boardwalk Empire o, más recientemente, Peaky Blinders y Narcos), Breaking Bad cuenta la historia de un personaje carismático hecho a sí mismo que termina manejando todo un imperio de la droga. Sin embargo, la principal novedad que introdujo esta ficción es la trama del personaje protagonista, Walter White, interpretado en el papel de su vida por Bryan Cranston, que no por azar elige ponerse un pseudónimo muy relacionado con el mundo de la ciencia para tratar con mafiosos:<a class="Segundo"> Heisenberg (conocido por formular el principio de incertidumbre). </a></p>

<p>Heisenberg (el de la ficción, no el científico) es un profesor de química de instituto que lleva una vida tranquila. Vive con su mujer y su hijo discapacitado físico. Tiene un segundo trabajo en el lavadero de coches para llevar un dinero extra a casa y parece no tener muchas más aspiraciones en la vida. Pero todo cambia cuando un día es diagnosticado de un cáncer de pulmón terminal. Éste es el punto de partida de la serie, a partir del cual se inicia el auténtico ‘viaje del héroe’. En este momento Walter White debe tomar una difícil decisión si quiere que su familia pueda mantenerse cuando él no esté. Esa decisión es fabricar metanfetamina y volverse traficante para ahorrar dinero y dejarlo como legado.</p>

	<p><h5>Profundidad en el tema y en los personajes</h5></p>
	
<p>No se puede hablar de la mejor serie de la década si todo el desarrollo de capítulos pasara por ver cómo trata con personajes de dudosa moral o cómo vive intensas escenas de acción. De hecho, no es hasta la tercera temporada cuando el ritmo de la serie se vuelve caótico e imprevisible.</p>

<p>La obra sigue tratando muy de cerca el problema personal de Walter White, y si algo tiene de especial es la transformación de un personaje de andar por casa en todo un capo de la droga, calculador y capaz de todo por proteger su negocio y a su familia. </p>

	<p><h4>Un final para la historia</h4></p>
	
<p>La noticia ha saltado cuando los fans de la saga y algunos de los personajes principales han llenado las redes sociales de mensajes debatiendo si esta serie es mejor que Juego de Tronos, que estrenó el tráiler de su última temporada recientemente. Sea cual sea la mejor, lo cierto es que Breaking Bad marcó una manera de hacer series que luego imitarían muchas más, por ejemplo, Mad Men. </p>

<p>Las dos últimas temporadas, como es lógico, contienen el desenlace de la historia. Un final que no por esperado es menos trágico, pero que conmovió a toda una generación de adictos a las series allá por 2008. No se puede desvelar aquí <a class="Tercero">(sería un spoiler de dimensiones bíblicas)</a>, pero si este artículo sirve para que alguien que no haya visto la serie le dé una oportunidad, habrá merecido la pena cada palabra. </p>

<p>Una Lista de los mejores episodios:</p>
 <ol>
  <li>Piloto (s01e01)</li>
  <li>Crazy Handful of Nothin (s01e06)</li>
  <li>Phoenix (s02e12)</li>
  <li>Over (so2e10)</li>
  <li>Salud (s04e10)</li>
  <li>ABQ (s02e13)</li>
  <li>Face Off (s04e13)</li>
  <li>Ozymandias (s05e14)</li>
  <li>Blood Money (s05e09)</li>
  <li>To’hajiilee (s05e13)</li>
</ol>

<table>
 <tr>
		<th>Temporada</th>
		<th>Episodios</th>
		<th>Primera Emición</th>
 </tr>
 
 <tr>
 	<td>1</td>
 	<td>7</td>
 	<td>20 de enero de 2008</td>
 </tr>
  
 <tr>
 	<td>2</td>
 	<td>13</td>
 	<td>8 de marzo de 2009</td>
 </tr>
   
 <tr>
 	<td>3</td>
 	<td>13</td>
 	<td>8 de marzo de 2009</td>
 </tr>
   
 <tr>
 	<td>4</td>
 	<td>13</td>
 	<td>17 de julio de 2011</td>
 </tr>
 
 <tr>
 	<td>5</td>
 	<td>16</td>
 	<td>15 de julio de 2012</td>
 </tr>
 	
</table>


<p>Aquí hay un link relacionado con la película de la serie: <blockquote class="twitter-tweet"><p lang="en" dir="ltr">This is it. This is how it ends. <a href="https://twitter.com/hashtag/ElCamino?src=hash&amp;ref_src=twsrc%5Etfw">#ElCamino</a>: A Breaking Bad Movie is now on <a href="https://twitter.com/netflix?ref_src=twsrc%5Etfw">@Netflix</a> and in select theaters. <a href="https://t.co/e1vOaV5fFR">pic.twitter.com/e1vOaV5fFR</a></p>&mdash; Breaking Bad (@BreakingBad) <a href="https://twitter.com/BreakingBad/status/1182687302960795649?ref_src=twsrc%5Etfw">October 11, 2019</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></p> 

<p>Fotos de la premier de la película:</p>
<iframe src="https://web.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fmedia%2Fset%2F%3Fset%3Da.10157745835192722%26type%3D3&width=500" width="500" height="669" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

<footer> 
  <ul>
    <li>Facebook: El Espacio</li>
    <li>Youtube: El Espacio2023</li>
    <li>Twitter: Dog_ElEspacio</li>
  </ul>
    
José Inc. 2019, este sitio se hizo para un examen parcial de diseño web en 2019, pero decidí reutilizarlo para este examen en 2022</footer>
</body>
</html>