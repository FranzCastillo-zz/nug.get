<?php
abstract class tablas{
    private $nombreTabla;
    private $conexion;

    public function __construct($tabla){
        $this->conexion = $this->conectar();
        $this->nombreTabla = $tabla;
    }
    protected function conectar(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "nugget";
        $this->conexion = new mysqli($servername, $username, $password, $dbname);
    }

    protected function ingresarATabla($usuario, $titulo, $descripcion, $linkImagen, $linkContacto){
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
    }
}
?>