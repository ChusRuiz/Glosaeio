<?php
error_reporting(0);
   include 'db.php';
   //echo "<input type='text' name='variable' value='1' size='2' 
   $sql="select * from WORDS order by TAGS ASC";

   $result= $conn->query($sql);
   //encabezado
  
   echo "<tr class='table-success'>";
   echo "<td><center>Etiqueta<center></td>";
   echo "<td><center>Palabra<center></td>";
   echo "<td><center>Contenido<center></td>";
   echo "<td><center>Acciones<center></td>";
   echo "<td></td>";
  
   echo "</tr>";
   while($row = $result->fetch_assoc()){
    echo "<tr class='table table-bordered border-dark'>";
   
   if ($row['id'] == $_GET['id']) 
   {
       echo '<form class="form-inline m-2" action="update.php" method="POST">';
       echo '<td><input type="text" class="form-control" name="TAGS" value="'.$row['TAGS'].'"></td>';
       echo '<td><input type="text" class="form-control" name="NAME" value="'.$row['NAME'].'"></td>';
       echo '<td><input type="text" class="form-control" name="DATE" value="'.$row['DATE'].'"></td>';
       echo '<td><button type="submit" class="btn btn-outline-primary">Guardar cambios</button></td>';
       echo '<input type="hidden" name="id" value="'.$row['id'].'">';
       echo '</form>';
   }
   else
   { 
   echo '<td>'.$row['TAGS'].'</td>';   
    echo '<td>'.$row['NAME'].'</td>';
    echo '<td>'.$row['DATE'].'</td>';
    
       echo '<td> <a class="btn btn-outline-primary" href="index2.php?id=' . $row['id'] . '"role=button">Actualizar</a></td>';
       echo '<td> <a class="btn btn-outline-danger" href="delete.php?id=' . $row['id'] . '"role=button">Eliminar</a></td>';
   }
}
   echo "</tr>";
$conn->close();
?>