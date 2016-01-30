<?php
class Controlador_empleado extends Controller {
   function index(){
      //cargo el helper de url, con funciones para trabajo con URL del sitio
      $this->load->helper('url');
      
      //cargo el modelo de artículos
      $this->load->model('Modelo_empleados');
      
      //pido los ultimos artículos al modelo
      $ultimosEmpleados = $this->Modelo_empleados->empleados();
      
      //creo el array con datos de configuración para la vista
      $empleados_vista = array('rs_empleados' => $ultimosEmpleados);
      
      //cargo la vista pasando los datos de configuacion
      $this->load->view('home', $empleados_vista);
   }
}
?>