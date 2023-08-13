<?php
class HomeController extends AppController {
    public $uses = ['Users'];

    public function Index() {
        $user = $this->Users->find('first');

        $this->set('id', $user['Users']['id']);
        $this->set('name', $user['Users']['name']);
   }
}