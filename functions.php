<?php

if (!defined('ABSPATH')) {
   exit;
}

new NutriTrack\Core\EnqueueScripts();
new NutriTrack\Core\TemplateHierarchy();
new NutriTrack\Core\ThemeSupport();
new NutriTrack\Core\WP_Head();
