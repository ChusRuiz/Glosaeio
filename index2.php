<!DOCTYPE html> 
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #20c997;">
<div class="container" style="background-image: url('https://image.freepik.com/vector-gratis/fondo-abstracto-moderno-elementos-memphis-gradientes-amarillos-verdes-temas-retro-carteles-pancartas-paginas-inicio-sitio-web_8221-1089.jpg'); background-size: cover;"><br>
        <h1> <center> GLOSARIO </center> </h1>
        <h3> <center> Un glosario es una recopilación de definiciones o explicaciones de palabras que versan sobre un mismo tema u ordenada de forma alfabética.​</center> </h3>
        <h5> <center> Este glosario esta elaborado con palabras utilizadas en el curso de introduccion a los sistemas de computo.</center> </h5>
<br> </div>
<div class="container">
<nav class="navbar navbar-dark bg-dark">
   <div class="container-fluid">
    <a class="navbar-brand">Barra de navegacion</a>
    <form class="form-inline m-2" action="index.php" method="POST">
            <button type="submit" class="btn btn-outline-success">Vista general</button>
            </form>
            <form class="form-inline m-2" action="#ingresar" method="POST">
            <button type="submit" class="btn btn-outline-success">Ingresar datos</button>
            </form>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
  </div>
</nav>
        <table class="table" style="background-color:#F4ECF7;">
            <tbody>
                <?php include 'read2.php'; ?>
            </tbody>
        </table>
    </div>
    <div class="container" style="background-color:#F4ECF7;"><br>
       <h5> <center>INGRESO DE DATOS</center> </h5>
       <form class="form-inline m-2" action="insertar.php" method="POST">
                <label for="name">Palabra:</label>
                <input type="text" placeholder="Palabra" class="form-control m-2" id="NAME" name ="NAME">
                <label for="name">Contenido:</label>
                <input type="text" size="90px" placeholder="Contenido" class="form-control m-2" id="DATE" name ="DATE">
                <label for="name">Etiqueta:</label>
                <input type="text" placeholder="Etiqueta" class="form-control m-2" id="TAGS" name ="TAGS">
                <button type="submit" class="btn btn-primary">Ingresar </button>
           
       </form>
       <br>
    </div>
    <a name="ingresar">
    <div class="container" style="background-color:#F4ECF7;" ><br>
        <h5> <center> ELIMINAR TODO!!</center> </h5>
        <form class="form-inline m-2" action="elim_todo.php" method="POST" style="text-align:center;">
            <button type="submit" class="btn btn-danger" style="text-align:center;" >Borrar Todo</button>
            </center> </form>
            <br></div> </a>
            <br><br>
</body>
</html>
