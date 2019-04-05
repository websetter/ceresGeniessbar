<?php

namespace GeniessBar\Containers;

use Ceres\Config\CeresConfig;
use IO\Services\ItemSearch\SearchPresets\TagItems;
use IO\Services\ItemSearch\Services\ItemSearchService;
use Plenty\Plugin\Templates\Twig;

class GeniessBarItemListContainer3
{
    public function call(Twig $twig, $arg):string
    {
        $tagList = [];

        /** @var CeresConfig $ceresConfig */
        $ceresConfig = pluginApp(CeresConfig::class);

        $listType = $ceresConfig->itemLists->list1Type;

        if($listType == 'tag_list')
        {
            /** @var ItemSearchService $itemSearchService */
            $itemSearchService = pluginApp( ItemSearchService::class );

            $itemSearchOptions = [
                'tagIds' => explode(',', $ceresConfig->itemLists->list1TagIds),
                'sorting' => $ceresConfig->itemLists->tagSorting
            ];

            $result = $itemSearchService->getResults([
                                                         'tagItems' => TagItems::getSearchFactory( $itemSearchOptions )
                                                     ]);

            if(count($result['tagItems']))
            {
                $tagList = $result['tagItems']['documents'];
            }
        }

        return $twig->render('GeniessBar::Containers.ItemLists.ItemList3', ["item" => $arg[0], "itemList" => $tagList]);
    }
}
