<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//class Homemodel extends CI_Model{
 //   public function  index(){
//$a = 10;
//$b = 20;
//return $a+$b;
  //  }
//}
class Homemodel extends CI_model{
   // public function queries(){
   // $q =$this->db->query('select * from table_data where userid ="235"');
   //short form of above line
 //  $q=$this->db->where('userid',235)->get('table_data');
  //  return $q->row();
    // to give data in araay form and not in object form we have to write result_array() instead of row()
}
