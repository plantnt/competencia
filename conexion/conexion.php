<?php

$servidor=mysqli_connect("localhost","root","") or die ("Imposible conectar con el servidor");

$db="calipso";

$conexion=mysqli_select_db($servidor,$db);
