<?php
class HomeController extends AppController   {
public $uses = ['Blog.BlogCategory', 'Blog.BlogComment', 'Blog.BlogPost'];

    public function index() {

        pr($this->BlogPost->find("first"));

        pr("Controller::beforeSet");

        $this->set('value', 'サンプル');

        pr("Controller::afterSet");
    }
}