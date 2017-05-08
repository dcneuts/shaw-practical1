<?php

/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 5/7/2017
 * Time: 12:04 PM
 */
class Template {
    private $template;
    private $content;

    public function __construct($template,$content) {
        // Should validate arguments before continuing
        $this->load($template,$content);
    }

    public function output(){
        $record = current($this->content);
        $record['name'];
}

    public function load($template,$content) {
        $this->template = file_get_contents("http://localhost/shawpractical/templates/$template",true);
        //$this->template = $template;
        $this->content = $content;
    }
}