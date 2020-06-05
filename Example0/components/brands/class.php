<?php

use Opt\HighloadBlock\Brands;

class BrandComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        // ...
        $obCache = new \CPHPCache;
        if ($obCache->InitCache(3600, 'all-has-goods', '/brands')) {
            $arBrands = $obCache->GetVars();
        } else {
            $arBrands = Brands::query()
                ->setSelect(['ID', 'UF_NAME', /* ... */])
                //...
                ->exec()
                ->fetchAll();
            if ($obCache->StartDataCache()) {
                $obCache->EndDataCache($arBrands);
            }
        }
        $this->arResult['BRANDS'] = $arBrands;
        // ...
    }
}
