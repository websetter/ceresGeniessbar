<?php

namespace GeniessBar\Containers;

use Plenty\Plugin\Templates\Twig;

class GeniessBarItemListContainer1
{
    public function call(Twig $twig, $arg):string
    {
        return $twig->render('GeniessBar::Containers.ItemLists.ItemList1', ["item" => $arg[0]]);
    }
}
