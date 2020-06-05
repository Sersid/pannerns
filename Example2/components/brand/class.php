<?php

use Example2\Repositories\Brand\BrandRepositoryInterface;
use Example2\Repositories\BrandRepository;

/**
 * @property $arResult
 */
class BrandComponent extends CBitrixComponent
{
    private BrandRepositoryInterface $repository;

    public function __construct()
    {
        $this->repository = new BrandRepository();
    }

    public function executeComponent()
    {
        // ...
        $id = (int)$_GET['id'];
        $arBrand = $this->repository->getById($id);

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
