<?php
/**
 * Created by PhpStorm.
 * User: Matus Kacmar
 * Date: 7. 12. 2015
 * Time: 14:23
 */

$path = $_SERVER['DOCUMENT_ROOT'];
$path .= 'ProjektX/';

include_once ($path . 'API/Filter.php');
include_once ($path . 'controllers/ProductDisplay.php');
include_once ($path . 'controllers/displayCategory.php');
?>
<script src="libraries/js/pageScript.js"></script>


<link rel="stylesheet" type="text/css" href="libraries/css/search-style.css">
<link rel="stylesheet" type="text/css" href="libraries/css/nouislider.fox.css">
<script type="text/javascript" src="libraries/js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="libraries/js/nouislider.js"></script>

<script src="libraries/js/jquery.nouislider.js"></script>
<script type="text/javascript">
    var Slider = document.getElementById('noUiSlider');
    var ceiling = "<?php echo $ceilingPrice;?>";
    var minPriceChosen = "<?php echo $minPriceChosen;?>";
    var maxPriceChosen = "<?php echo $maxPriceChosen;?>";

    //also change in mainCategory.php
    noUiSlider.create(Slider, {
        start: [ minPriceChosen, maxPriceChosen ],
        range: {
                'min': [  0 ],
                'max': [ parseInt(ceiling) ]
        },
        connect: true
    });
</script>
<script>
var snapValues = [
	document.getElementById('pricehand1'),
	document.getElementById('pricehand2')
];

Slider.noUiSlider.on('update', function( values, handle ) {
	snapValues[handle].innerHTML = values[handle];
        snapValues[handle].innerHTML = Math.round(snapValues[handle].innerHTML);
});

</script>