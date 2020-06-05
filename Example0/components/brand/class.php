<?php

use Opt\HighloadBlock\Brands;

class BrandComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        // ...
        $id = (int)$_GET['id'];
        $obCache = new CPHPCache;
        if ($obCache->InitCache(3600, $id, '/brands')) {
            $arBrand = $obCache->GetVars();
        } else {
            $arBrand = Brands::query()
                ->setSelect(['ID', 'UF_NAME', /* ... */])
                ->setFilter(['=ID' => $id, ''])
                ->exec()
                ->fetch();
            if ($obCache->StartDataCache()) {
                $obCache->EndDataCache($arBrand);
            }
        }

        if ($arBrand['UF_STM'] == 1) {
            // ...
        }

        if (strpos($arBrand['UF_NAME'], '')) {
            // ...
        }

        $this->arResult['BRAND'] = $arBrand;
        // ...
    }
}
