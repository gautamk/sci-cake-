<?php

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

echo $this->Form->create($formSchema["Form"]["name"],$formSchema["Form"]["options"]);
echo $this->Form->hidden("form_id",array("value"=>$formSchema["Form"]["_id"]));
foreach ($formSchema["Form"]["inputs"] as $input => $options) {
    echo $this->Form->input($input,$options);    
}
echo $this->Form->submit($formSchema["Form"]["submit"]);
echo $this->Form->end();
?>

<pre>
    <?php
        print_r ($formSchema);
        
    ?>
</pre>