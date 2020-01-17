<?php

namespace GeniessBar\Containers;

use Plenty\Plugin\Templates\Twig;

class GeniessBarSlider
{
    public function call(Twig $twig):string
    {
        return $twig->render('GeniessBar::Components.Slider');
    }
}
