<?php
const CONNECTION = new mysqli("localhost", "root", "", "mi_proyecto") ;

$query = mysqli_query(CONNECTION, "SELECT * FROM  usuarios");
echo"paso aqui";

print_r(mysqli_fetch_all($query, MYSQLI_ASSOC));
?>