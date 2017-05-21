<?php

    class HTMLGenerator {
        private $rowSize = 3;

        private $maxNameSize;
        private $maxDescriptionSize;

        public function __construct($maxNameSize,$maxDescriptionSize) {
            $this->maxNameSize = $maxNameSize;
            $this->maxDescriptionSize = $maxDescriptionSize;
        }

        public function productThumbnailSet($products) {
            $productSize = sizeof($products);

            if($productSize==0) {
                return "<p>No products found.</p>";
            }
            else if($productSize<=$this->rowSize) {
                $rows = 1;
            }
            else {
                $rows = 2;
            }
            $html = "";
            for ($i=0;$i<rows;$i++) {
                $productsRemaining = $productSize-($i*$this->rowSize);
                $productsToDraw = ($productsRemaining<$this->rowSize)?$productsRemaining:$this->rowSize;

                $html .= "<div class='row'>";
                for($j=0;$j<$productsToDraw;$j++){
                    list($key,$product) = each($products);
                    $product['name'] = $this->shortenString($product['name'],$this->maxNameSize);
                    $product['description'] = $this->shortenString($product['description'],$this->maxDescriptionSize);

                    $html .= "<div class='col-sm-4 col-lg-4 col-md-4'>";
                    $html .= $this->productThumbnail($product);
                    $html .= "</div>";
                }
                $html .= "</div>";
            }
            return $html;
        }

        public function productThumbnail($product) {
            return "
        <div class='thumbnail'>
        <img src='http://placehold.it/320x150' alt=''>
        <div class='caption'>
            <h4 class='pull-right'>\${$product['price']}</h4>
		<h4><a href='inc/productimages.php'>{$product['name']}</a>
		</h4>
            <p>{$product['description']}</p>
            <button class='btn btn-success text-center'>Add to Cart</button>
        </div>
        <div class='ratings'>
            <p class='pull-right'>67 reviews</p>
            <p>
                <span class='glyphicon glyphicon-star'></span>
                <span class='glyphicon glyphicon-star'></span>
                <span class='glyphicon glyphicon-star'></span>
                <span class='glyphicon glyphicon-star'></span>
                <span class='glyphicon glyphicon-star'></span>
            </p>
        </div>
    </div>";
        }
    
        protected function shortenString($string,$maxLength){
            if(strlen($string)>$maxLength) {
                return substr($string,0,$maxLength-3)."...";
        }
        return $string;
        }
    }