<?php

namespace GeniessBar\Containers;

use Plenty\Plugin\Templates\Twig;

class GeniessBarItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('GeniessBar::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}
