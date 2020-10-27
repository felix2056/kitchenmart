<?php
$products = array();

/**
* Cutting Tools Starts
*/

$product7 = array();
$product7['id'] = 7;
$product7['title'] = "Vegetable Slicer";
$product7['price'] = "$50.36";
$product7['sale_price'] = "$64.12";
$product7['meta'] = array(
    "style" => "Europe",
    "theme" => "Love",
    "material" => "Crystal",
    "light_color" => "Various Colors Changing",
    "approximate_size" => "4.5*3*1.2cm",
    "approximate_weight" => "32g"
);

$product7['featured_image'] = "/assets/images/products/product-image-612361243_360x.jpg";
$product7['images'] = array();


$product8 = array();
$product8['id'] = 8;
$product8['title'] = "Watermelon Melon Slicer";
$product8['price'] = "$33.75";
$product8['sale_price'] = "$44.25";
$product8['meta'] = array(
    "material" => "Glass",
    "style" => "Pastoral",
    "theme" => "Landscape"
);

$product8['featured_image'] = "/assets/images/products/product-image-338848055_360x.jpg";
$product8['images'] = array();


$product9 = array();
$product9['id'] = 9;
$product9['title'] = "Scales Skinner Cutter";
$product9['price'] = "$17.94";
$product9['sale_price'] = "$29.98";
$product9['meta'] = array(
    "specification" => "Single-piece Package",
    "style" => "Creative",
    "pattern" => "Plane Wall Sticker",
    "scenerios" => "Wall",
    "material" => "vinyl"
);

$product9['featured_image'] = "/assets/images/products/product-image-425290122_360x.jpg";

$product9['images'] = array();


$product10 = array();
$product10['id'] = 10;
$product10['title'] = "Salad Cutter Bowl";
$product10['price'] = "$60.38";
$product10['sale_price'] = "$5.48";
$product10['meta'] = array(
    "style" => "Modern",
    "classification" => "For Wall",
    "pattern" => "Plane Wall Sticker",
    "specifications" => "Single-piece Package",
    "theme" => "Animal",
    "scenerios" => "Wall",
    "material" => "VINYL",
    "suitable_use" => "home dacal/bathroom decor/wedding decoration/party decor",
    "suitable_place" => "bathroom",
    "place_of_origin" => "China",
    "quality" => "waterproof sunscreen non-toxic environment protected"
);

$product10['featured_image'] = "/assets/images/products/product-image-603035536_360x.jpg";
$product10['images'] = array();


$product11 = array();
$product11['id'] = 11;
$product11['title'] = "Fruit Vegetable Cutter";
$product11['price'] = "$6.38";
$product11['sale_price'] = "$5.48";
$product11['meta'] = array(
    "style" => "Modern",
    "classification" => "For Wall",
    "pattern" => "Plane Wall Sticker",
    "specifications" => "Single-piece Package",
    "theme" => "Animal",
    "scenerios" => "Wall",
    "material" => "VINYL",
    "suitable_use" => "home dacal/bathroom decor/wedding decoration/party decor",
    "suitable_place" => "bathroom",
    "place_of_origin" => "China",
    "quality" => "waterproof sunscreen non-toxic environment protected"
);

$product11['featured_image'] = "/assets/images/products/product-image-245055012_360x.jpg";
$product11['images'] = array();


$product12 = array();
$product12['id'] = 12;
$product12['title'] = "Orange Peelers";
$product12['price'] = "$6.38";
$product12['sale_price'] = "$5.48";
$product12['meta'] = array(
    "style" => "Modern",
    "classification" => "For Wall",
    "pattern" => "Plane Wall Sticker",
    "specifications" => "Single-piece Package",
    "theme" => "Animal",
    "scenerios" => "Wall",
    "material" => "VINYL",
    "suitable_use" => "home dacal/bathroom decor/wedding decoration/party decor",
    "suitable_place" => "bathroom",
    "place_of_origin" => "China",
    "quality" => "waterproof sunscreen non-toxic environment protected"
);

$product12['featured_image'] = "/assets/images/products/product-image-533389116_360x.jpg";
$product12['images'] = array();


$product13 = array();
$product13['id'] = 13;
$product13['title'] = "Ceramics Fruit Peeler";
$product13['price'] = "$6.38";
$product13['sale_price'] = "$5.48";
$product13['meta'] = array(
    "style" => "Modern",
    "classification" => "For Wall",
    "pattern" => "Plane Wall Sticker",
    "specifications" => "Single-piece Package",
    "theme" => "Animal",
    "scenerios" => "Wall",
    "material" => "VINYL",
    "suitable_use" => "home dacal/bathroom decor/wedding decoration/party decor",
    "suitable_place" => "bathroom",
    "place_of_origin" => "China",
    "quality" => "waterproof sunscreen non-toxic environment protected"
);

$product13['featured_image'] = "/assets/images/products/product-image-617809979_360x.jpg";
$product13['images'] = array();


$product14 = array();
$product14['id'] = 14;
$product14['title'] = "Cake Pie Slicer";
$product14['price'] = "$6.38";
$product14['sale_price'] = "$5.48";
$product14['meta'] = array(
    "style" => "Modern",
    "classification" => "For Wall",
    "pattern" => "Plane Wall Sticker",
    "specifications" => "Single-piece Package",
    "theme" => "Animal",
    "scenerios" => "Wall",
    "material" => "VINYL",
    "suitable_use" => "home dacal/bathroom decor/wedding decoration/party decor",
    "suitable_place" => "bathroom",
    "place_of_origin" => "China",
    "quality" => "waterproof sunscreen non-toxic environment protected"
);

$product14['featured_image'] = "/assets/images/products/product-image-352232459_360x.jpg";
$product14['images'] = array();

/**
* Cutting Tools Ends
*/

array_push($products, $product7);
array_push($products, $product8);
array_push($products, $product9);
array_push($products, $product10);
array_push($products, $product11);
array_push($products, $product12);
array_push($products, $product13);
array_push($products, $product13);

function getAllCutting() {
    return json_encode($GLOBALS['products']);
}