<?php
$products = array();

/* 
* Homepage Starts Here
*/

$product1 = array();
$product1['id'] = 1;
$product1['title'] = "Waffle Mold Tool";
$product1['price'] = "$36.32";
$product1['sale_price'] = "$20.56";
$product1['meta'] = array(
    "style" => "Flower",
    "material" => "Plastic",
    "color" => "White Green Pink Purple",
    "whole_length" => "38cm / 15.3in",
    "package" => "1 pcs",
    "festivals" => "Christmas day/Valentine's Day/New Year/ Birthday/ Gifts"
);

$product1['featured_image'] = "/assets/images/products/product-image-525318511_360x.jpg";
$product1['images'] = array();


$product2 = array();
$product2['id'] = 2;
$product2['title'] = "Stainless Food Steamer";
$product2['price'] = "$25.78";
$product2['sale_price'] = "$10.50";
$product2['meta'] = array(
    "function" => "Stiring",
    "feature" => "Eco-Friendly",
    "eggbeater_laying_method" => "Hand",
    "type" => "Egg Tools",
    "material" => "Stainless steel",
    "uses" => "Kitchen Mixer"
);

$product2['featured_image'] = "/assets/images/products/product-image-600342253_360x.jpg";
$product2['images'] = array();


$product3 = array();
$product3['id'] = 3;
$product3['title'] = "Spice Container";
$product3['price'] = "$51.73";
$product3['sale_price'] = "$2.91";
$product3['meta'] = array(
    "style" => "Modern",
    "theme" => "Pattern",
    "pattern" => "3D Sticker",
    "specification" => "Single-piece Package",
    "model_number" => "Foam Wall Stickers",
    "clarification" => "For Wall",
    "material" => "PVC",
    "scenerios" => "Wall",
    "color" => "White, black, pink, yellow, orange and so on",
    "size" => "70X30cm, 70X15cm"
);

$product3['featured_image'] = "/assets/images/products/product-image-524056547_360x.jpg";
$product3['images'] = array();


$product4 = array();
$product4['id'] = 4;
$product4['title'] = "Pizza Wheel Slicer";
$product4['price'] = "$40.94";
$product4['sale_price'] = "$12.98";
$product4['meta'] = array(
    "theme" => "Pattern",
    "specifications" => "Dinosaur Bike",
    "style" => "Solid",
    "scenerios" => "Wall",
    "brand_name" => "mondecor",
    "material" => "Plastic",
    "pattern" => "Plane Wall Sticker",
    "size" => "0.6 x 3M / 5M / 10M",
);

$product4['featured_image'] = "/assets/images/products/product-image-603417340_360x.jpg";
$product4['images'] = array();


$product5 = array();
$product5['id'] = 5;
$product5['title'] = "Pie Servers+Tweezers";
$product5['price'] = "$76.76";
$product5['sale_price'] = "$23.54";
$product5['meta'] = array(
    "material" => "PVC",
    "theme" => "Plant",
    "scenerios" => "Wall",
    "pattern" => "Plane Wall Sticker",
    "brancolord_name" => "multi",
    "received_size" => "60*90cm*2",
    "finished_size" => "187*128cm"
);

$product5['featured_image'] = "/assets/images/products/product-image-603682144_360x.jpg";

$product5['images'] = array();


$product6 = array();
$product6['id'] = 6;
$product6['title'] = "Pancake Egg Ring Maker";
$product6['price'] = "$55.41";
$product6['sale_price'] = "$81.24";
$product6['meta'] = array(
    "pattern_type" => "Solid",
    "use" => "Decorative,Seat,Car,Chair",
    "shape" => "Square",
    "technics" => "Knitted",
    "material" => "100% Polyester",
    "style" => "mordern",
    "pattern" => "plush"
);

$product6['featured_image'] = "/assets/images/products/product-image-391691149_360x.jpg";
$product6['images'] = array();

/**
 * Homepage ends
*/

array_push($products, $product1);
array_push($products, $product2);
array_push($products, $product3);
array_push($products, $product4);
array_push($products, $product5);
array_push($products, $product6);

function getAllCooking() {
    return json_encode($GLOBALS['products']);
}