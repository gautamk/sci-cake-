<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormsController
 *
 * @author gautam
 */
class FormsController extends AppController {
    public $helpers = array('Form', 'Html');
    
    public $name="Forms";
    function index($id=null){
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
//        Array
//        (
//            [Form] => Array
//                (
//                    [_id] => 4f5ccbd1740f1ff099b7bc76
//                    [name] => Ticket
//                    [options] => Array
//                        (
//                            [type] => post
//                            [action] => 
//                        )
//
//                    [inputs] => Array
//                        (
//                            [name] => Array
//                                (
//                                    [label] => Name
//                                )
//
//                            [password] => Array
//                                (
//                                    [type] => password
//                                    [label] => Password
//                                )
//
//                            [DOB] => Array
//                                (
//                                    [type] => date
//                                )
//
//                            [something] => Array
//                                (
//                                    [type] => hidden
//                                    [value] => Somethignelse
//                                    [class] => Classes
//                                )
//
//                        )
//
//                    [submit] => Done
//                )
//
//        )
        if(!$id){
            $this->flash("Invalid Form", array("controller"=>"Pages","action"=>"display"));
        }
        
        $results = $this->Form->read(null,$id);
        if ($results == null){
            $this->flash("Invalid Form", array("controller"=>"Pages","action"=>"display"));
        }
        $this->set("formSchema",$results);
        
    }
}


