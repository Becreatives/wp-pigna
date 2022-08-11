<?php
$image = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()), 'full');
if ($image) : ?>
    <header class="header-page">
        <img src="<?= $image; ?>"/>
        <div class="grid-container">
            <div class="content">
                <?= htmlspecialchars_decode(get_the_content()); ?>
            </div>
        </div>
    </header>
<?php endif; ?>
