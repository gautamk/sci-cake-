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
echo $this->Form->create($formSchema["name"],$formSchema["options"]);
foreach ($formSchema["inputs"] as $input => $options) {
    echo $this->Form->input($input,$options);    
}
echo $this->Form->submit($formSchema["submit"]);
echo $this->Form->end();
?>

<pre>
    <?php
        echo $formSchemaJSON;
    ?>
</pre>
