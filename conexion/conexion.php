<?php


class Database
{
    private $host = "db";
    private $db_name = "visitas";
    private $username = "root";
    private $password = "rootpass";
    public $conn;

    public function getConnection()
    {
        //aca inicializo la conexio
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conectado<br>";
        } catch (PDOException $exception) {
            echo "Error de conexion: " . $exception->getMessage();
        }
        return $this->conn;
    }
}

//instancio la clasepa usarla

$conn = new Database();
$conn->getConnection();
function insertar()
{
    $dataBase = new Database();


    $com_temp = $dataBase->getConnection();
    $stmt = $com_temp->prepare("INSERT INTO `estudiante`(`nombre`, `telefono`, `fecha de nacimiento`, `direccion`) VALUES (?, ?, ?, ?)");

    //aca le paso el parametro
    $nombre = "avla";
    $stmt->bindParam(1, $param1);

    //$stmt->execute();
    echo "ejecutando consulta...\n";

    try {
        $resultado = $stmt->execute();

        if ($resultado) {
            echo "consulta ejecutada correctamente\n";
            //echo "Filas afectadas: " . $stmt->rowCount() . "\n";
            echo "Ultimo ID insertado: " . $com_temp->lastInsertId() . "\n";
        } else {
            echo "Error al ejecutar la consulta\n";
            print_r($stmt->errorInfo());
        }
    } catch (PDOException $e) {
        echo "Error en la ejecucion: " . $e->getMessage() . "\n";
    }
}


function mostrarTodos()
{

    $dataBase = new Database();


    $com_temp = $dataBase->getConnection();
    $stmt = $com_temp->prepare("SELECT * FROM `estudiante`;");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();

    while ($row = $stmt->fetch()) {
        echo $row['nombre'] .  "<br>";
    }
}

function eliminarRegistro(){

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>

<body>


    <form method="post">
        <label for="">Nombre</label><br>
        <input type="text"><br>

        <label for="">telefono</label><br>
        <input type="text"><br>

        <label for="">fecha de nacimiento</label><br>
        <input type="text"><br>

        <label for="">direccion</label><br>
        <input type="text"><br>
        <br>
        <br>
        <br>
        <input type="submit" value="Registrar">

    </form>


    <table>
        <!-- mostrar reg -->
    </table>


</body>

</html>