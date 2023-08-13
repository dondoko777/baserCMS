<?php
class HomeController extends AppController {
    public function Index() {
        $id = $this->request->query('id');

	    $this->set('id', intval($id));
    }
}