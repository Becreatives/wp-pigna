<?php
global $post;
$productList = get_field('productList');
$args = array(
    'post_type' => 'product', 'posts_per_page' => -1, 'post_status' => 'publish',
    'meta_key'        => 'referencePage',
    'meta_value'    => $post->ID
);
$products = get_posts($args);
?>
<div class="grid-container productList full">
    <div class="grid-x">
        <?php
        foreach ($productList as $key => $product) :
            $gallery = $product['gallery'];
        ?>
            <div class="cell large-3 medium-6 small-12  align-middle">
                <div class="--card">
                    <div class="slider-product">
                        <div id="product-slider-<?= $key; ?>" class="orbit product-slider product-slider-<?= $key; ?>" role="region" data-timer-delay="5000" aria-label="Product Slider" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                            <div class="orbit-wrapper">
                                <ul class="orbit-container">
                                    <?php foreach ($gallery as $item) : ?>
                                        <li class="orbit-slide">
                                            <figure>
                                                <img src="<?= $item['sizes']['large']; ?>" />
                                            </figure>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php if (count($gallery) > 1) { ?>
                                <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                        <path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                    </svg>
                                </button>
                                <button class="orbit-next"><span class="show-for-sr">Next Slide</span>
                                    <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                        <path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                    </svg>
                                </button>
                                <nav class="orbit-bullets">
                                    <?php foreach ($gallery as $key => $item) : ?>
                                        <button class="<?= $key === 0 ? 'is-active' : '' ?>" data-slide="<?= $key; ?>"></button>
                                    <?php endforeach; ?>
                                </nav>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="content">
                        <h4><?= htmlspecialchars_decode($product['title']); ?></h4>
                        <div class="abstract">
                            <?= htmlspecialchars_decode($product['content']); ?>
                        </div>
                        <?php if (isset($product['url'])) : ?>
                            <a href="<?= $product['url']; ?>" target="_blank" class="btn<?= $product['url'] === '' ? ' disabled' : '' ?>">
                                <?= $product['label_bottone'] ? $product['label_bottone'] : _e('Shop now', $textdomain); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        foreach ($products as $key => $product) :
            $gallery = get_field('gallery', $product->ID);
            $title = htmlspecialchars_decode($product->post_title);
            $content = get_field('content', $product->ID);
            $url = get_field('url', $product->ID);
            $label = get_field('label', $product->ID);
        ?>
            <div class="cell large-3 medium-6 small-12  align-middle">
                <div class="--card">
                    <div class="slider-product">
                        <div id="product-slider-n<?= $key; ?>" class="orbit product-slider product-slider-n<?= $key; ?>" role="region" data-timer-delay="5000" aria-label="Product Slider" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
                            <div class="orbit-wrapper">
                                <ul class="orbit-container">
                                    <?php foreach ($gallery as $item) : ?>
                                        <li class="orbit-slide">
                                            <figure>
                                                <img src="<?= $item['sizes']['large']; ?>" />
                                            </figure>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                    <path fill="currentColor" d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                                </svg>
                            </button>
                            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>
                                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
                                    <path fill="currentColor" d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                                </svg>
                            </button>
                            <nav class="orbit-bullets">
                                <?php foreach ($gallery as $key => $item) : ?>
                                    <button class="<?= $key === 0 ? 'is-active' : '' ?>" data-slide="<?= $key; ?>"></button>
                                <?php endforeach; ?>
                            </nav>
                        </div>
                    </div>
                    <div class="content">
                        <h4><?= $title ?></h4>
                        <div class="abstract">
                            <?= htmlspecialchars_decode($content); ?>
                        </div>
                        <?php if (isset($url)) : ?>
                            <a href="<?= $url ?>" target="_blank" class="btn">
                                <?= $label ? $label : _e('Shop now', $textdomain); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>

</div>