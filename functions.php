<?php

if (!defined('ABSPATH')) {
   exit;
}

include get_template_directory() . '/vendor/autoload.php';

new NutriTrack\Core\EnqueueScripts();
new NutriTrack\Core\TemplateHierarchy();
new NutriTrack\Core\ThemeSupport();
new NutriTrack\Core\WP_Head();
