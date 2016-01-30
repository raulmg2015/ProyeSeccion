<?php

	class Base extends CI_Model{
				
		//Constructor para cargar la base de datos
		public function __construct()
        {	
            $this->load->database();
        }


		//La función valida si exite la tablainstalador o no
        public function consultatabla()
        {	
        	//simple_query cacha los errores de la consulta
        	if($this->db->simple_query("SELECT * FROM tablarichard;"))
            {
                return "TRUE";
            } 

        }

        //La función crea una tabla llamada tablainstalador
        public function creartabla()
        {
        	$this->db->simple_query("CREATE TABLE tablarichard( 
        	id int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
			nombre varchar(50) NOT NULL,
			apaterno varchar(50) NOT NULL,
			amaterno varchar(50) NOT NULL,
			telefono text NOT NULL);");
        }
}