<?php
include 'interaccionConTabla.php';
class Tablas implements interaccionConTabla{
    private $nombreTabla;
    private $conexion;

    public function __construct(){

    }
    public function setTabla($tabla){
        $this->nombreTabla = $tabla;
    }
    public function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nugget";
        // Crea la conexion a la base de datos
        $this->conexion = new mysqli($servername, $username, $password, $dbname);
        return $this->conexion;
    }
    public function ingresarATabla($usuario, $titulo, $descripcion, $linkImagen, $linkContacto, $fecha){
        //Se conecta a la base de datos
        $this->conectar();
        //Verifica si la conexion fue exitosa
        if($this->conexion){ 
            // Se asigna el Query (Ingresa la informacion a la DB)
            $sql = "INSERT INTO `$this->nombreTabla`(`Usuario`, `Titulo`, `Descripcion`, `LinkImagen`, `LinkContacto`) VALUES ('$usuario','$titulo','$descripcion','$linkImagen','$linkContacto')";
            // SE INTENTA INGRESAR A LA BASE DE DATOS
            if($this->conexion -> query($sql)){
                // EXITO
                echo "<script type='text/javascript'>alert('Se ha enviado la publicación');</script>";   
            }else{
                // ERROR
                echo "<script> alert('Ha ocurrido un error en el ingreso a la base de Datos: ". $this->connection -> error . "');</script>"; 
            }
        }else{
            // POR SI HAY ERROR DE CONEXION
            echo "<script type='text/javascript'>alert('Existe un error de conexión, porfavor inténtelo de nuevo');</script>";
        }
        //se cierra la conexion a la base de datos
        mysqli_close($this->conexion);
    }
    public function obtenerIngresos(){
        //Se conecta a la base de datos
        $this->conectar();
        //Verifica si la conexion fue exitosa
        if($this->conexion){
            // Se asigna el Query (Ingresa la informacion a la DB)
            $sql = "SELECT * FROM `$this->nombreTabla` ORDER BY `FechaDePublicacion` DESC;";
            // Se asignan los reusltados del query
            $result = $this->conexion -> query($sql);
            // verifica si hay, al menos, una publicacion
            if($result -> num_rows > 0){
                // se cierra la conexion y se devuelven los resultados
                mysqli_close($this->conexion);
                return $result;
            }
        }else{
            // error al conextarse a la DB
            echo "<script> alert('Ha ocurrido un error, verifique su conexion.');</script>";
        }
        //Si no se ha devuelto nada, cierra, de todas maneras, la conexion.
        mysqli_close($this->conexion);
    }
}
?>