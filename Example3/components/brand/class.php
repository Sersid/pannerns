<?php

use Example3\Repositories\Brand\BrandRepositoryInterface;
use Example3\Repositories\BrandRepository;

/**
 * @property $arResult
 */
class BrandComponent extends CBitrixComponent
{
    private BrandRepositoryInterface $repository;

    public function __construct(BrandRepositoryInterface  $repository)
    {
        // BrandRepositoryInterface -> BrandRepository
        $this->repository = $repository;
    }

    public function executeComponent()
    {
        // ...
        $id = (int) $_GET['id'];
        $obBrand = $this->repository->getById($id);

        if ($obBrand->isSTM()) {
            // ...
        }

        if (strpos($obBrand->getName(), '')) {
            // ...
        }

        $this->arResult['BRAND'] = $obBrand;
        // ...
    }
}
