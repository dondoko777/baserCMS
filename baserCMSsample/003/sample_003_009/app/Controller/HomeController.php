<?php
class HomeController extends AppController {
    public $uses = ['Users'];

    public function Index() {
        $this->Users->delete(2, false);
   }
}