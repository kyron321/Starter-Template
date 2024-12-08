<?php
$favicon = get_field('brand_favicon', 'option');
if ($favicon) :
    $favicon_url = $favicon['url'];
    echo '<link rel="icon" href="' . esc_url($favicon_url) . '" type="image/x-icon" />';
endif;
