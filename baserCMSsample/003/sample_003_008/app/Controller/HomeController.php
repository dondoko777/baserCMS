<?php
class HomeController extends AppController {
    public $uses = ['Users'];

    public function Index() {
        $user['id'] = 1;
        $user['name'] = 'yamada';

        $this->Users->save($user);

        $user = $this->Users->find('first');

        $this->set('id', $user['Users']['id']);
        $this->set('name', $user['Users']['name']);
   }
}