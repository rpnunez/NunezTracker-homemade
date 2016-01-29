<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Class ProjectsController
 */
class ProjectsController extends AppController {

    /**
     * Lists all projects
     */
    public function index() {
        $projectsTable = TableRegistry::get('Projects');
        $projects = $projectsTable->find('all')->contain(['Companies']);

        $this->set('projects', $projects);
    }

    public function view() {
        //$this->layout = 'cakephp';
    }

    /**
     * Displays project add form and saves project
     */
    public function add() {

    }

    /**
     * Displays project edit form and saves project
     */
    public function edit() {

    }

    /**
     * Displays delete confirmation and deletes project
     */
    public function delete() {

    }
}