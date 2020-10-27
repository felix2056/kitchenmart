<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/extras.php'); ?>

<?php
    $products = json_decode(getAllExtras(), true);
?>

<div class="page-container drawer-page-content" id="PageContainer">
    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">
        <div id="shopify-section-collection-template" class="shopify-section">
            <div data-section-id="collection-template" data-section-type="collection-template">
                <header class="collection-header">


                    <div class="page-width">
                        <div class="section-header text-center">
                            <h1>Extras</h1>
                        </div>
                    </div>

                    <div class="filters-toolbar-wrapper">
                        <div class="page-width">
                            <div class="filters-toolbar">

                                <div class="filters-toolbar__item">
                                    <label for="SortTags" class="label--hidden">Filter</label>
                                    <select class="filters-toolbar__input filters-toolbar__input--filter"
                                        name="SortTags" id="SortTags" style="width: 98px;">


                                        <option value="">Filter</option>



                                        <option value="/collections/extras/apple-cutter">apple cutter</option>

                                        <option value="/collections/extras/chopper">chopper</option>

                                        <option value="/collections/extras/cooking">cooking</option>

                                        <option value="/collections/extras/cutter">cutter</option>

                                        <option value="/collections/extras/finger-glove">finger glove</option>

                                        <option value="/collections/extras/fruit">fruit</option>

                                        <option value="/collections/extras/garlic-peeler">garlic peeler</option>

                                        <option value="/collections/extras/gripper">gripper</option>

                                        <option value="/collections/extras/holder">holder</option>

                                        <option value="/collections/extras/kitchen">kitchen</option>

                                        <option value="/collections/extras/masher">masher</option>

                                        <option value="/collections/extras/oil-splash-guard">oil splash guard</option>

                                        <option value="/collections/extras/peeler">peeler</option>

                                        <option value="/collections/extras/protector">protector</option>

                                        <option value="/collections/extras/shredder">shredder</option>

                                        <option value="/collections/extras/slicer">slicer</option>

                                        <option value="/collections/extras/stripper">stripper</option>

                                        <option value="/collections/extras/turner">turner</option>

                                    </select>
                                </div>


                                <div class="filters-toolbar__item filters-toolbar__item--count">
                                    <span class="filters-toolbar__product-count">18 products</span>
                                </div>


                                <div class="filters-toolbar__item text-right"><label for="SortBy"
                                        class="label--hidden">Sort</label>
                                    <select name="SortBy" id="SortBy"
                                        class="filters-toolbar__input filters-toolbar__input--sort"
                                        style="width: 90px;">

                                        <option value="title-ascending" selected="selected">Sort</option>

                                        <option value="manual">Featured</option>



                                        <option value="title-ascending">Alphabetically, A-Z</option>


                                        <option value="title-descending">Alphabetically, Z-A</option>


                                        <option value="price-ascending">Price, low to high</option>


                                        <option value="price-descending">Price, high to low</option>


                                        <option value="created-descending">Date, new to old</option>


                                        <option value="created-ascending">Date, old to new</option>


                                    </select>
                                    <input id="DefaultSortBy" type="hidden" value="best-selling">
                                </div>

                            </div>
                        </div>
                    </div>

                </header>

                <div class="page-width" id="Collection">
                    <?php if (count($products) > 0) : ?>
                    <div class="grid grid--uniform grid--view-items">
                        <?php foreach ($products as $product) : ?>
                        <div class="grid__item grid__item--collection-template small--one-half medium-up--one-quarter">
                            <div class="grid-view-item">
                                <a class="grid-view-item__link grid-view-item__image-container"
                                    href="/products/single.php?product=<?php echo $product['id'] ?>">

                                    <style>
                                        @media screen and (min-width: 750px) {
                                            #ProductCardImage-collection-template-588623052858 {
                                                max-width: 250px;
                                                max-height: 250.0px;
                                            }

                                            #ProductCardImageWrapper-collection-template-588623052858 {
                                                max-width: 250px;
                                                max-height: 250.0px;
                                            }
                                        }

                                        @media screen and (max-width: 749px) {
                                            #ProductCardImage-collection-template-588623052858 {
                                                max-width: 600px;
                                                max-height: 750px;
                                            }

                                            #ProductCardImageWrapper-collection-template-588623052858 {
                                                max-width: 600px;
                                            }
                                        }
                                    </style>


                                    <div id="ProductCardImageWrapper-collection-template-588623052858"
                                        class="grid-view-item__image-wrapper js">
                                        <div style="padding-top:100.0%;">
                                            <img id="ProductCardImage-collection-template-588623052858"
                                                class="grid-view-item__image lazyautosizes lazyloaded"
                                                src="<?php echo $product['featured_image'] ?>"
                                                data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                                data-aspectratio="1.0" data-sizes="auto" alt="Steel Turner Kitchen"
                                                data-srcset="<?php echo $product['featured_image'] ?> 2048w"
                                                sizes="250px"
                                                srcset="<?php echo $product['featured_image'] ?> 2048w">
                                        </div>
                                    </div>

                                    <noscript>

                                        <img class="grid-view-item__image"
                                            src="<?php echo $product['featured_image'] ?>"
                                            alt="<?php echo $product['title'] ?>" style="max-width: 250.0px;">
                                    </noscript>

                                    <div class="h4 grid-view-item__title"><?php echo $product['title'] ?></div>

                                    <div class="grid-view-item__meta">
                                        <!-- snippet/product-price.liquid -->
                                        <span class="visually-hidden">Regular price</span>
                                        <span class="product-price__price"><?php echo $product['price'] ?></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>

    <?php include_once('../includes/footer.php'); ?>
</div>

<?php include_once('../includes/modals.php'); ?>