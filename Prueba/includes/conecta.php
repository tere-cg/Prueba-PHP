<?<php>
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "cielonegro";
$conecta = msqli_connect($servidor,$usuario,$password,$bd);
if ($conecta->connect_error){
    die("Error al conectar la bd de la página".$conecta->connect_error);
}
else{
    echo "conexión exitosa";
}

?>