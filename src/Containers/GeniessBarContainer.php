<?php

namespace GeniessBar\Containers;

use Plenty\Plugin\Templates\Twig;

class GeniessBarContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('GeniessBar::Stylesheet');
    }
}