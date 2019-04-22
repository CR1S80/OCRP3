<?php 
header ("Refresh: 5;URL=index.php");
// Redirection vers page_suivante.php après un délai de 5 secondes
// durant lesquelles la page actuelle (page_premiere.php, par exemple) est affichée
?>



<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">

<title>Page introuvable</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:100,300'>
<style>
      *{
    transition: all 0.6s;
}

html {
    height: 100%;
}

body{
    font-family: 'Lato', sans-serif;
    color: #888;
    margin: 0;
}

#main{
    display: table;
    width: 100%;
    height: 100vh;
    text-align: center;
}

.fof{
	  display: table-cell;
	  vertical-align: middle;
          font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
}

h1.red{
	  font-size: 50px;
	  display: inline-block;
	  padding-right: 12px;
	  animation: type .5s alternate infinite;
}

@keyframes type{
	  from{box-shadow: inset -3px 0px 0px #888;}
	  to{box-shadow: inset -3px 0px 0px transparent;}
}
    </style>

</head>
<body translate="no">
<div id="main">
<div class="fof">
    <h1>Error 404</h1>
    <h1 class="red">Redirection vers la pages d'acceuil en cours</h1>
</div>
</div>


</body>
</html>
