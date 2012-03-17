<?php 

class FormResponsesController extends AppController{


    function index(){
        $this->set("data",$this->data);
    }
}