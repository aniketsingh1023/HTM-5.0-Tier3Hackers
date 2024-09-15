<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller{

    //public function index(){
     //   $var="hi variable";
     //   echo $var;
  //  }
    public function index(){
       // $data['name'] = "$name";
        
      //  $arr['names']=array("heavy","youtube","codeigniter","day1");
       // $arr['abc']="heavy";
        //$this->load->view('Home',$arr);
        //  $this->load->model('Homemodel');
        //  $this->load->library('email');
       // $data['sum'] = $this->Homemodel->index();
       // $this->load->view('homepage',$data);
      // $this->load->model('Homemodel');
     //  $data = $this->Homemodel->queries();
     // echo "<br>name:-".$data->uname;
     // echo "<br>uemail:-".$data->uemail;
      // this is printing data in form of object but to make data print in form array we have to write this foreach ($data as $value) echo "<br>name:-".$value->['uname'];
     // echo "<br>uemail:-".$value->['uemail'];
     //this will print data of both the rows as array 
  //   $this->load->library('email');
    // $this->email;
     // this is used to load the library
    // $array = array('Name'=>'heavy coding','work'=>'youtube tutorials');
   //  $array2 = array('Name'=>'codeigniter','work'=>'youtube tutorials');
     
    // $this->load->helper('Test');
    // clean($array);
    // clean($array2);
     //using helper we don't have to write whole print code again just call that function .
    //  print_r($array);
    //  print_r($array2);
   // $this->load->library('custom');
   // $this->custom->sum();
  // $this->load->helper('form');
   //$this->load->view('form');
  //  }
   // public function my_func(){
   // $this->load->library('form_validation');
   // $this->form_validation->set_rules('username','password','required|trim|min_length[10]');
  //  if($this->form_validation->run()){
   //   echo"yes not blank";
    //}else{
 //     echo"blank value";
  //  }
 }
}