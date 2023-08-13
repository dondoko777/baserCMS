<?php
class HomeController extends AppController {
    public function Index($id = 0, $name = '') {
	    $this->set('id', intval($id));
        $this->set('name', $name);
    }
}