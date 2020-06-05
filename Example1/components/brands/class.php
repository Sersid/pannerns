<?php

use Example1\Repositories\BrandRepository;

class BrandComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        // ...
        $this->arResult['BRANDS'] = (new BrandRepository())->getAllHasStm();
        // ...
    }
}
