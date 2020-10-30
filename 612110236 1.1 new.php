<?php
/*ID: 612110236
Name: Di Li
 */
printf("input your price and discount:");
fscanf(STDIN, "%d %d", $price,$discount);
$decrease=$price*$discount/100;
$net=$price-$decrease;
printf("price: %.2f, discount: %.2f, net price: %.2f",$price,$discount,$net);