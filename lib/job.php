<?php
 class Job{
    private $db;

    public function __construct(){
        $this->db = new Database;
    } 
//get all job
    public function getAllJobs(){
        $this->db->query("SELECT jobs.*, department.course AS dcourse FROM jobs
        INNER JOIN department ON jobs.departmentID = department.id ORDER BY dateTimeUpdated DESC LIMIT 3");
   
    
        $results = $this->db->resultSet();
        return $results;
    }
    
// get Course in dropdown

public function getDepartment(){
    $this->db->query("SELECT * FROM department");


    $results = $this->db->resultSet();
    return $results;
}
//Get Job by Course
public function getByDepartment($department){
    $this->db->query("SELECT jobs.*, department.course AS dcourse FROM jobs
        INNER JOIN department ON jobs.departmentID = department.id WHERE jobs.departmentID = $department ORDER BY dateTimeUpdated DESC");
   
    
        $results = $this->db->resultSet();
        return $results;
    }
//Get Job
public function getJob($id){
    $this->db->query("SELECT * FROM jobs WHERE id = :id");
    $this->db->bind(':id',$id);

    $row = $this->db->single();
    return $row;

}

public function get($id){
    $this->db->query("SELECT * FROM studentss WHERE id = :id");
    $this->db->bind(':id',$id);

    $row = $this->db->single();
    return $row;

}

}

