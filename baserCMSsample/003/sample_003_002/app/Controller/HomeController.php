<?php
class HomeController extends AppController {
    public function Index() {
        $this->set('value', 'Viewに値を渡します');
    }
}