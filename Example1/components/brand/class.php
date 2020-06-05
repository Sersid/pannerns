<?php

use Example1\Repositories\BrandRepository;

class BrandComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        // ...
        $id = (int)$_GET['id'];
        $arBrand = (new BrandRepository())->getById($id);

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
