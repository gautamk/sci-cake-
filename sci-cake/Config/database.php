<?php
class DATABASE_CONFIG {

	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'cake',
		'password' => 'cake',
		'database' => 'cake',
	);
        
        public $mongodb = array(
        'datasource' => 'Mongodb.MongodbSource',
        'host' => 'localhost',
        'database' => 'cake',
        'port' => 27017,
        'prefix' => '',
        'persistent' => 'true',
        /* optional auth fields
        'login' => 'mongo', 
        'password' => 'awesomeness',
        'replicaset' => array('host' => 'mongodb://hoge:hogehoge@localhost:27021,localhost:27022/blog', 
                              'options' => array('replicaSet' => 'myRepl')
                     ),
        */
        );
}
