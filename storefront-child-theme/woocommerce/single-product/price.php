<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<?php if ($product->get_price()<20): ?>
<p class="price"><?php echo $product->get_price();; ?>$</p>

<?php else: ?>
<p class="price"> Attention <?php echo $product->get_price();  ?>$ !!!!</p>

<?php endif ?>
<p>
<?php
// var_dump($product);

 ?>
</p>
