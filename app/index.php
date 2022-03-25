<html>

<body>
   <script>
       if (window.location.protocol != "https:") {
           window.location.protocol = "https:";
           window.location.reload();
        }
    </script>
<?php
$enlace = mysqli_connect("ls-eef18502204172dca09c4e68b6fdb6077f7c418b.covyldypg6fv.us-east-1.rds.amazonaws.com", "usuarioclase", "Ab123456", "dbclase","3306");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$sqlQuery = "SELECT * from dogs ORDER by id ASC";
$ob = mysqli_query($enlace,$sqlQuery);

echo "Total de perritos: ".mysqli_num_rows($ob)."<br><br>";
for($i=0;$i<mysqli_num_rows($ob);$i++){
    $data = mysqli_fetch_array($ob);
    echo "Nombre de perrito: ".$data["name"]." (".$data["owner"].")<br>";
}

?>

</body>
</html>
