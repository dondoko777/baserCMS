<?php
class HomeController extends AppController {
    public $components = array('Security');

    public function Index() {

        if (isset($this->request->data['PostSample'])) {
            $name = $this->request->data['PostSample']['name'];
            $email = $this->request->data['PostSample']['email'];
        }
        else {
            $name = '';
            $email = '';
        }

        $this->set('name', $name);
        $this->set('email', $email);
    }
}