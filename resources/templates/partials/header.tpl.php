<?php
$slides = get_field('slides');
?>
<header class="header-page">
    <div id="page-slider" class="orbit page-slider"
         data-timer-delay="5000" role="region" aria-label="Pigna Slider"
         data-orbit
         data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;">
        <div class="orbit-wrapper">
            <ul class="orbit-container">
                <?php foreach ($slides as $slide) {
                    $image = $slide['image'];
                    $imageMB = $slide['imageMobile'];
                    $title = $slide['title'];
                    $color = $slide['titleColor'];
                    $imageTitle = $slide['titleImage'];
                    $content = $slide['content'];
                    $contentColor = $slide['contentColor'];
                    $buttons = $slide['buttons'];
                    $gallery = $slide['gallery'];
                    ?>
                    <li class="orbit-slide">
                        <figure class="orbit-figure">
                            <img src="<?= $image['url']; ?>" class='desktop bg-image'>
                            <img src="<?= $imageMB['url']; ?>" class='mobile bg-image'>
                            <div class="grid-container">
                                <div class="grid-x align-middle" style="width: 100%">
                                    <div class="cell small-12 medium-6 large-5">
                                        <div class="__wrapper">
                                            <?php if (!$imageTitle) : ?><h1
                                                style="color: #<?= $color ? $color : '000000'; ?>"><?= htmlspecialchars_decode($title) ?></h1><?php endif; ?>
                                            <?php if ($imageTitle) : ?>  <img src="<?= $imageTitle['url']; ?>"
                                                                              class="title-logo"><?php endif; ?>
                                            <?php if ($content) : ?>
                                                <div class="__content"
                                                     style=" color: #<?= $contentColor ? $contentColor : '000000'; ?>">
                                                    <?= htmlspecialchars_decode($content); ?>
                                                    <?php if($gallery) : ?>
                                                    <ul class="list-gallery">
                                                        <?php foreach($gallery as $image) : ?>
                                                            <li> <img width='150' src="<?= $image['url'] ?>" class='mx-auto'></li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class='actionbox'>
                                                <?php foreach ($buttons as $button) : ?>
                                                    <a href="<?= $button['url'] ?>" target='_blank' class='btn'
                                                       style="background-color: #<?= $button['bgColor'] ? $button['bgColor'] : '000000'; ?>; color: #<?= $button['textColor'] ? $button['textColor'] : 'ffffff'; ?>">
                                                        <?= htmlspecialchars_decode($button['label']); ?>
                                                    </a>
                                                <?php endforeach; ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <?php if (count($slides) > 1) : ?>
            <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>
                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-left"
                     class="svg-inline--fa fa-chevron-left fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 256 512">
                    <path fill="currentColor"
                          d="M238.475 475.535l7.071-7.07c4.686-4.686 4.686-12.284 0-16.971L50.053 256 245.546 60.506c4.686-4.686 4.686-12.284 0-16.971l-7.071-7.07c-4.686-4.686-12.284-4.686-16.97 0L10.454 247.515c-4.686 4.686-4.686 12.284 0 16.971l211.051 211.05c4.686 4.686 12.284 4.686 16.97-.001z"></path>
                </svg>
            </button>
            <button class="orbit-next"><span class="show-for-sr">Next Slide</span>
                <svg aria-hidden="true" focusable="false" data-prefix="fal" data-icon="chevron-right"
                     class="svg-inline--fa fa-chevron-right fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg"
                     viewBox="0 0 256 512">
                    <path fill="currentColor"
                          d="M17.525 36.465l-7.071 7.07c-4.686 4.686-4.686 12.284 0 16.971L205.947 256 10.454 451.494c-4.686 4.686-4.686 12.284 0 16.971l7.071 7.07c4.686 4.686 12.284 4.686 16.97 0l211.051-211.05c4.686-4.686 4.686-12.284 0-16.971L34.495 36.465c-4.686-4.687-12.284-4.687-16.97 0z"></path>
                </svg>
            </button>
            <nav class="orbit-bullets">
                <?php foreach ($slides as $key => $slide) { ?>
                    <button class="<?= $key === 0 ? 'is-active' : '' ?>" data-slide="<?= $key; ?>"></button>
                <?php } ?>

            </nav>
        <?php endif; ?>
    </div>

    <div class="grid-container">
        <div class="content">
            <?= htmlspecialchars_decode(get_the_content()); ?>
        </div>
    </div>
</header>

