<?php

class DB {
    
    protected $pdo;
    
    protected $defaults = [
        "host" => "localhost",
        "user" => "postgres",
        "pass" => "root",
        "db" => "postgres",
        "port" => 5432,
        "charset" => "UTF8"
    ];
    
    public function __construct($opt = []) {       
        $opt = array_merge($this->defaults, $opt);
        
        try {
            $this->pdo = new PDO("pgsql:host=" . $opt['host'] . ';port=' . $opt['port'] . ';dbname=' . $opt['db'], 
            $opt['user'], $opt['pass'],[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES=' . $opt['charset']]);
        } catch (Exception $e) {
            exit($e->getMessage());
        }       
    }
    
    public function insert($insertQuery,$n=null,$q=null) {        
        $data = $this->pdo->prepare($insertQuery);
        $data->execute([$_POST['name'], $_POST['calories']]);
    }
    
    public function query() {
        return $this->queryAll($this->prepareQuery(func_get_args()));
    }
    
    protected function queryAll($query){        
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    
    protected function prepareQuery($args){
        return array_shift($args);
       
    }
    
    
}
    
    
  

