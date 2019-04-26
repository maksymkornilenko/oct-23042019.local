<?php

namespace models;

use core\Model;
use mysqli;

class ModelTasks extends Model {
    public function __construct() {
	parent::__construct();
	$this->table='tasks';
    }
}