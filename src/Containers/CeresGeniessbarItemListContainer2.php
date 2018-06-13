<?php

namespace CeresGeniessbar\Containers;

use Plenty\Plugin\Templates\Twig;

class CeresGeniessbarItemListContainer2
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('CeresGeniessbar::Containers.ItemLists.ItemList2', ["item" => $arg[0]]);
    }
}
