<?php

namespace GeniessBar\Containers;

use Plenty\Plugin\Templates\Twig;

class GeniessBarItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('GeniessBar::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
