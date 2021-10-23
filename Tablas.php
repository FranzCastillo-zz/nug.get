<?php
abstract class tablas{
    private $nombreTabla;
    private $conexion;

    public function __construct($tabla){
        $this->conexion = $this->conectar();
        $this->nombreTabla = $tabla;
    }
    private function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nugget";
        $this->conexion = new mysqli($servername, $username, $password, $dbname);
    }
    protected function ingresarATabla($usuario, $titulo, $descripcion, $linkImagen, $linkContacto){
        $this->conexion = $this->conectar();
        if($this->conexion){
           $sql = "INSERT INTO `$this->nombreTabla`(`Usuario`, `Titulo`, `Descripcion`, `LinkImagen`, `LinkContacto`) VALUES ('$usuario','$titulo','$descripcion','$linkImagen','$linkContacto')";
           if($this->conexion -> query($sql)){
            echo "<script> alert('Hemos hecho la publicacion exitosamente!');</script>";    
            }else{
                echo "<script> alert('Ha ocurrido un error en el ingreso a la base de Datos: ". $this->connection -> error . "');</script>"; 
            }
        }else{
            echo "<script> alert('Ha ocurrido un error, verifique su conexion.');</script>";
        }
        mysqli_close($this->conexion);
    }
    protected function obtenerIngresos(){
        $this->conexion = $this->conectar();
        if($this->conexion){
            $sql = "SELECT * FROM `$this->nombreTabla ` ORDER BY `FechaDePublicacion` ASC;";
            $result = $this->conexion -> query($sql);
            if($result -> num_rows > 0){
                return $result;
            }
        }else{
            echo "<script> alert('Ha ocurrido un error, verifique su conexion.');</script>";
        }
        mysqli_close($this->conexion);
    }
    public abstract function mostrarPublicaciones();
}
?>