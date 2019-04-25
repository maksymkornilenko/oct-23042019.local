<?php

namespace models;

use core\Model;
use mysqli;

class ModelTasks extends Model {

    /**
     * 
     * @var mysqli
     */
    protected $db;
    public $task;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PWD, DB_NAME);
        $this->task = filter_input(INPUT_POST, 'add');
    }

    public function all() {
        $query = "SELECT*FROM tasks;";
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        }
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function add() {
        if (!empty($this->task)) {
            return $this->db->query("INSERT INTO tasks (name) VALUES ('".$this->task."')");
        }
        return false;
    }

}
