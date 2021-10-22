class tablas{
    private $titulo;
    private $descripcion;
    private $usuario;
    private $fecha;
    private $linkImagen;
    private $linkContacto;
    private $tabla;

    public function __construct(){
        $this->titulo = "";
        $this->descripcion = "";
        $this->usuario = "";
        $this->fecha = -1;
        $this->linkImagen = "";
        $this->linkDescripcion = "";
        $this->tabla = "";
    }

    protected function getTitulo(){
        return $this->titulo;
    }
    protected function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    protected function getDescripcion(){
        return $this->descripcion;
    }
    protected function setDescripcion($descripcion){
        $this->Descripcion = $descripcion;
    }

    protected function getUsuario(){
        return $this->usuario;
    }
    protected function setDescripcion($usuario){
        $this->usuario = $usuario;
    }

    protected function getFecha(){
        return $this->fecha;
    }
    protected function setFecha($fecha){
        $this->fecha = $fecha;
    }

    protected function getLinkImagen(){
        return $this->linkImagen;
    }
    protected function setLinkImagen($linkImagen){
        $this->linkImagen = $linkImagen;
    }

    protected function getLinkContacto(){
        return $this->linkContacto;
    }
    protected function setLinkContacto($linkContacto){
        $this->linkContacto = $linkContacto;
    }
}