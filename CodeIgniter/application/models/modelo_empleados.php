<?php
class Modelo_empleados extends Model {

   function __construct(){
      parent::Model();
   }
   
   function empleados(){
      $ssql = "select * from employees";
      return mysql_query($ssql);
   }
}
?>