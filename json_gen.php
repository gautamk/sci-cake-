<?php 
$form=array(

            "name"=>"Registration",
            "options"=>array(
                "type"=>"post",
                'url' => array('controller' => 'FormResponses', 'action' => 'index'),
            ),
            "inputs" => array(
                "username"=>array(
                    "placeholder"=>"Enter your username",
                ),
                "password"=>array(
                    "placeholder" => "Enter your Password",
                    "type"=>"password"
                ),

            ),
            "submit"=>"Login",
            
            "mongoschema"=>array(
                "username"=>array("type"=>"string"),
                "password"=>array("type"=>"string")
            ),

            "validation"=>array(

                "username"=>array(
                    'alphaNumeric' => array(
                        'rule'     => 'alphaNumeric',
                        'required' => true,
                        'message'  => 'Alphabets and numbers only'
                    ),
                    'between' => array(
                        'rule'    => array('between', 5, 15),
                        'message' => 'Between 5 to 15 characters'
                    ) 
                ),

                'password' => array(
                    'rule'    => array('minLength', '8'),
                    'message' => 'Minimum 8 characters long'
                ),

            ),
); 

$m = new Mongo(); // connect
$db = $m->cake;
$db->forms->insert($form);

?>

<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h1>DO NOT RELOAD THE PAGE</h1>
        <h2>
            The following was added to the database _id:<pre> <?php 
                $result = $db->forms->findOne(
                    array("name"=>$form['name'])
                );
                echo $result['_id'];
            ?> </pre>
        </h2>
        <pre>
            <?php 
            $pattern = array(',"', '{', '}');
            $replacement = array(",\n\t\"", "{\n\t", "\n}");
            echo str_replace($pattern, $replacement, json_encode($form) ); ?>
        </pre>
    </body>
</html>


