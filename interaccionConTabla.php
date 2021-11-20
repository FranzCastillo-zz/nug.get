<?php
    interface interaccionConTabla{
        public function conectar();
        public function ingresarATabla($usuario, $titulo, $descripcion, $linkImagen, $linkContacto, $fecha);
        public function setTabla($tabla);
        public function obtenerIngresos();
    }
?>