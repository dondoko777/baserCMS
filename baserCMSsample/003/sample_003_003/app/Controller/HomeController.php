<?php
class HomeController extends AppController {
    public function Index() {
        return $this->redirect(['controller'=>'home','action'=>'sub']);
    }

	public function Sub() {
	}
}