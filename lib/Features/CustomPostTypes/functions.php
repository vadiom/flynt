<?php

# TODO reorganize and rename
require_once __DIR__ . '/CustomPostTypeRegister.php';

use Flynt\Feature;
use Flynt\Features\CustomPostTypes\CustomPostTypeRegister;

$dir = Feature::getOptions('flynt-custom-post-types')[0];
CustomPostTypeRegister::fromDirectory($dir);
