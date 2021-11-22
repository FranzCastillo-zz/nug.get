<?php
    class Vista{
        public function mostrarPublicaciones($ingresos){ //validar si los ingresos estan vacios if($ingresos != null)
            //$ingresosCheck = mysqli_num_rows($ingresos);

            if($ingresos != null){
                while($row = mysqli_fetch_assoc($ingresos)){
                    $this->well($row["Usuario"], $row["Titulo"], $row["Descripcion"], $row["LinkImagen"],$row["LinkContacto"], $row["FechaDePublicacion"]);
                }
            }else{
                $this -> noHayDatos();
            }        
        }

        private function well($user, $title, $description, $image,  $contactLink, $date){
            echo('
            <div class="rectangle">
            <section>
                <h1>' . $title .'</h1>
                <p>'. $description .'</p>

            <p style="font-size:small;"> Publicado por: ' . $user . ' el ' . $date . ' </p>
            <div class="contactButton" style="display: flex; justify-content: flex-end; margin: 10px">
                 <button type="button" value="Contactar" class="btn" font-size:10px;
                 font-family:Verdana,Helvetica;
                 font-weight:bold;
                 color:white;
                 background:#638cb5;
                 border:0px;
                 width:80px;
                 height:19px;><a href = "'.$contactLink.'"> contactar </a></button>
            </div>
            </section>
            <section>                
                <img src="'. $image .'" width = "350" height = "200"/>                
            </section>
            </div>
            ');
        }

        private function noHayDatos(){
            echo('               
            <p style = "text-align: center; font-size: xx-large; font-weight:bold;">
                No Se Han Ingresado Datos Todavía 
            </p>                             
            ');
        } 
        
        public function separar(){
            echo('
                <br>
                <br>
            ');
        }
    }

?>