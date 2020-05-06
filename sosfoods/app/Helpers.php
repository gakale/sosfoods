 <?php
 function getPrice($priceIndecimals)
 {
     $price =floatval($priceIndecimals) /100;

     return number_format($price, 2 ,',', '').''. 'fr ';

 }