<?php
    class Vista{
        public function mostrarPublicaciones($ingresos){ //validar si los ingresos estan vacios if($ingresos != null)
            //$ingresosCheck = mysqli_num_rows($ingresos);

            if($ingresos != null){
                while($row = mysqli_fetch_assoc($ingresos)){
                    $this->well($row["Usuario"], $row["Titulo"], $row["Descripcion"], $row["LinkImagen"],$row["LinkContacto"], $row["FechaDePublicacion"]);
                }
            }else{
                $this -> noEntries();
            }        
        }

        private function well($user, $title, $description, $image,  $contactLink, $date){
            echo('
            <div class="rectangle">
            <section>
                <h1>' . $title .'</h1>
                <p>'. $description .'</p>

            <p style="font-size:small;"> Publicado por: ' . $user . ' el ' . $date . ' </p><p>
            </p>
            </section>
            <section>
                <img src="'. $image .'" alt="">
            </section>
            </div>

            ');
        }
        

        private function noEntries(){
            echo('               
            <p style = "text-align: center; font-size: xx-large; font-weight:bold;">
                No Se han Ingresado Datos Todavía 
            </p>                             
            ');
        }
    }

?>