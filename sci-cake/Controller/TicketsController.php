<?php


/**
 * Description of TicketsController
 *
 * @author gautam
 * 
 */
class TicketsController extends AppController {
    
    public $helpers = array('Form', 'Html', 'Js', 'Time');
    
    public $name="Tickets";
    
    public function index() {
        /*
        * Sample JSON
        * {
        *  name:"Ticket"
        *  options:{
        *      type:"post"
        *      action:"something"
        *  }
        *  inputs:[
        *      name:{"label":"SomeThing"}
        *  ]
        *  submit:"Done"
        *  
        * } 
        */
        $formSchema=array(
            "name"=>"Ticket",
            "options"=>array(
                "type"=>"post",
                "action"=>""
            ),
            "inputs"=>array(
                "name"=>array("label"=>"Name"),
                "password"=>array("type"=>"password","label"=>"Password"),
                "DOB"=>array("type"=>"date"),
                "something"=>array("type"=>"hidden","value"=>"Somethignelse","class"=>"Classes"),
            ),
            "submit"=>"Done"
            
        );
        $this->set("formSchema",$formSchema );
        $this->set("formSchemaJSON",  json_encode($formSchema));
    }
    
}

