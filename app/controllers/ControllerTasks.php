<?php

namespace controllers;

use core\Controller;
use models\ModelTasks;

class ControllerTasks extends Controller {

    public function __construct() {
	parent::__construct();
	$this->model = new ModelTasks();
    }

    public function action_index() {
	$this->view->tasks = $this->model->all();
	$this->view->render('tasks_index_view');
    }
    public function action_create(){
        $this->view->render('tasks_index_create');
    }
    public function action_add(){
	//todo забрать из пост нэйм проверерить и передать в эдд
         $this->model->add($name);
	 header('Location: http://oct-23042019.local/tasks');

    }
    public function action_delete(){
        $this->model->delete($id);
	header('Location: http://oct-23042019.local/tasks');
    }
    public function action_update(){
	$this->model->update($id);
    }
}
