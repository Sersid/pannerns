<?php

use Example2\Repositories\Brand\BrandRepositoryInterface;
use Example2\Repositories\BrandRepository;

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
