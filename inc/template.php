<?php

/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 5/7/2017
 * Time: 12:04 PM
 */

$contentExample = array(
    array(
        "name"=>"First Product",
        "price"=>"$24.99",
        "description"=>"This is a short description."
    ),
    array(
        "name"=>"Second Product",
        "price"=>"$19.99",
        "description"=>"This is a short description."
    ),
    array(
        "name"=>"Third Product",
        "price"=>"$39.99",
        "description"=>"This is a short description."
    ),
    array(
        "name"=>"Fourth Product",
        "price"=>"$59.99",
        "description"=>"This is a short description."
    ),
    array(
        "name"=>"Fifth Product",
        "price"=>"$84.99",
        "description"=>"This is a short description."
    ),
    array(
        "name"=>"Sixth Product",
        "price"=>"$99.99",
        "description"=>"This is a short description."
    )
);

class Template {
    private $template;
    private $content;

    public function __construct($template,$content) {
        // Should validate arguments before continuing
        $this->load($template,$content);
    }

    public function output(){
        $record = current($this->content);
        $html = $this->template;

        foreach ($record as $key=>$val) {
            //What you want to replace, what to replace it with, and string to search
            $html = str_replace("{".$key."}",$val,$html);
        }
        return $html;
}

    public function load($template,$content) {
        $this->template = file_get_contents("http://localhost/shawpractical/templates/$template",true);
        //$this->template = $template;
        $this->content = $content;
    }
}
$test = new Template('product_thumbnail.html',$contentExample);
echo $test->output();