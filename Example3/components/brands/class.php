<?php

use Example3\Repositories\Brand\BrandRepositoryInterface;
use Example3\Repositories\BrandRepository;

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
        $this->arResult['BRANDS'] = $this->repository->getAll();
        // ...
    }
}
