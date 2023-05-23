<?php

namespace Igaster\LaravelTheme\Events;

use Igaster\LaravelTheme\Theme;

class ThemeChanged
{

    public function __construct(
        public readonly Theme $theme
    ) {
    }

}