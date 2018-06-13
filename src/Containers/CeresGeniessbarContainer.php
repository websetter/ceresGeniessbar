<?php

namespace CeresGeniessbar\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresGeniessbarContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('CeresGeniessbar::Stylesheet');
    }
}
