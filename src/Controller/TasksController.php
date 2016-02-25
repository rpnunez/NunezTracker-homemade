<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Class TasksController
 */
class TasksController extends AppController {

    /**
     * Lists all tasks
     */
    public function index() {
        $tasksTable = TableRegistry::get('Tasks');
        $tasks = $tasksTable->find('all')->contain(['Projects']);

        $this->set(compact('tasks'));
    }
}