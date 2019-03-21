<?php 
    class PDOAgent{
        private $host = DB_HOST;
        private $user = DB_USER;
        private $pass = DB_PASS;
        private $dbname = DB_NAME;

        // Set the DSN
        private $dsn = "";

        // SET THE CLASS
        private $className;

        //Error
        private $error;

        //Prepared Statement
        private $stmt;

        private $pdo;
        
        public function __construct(string $className)  {

            //Copy the class name
            $this->className = $className;
            
            //Build DSN
            $this->dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
        
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
        
            try {
                $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $options);
            } catch (PDOException $e)   {
                $this->error = $e->getMessage();
            }
            var_dump($this->pdo);
        }

        // prepare the statement for execution

        public function query(string $query)    {
            $this->stmt = $this->pdo->prepare($query);
        }

        public function bind($param, $value, $type = null){  
            if (is_null($type)) {  
                switch (true) {  
                    case is_int($value):  
                        $type = PDO::PARAM_INT;  
                        break;  
                    case is_bool($value):  
                        $type = PDO::PARAM_BOOL;  
                        break;  
                    case is_null($value):  
                        $type = PDO::PARAM_NULL;  
                        break;  
                    default:  
                        $type = PDO::PARAM_STR;  
                }  
            }  
            $this->stmt->bindValue($param, $value, $type);  
        }  

        // Execute
        public function execute($data = null){
            if(is_null($data)){
                return $this->stmt->excute();
            } else {
                return $this->stmt->excute($data);
            }
        }

        //Return a single result
        public function singleResult(){
            // Execute statement
            $this->stmt->excute();
            // Set fetch mode to return classes
            $this->stmt->setFetchMode(PDO::FETCH_CLASS, $this->className);
            return $this->stmt->fetch(PDO::FETCH_CLASS);
        }

        // Return result set
        public function retsultSet(){
             // Execute statement
             $this->stmt->excute();

            return $this->stmt->fetchAll(PDO::FETCH_CLASS, $this->className);
        }

        // Return the rowcount
        public function rowCount() : int{
            return $this->stmt->rowCount();
        }

        //Return the latestInsertedID
        public function lastInsertedId() : int{
            return $this->pdo->lastinsertedId();
        }

        // Get the debug info
        public function debugDumpParams(){
            return $this->stmt->debugDumpParams();
        }
    }
?>