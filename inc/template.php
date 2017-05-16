<?php


/**
 * Created by PhpStorm.
 * User: Derek
 * Date: 5/7/2017
 * Time: 12:04 PM
 * Template Engine Class Project
 */

//Use below for testing only

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
	private $content = array();
    private $hasNext;
    private $noOfResults;

    public function __construct($template,$content) {
        // Should validate arguments before continuing
        $this->load($template,$content);
    }

    //public function to override the private $hasNext class to disallow access to it directly
    //using magic method __get
    public function __get($val) {
        if($val=="hasNext"){
            return $this->$val;
        } else if($val=="noOfResults"){
            return $this->$val;
        } else {
            die("Cannot access private property Template::$val");
        }
    }

    public function output(){
		if($this->hasNext){
        $record = current($this->content);
        $html = $this->template;

        foreach ($record as $key=>$val) {
            //What you want to replace, what to replace it with, and string to search
            $html = str_replace("{".$key."}",$val,$html);
        }
        //next will allow the array to go to the next entry
        if(!next($this->content)){
            $this->hasNext = FALSE;
        };
        return $html;
}
		else{
			return "";
		}
	}

    public function load($template,$content) {
        $this->template = file_get_contents("http://localhost/shawpractical/templates/$template",true);
        //$this->template = $template;
        $this->content = $content;
        $this->hasNext = TRUE;
        $this->noOfResults = sizeof($this->content);
		if($this->noOfResults == 0){
			$this->hasNext = FALSE;
		}
    }
}
/*
$test = new Template('product_thumbnail.html',$contentExample);
while($test->hasNext){
    echo $test->output();
}
*/