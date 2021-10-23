<?php

class Database{
    private $host = DBHOST;
    private $user = DBUSER;
    private $pass = DBPASS;
    private $dbname = DBNAME;

    private $dbh;
    private $error;
    private $stmt;

    public function __construct(){
        $this->con = $this->connect();
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->dbname;
        $options = array(
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        );
        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);

        } catch (PDOException $e) {
            $this->error = $e->getMessage();
        }
    }

    public function query($query){
        $this->stmt = $this->dbh->prepare($query);
    }

    public function bind($param, $value, $type = null){
        if(is_null($type)){
            switch(true){
                case is_int ($value) :
                    $type = PDO::PARAM_INIT;
                    break;
                case is_bool ($value) :
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null ($value) :
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }
        $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        return $this->stmt->execute();
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }

    private $con;


	private function connect()
	{

		$string = "mysql:host=localhost;dbname=joblister";	

		try
		{
            
            $connection = new PDO($string,DBUSER,DBPASS);
            return $connection;
		
		}catch(PDOException $e)
		{
			echo $e->getMessage();
			die;
		}

		return false;
		
	}

// Write to database
	public function write($query,$data_array = [])
	{

		$con = $this->connect();
		$statement = $con->prepare($query);
		$check = $statement->execute($data_array);
		if($check) {

			return true;
			
		}

			return false;

	}

//Read from database
	public function read($query,$data_array = [])
	{

		$con = $this->connect();
		$statement = $con->prepare($query);
		$check = $statement->execute($data_array);
		
		if($check) {

			$result = $statement->fetchALL(PDO::FETCH_OBJ);
			if(is_array($result) && count($result) > 0)
			{
				return $result;
			}
			return false;
			
		}

		return false;

	}


}