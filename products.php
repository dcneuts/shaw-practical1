<?php
/**
 * Created by PhpStorm.
 * User: derek
 * Date: 5/16/17
 * Time: 12:01 AM
 */
include 'inc/head.inc.php';
?>
<header class="container">
    <h1>Products</h1>
</header>
<!--Main Area-->
<main class="container">
    <div class="row">
        <?php
        //Create connection and query for product information
        include_once "inc/config.php";
        $conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);
        if ($conn->connect_error) {
            die("Server connection error.");
        }
        $content = array();
        if(isset($_POST['searchterm'])){
            $stmt = $conn->prepare("SELECT `name`,`price`,`description` FROM `products` WHERE `name` LIKE ? OR 'description' LIKE ? ORDER BY `stock` DESC 
LIMIT 6 OFFSET 0");
            //Wrap array in curly braces in syntax like this
            $searchterm = "%{$_POST['searchterm']}%";
            $stmt->bind_param("ss",$searchterm,$searchterm);
            $stmt->execute();
            $stmt->bind_result($name,$price,$description);
            //fetch results from our statement
            while($stmt->fetch()) {
                $content[] = array("name" => $name, "price" => $price, "description" => $description);
            }
        }
        else {
            $result = $conn->query("SELECT `name`,`price`,`description` FROM `products` LIMIT 6 OFFSET 9");

            //load results in 2D array
            $content = array();
            while($row = $result->fetch_assoc()){
                $content[] = $row;
            }
        }
        //close DB connection afterwards, not in the loop
        $conn->close();

        //results variable that shows the query
        $result = $conn->query("SELECT `name`,`price`,`description` FROM `products` LIMIT 6 OFFSET 0");

        include_once "inc/template.php";
        $thumbnail = new Template("product_thumbnail.html", $content);
        for ($i = 0; $i < PRODUCT_ROWS * PRODUCT_COLUMNS; $i++) {
            //every 3 products a new row due to bootstrap
            //will create a new row
            if ($i % PRODUCT_COLUMNS == 0) {
                if ($i != 0) {
                    echo "</div><div class='row'>";
                }
            }
            echo "<div class='col-sm-4 col-lg-4 col-md-4'>";
            echo $thumbnail->output();
            echo "</div>";
        }
        ?>
    </div>
</main>
<!--Footer Area-->
<?php
include 'inc/foot.inc.php';
?>
