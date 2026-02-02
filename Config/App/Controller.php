<?php
class Controller {
    protected $views; 

    public function __construct() {
        $this->views = new Views();
    }
}