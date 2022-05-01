<?php
function conectar(){
    $xc = mysqli_connect("localhost","root","","lab06");
    return $xc;
    die();
}
function desconectar($xc){
    mysqli_close($xc);
}
   $xc=conectar();
   $sql="SELECT * FROM alumno";
   $res=mysqli_query($xc,$sql);
   desconectar($xc);
   while($filas=mysqli_fetch_array($res))
   {
       $id=$filas['idalumno'];
       $nombre=$filas['nombre'];
       $apellido=$filas['apellido'];
       
       echo "<tr>";
       echo "<th> $id</th>";
       echo "<th> $nombre</th>";
       echo "<th> $apellido</th>"; 
       echo "<th><a class='btn btn-success' href='/editaralumno.php?id=$id'>Editar</a>
       <a class='btn btn-danger' href='/eliminaralumno.php?id=$id'>Eliminar</a> </th><br>";
   }

?>