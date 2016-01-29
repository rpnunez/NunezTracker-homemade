<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;

/**
 * Class CustomersController
 */
class CustomersController extends AppController {

    /**
     * Lists all customers
     */
    public function index() {
        $customersTable = TableRegistry::get('Customers');
        $customers = $customersTable->find('all')->contain(['Companies']);

        $this->set('customers', $customers);
        $this->set('breadcrumb', array(
            'file' => 'customers_index',
            'title' => __('Customers')
        ));
    }

    /**
     * Views a customer
     *
     * @param $customerId
     */
    public function view($customerId) {
        if ($customerId > 0) {
            $customersTable = TableRegistry::get('Customers');
            $customer = $customersTable->find()->where(['id' => $customerId])->first()->contain(['Companies']);

            if (count($customer)) {
                $this->set('customer', $customer);
            } else {
                $this->Flash->error(__('The requested customer does not exist.'));
            }
        } else {
            $this->Flash->error(__('You must supply a valid customer ID to view a customer.'));
        }
    }

    /**
     * Displays customer add form and saves customer
     */
    public function add() {

    }

    /**
     * Displays customer edit form and saves customer
     */
    public function edit() {

    }

    /**
     * Displays delete confirmation and deletes customer
     */
    public function delete() {

    }
}