<?php
/**
 * Created by PhpStorm.
 * User: Matus Kacmar
 * Date: 7. 12. 2015
 * Time: 14:23
 */

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= 'ProjektX/';
include_once ($path . 'controllers/ProductDisplay.php');

if(isset($_SESSION['results'])) {

    $results = $_SESSION['results'];
    $product = new ProductDisplay();
    $product->displayResults($results, 4);

} else if(isset($_SESSION['noresults'])){
    echo $_SESSION['noresults'];
}
?>
<script src="libraries/js/pageScript.js"></script>


<link rel="stylesheet" type="text/css" href="libraries/css/search-style.css">
