<?php

namespace CeresGeniessbar\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresGeniessbarItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresGeniessbar::Containers.ItemLists.ItemList3', ["item" => $arg[0]]);
    }
}
