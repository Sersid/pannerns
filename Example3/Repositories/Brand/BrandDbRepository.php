<?php

namespace Example3\Repositories\Brand;

use Example3\Entites\Brand\Brand;
use Example3\Entites\Brand\BrandInterface;
use Example3\Repositories\BaseDbRepository;
use Opt\HighloadBlock\Brands;

/**
 * @package Example1\Repositories
 */
class BrandDbRepository extends BaseDbRepository implements BrandRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getById(int $id): ?BrandInterface
    {
        $arBrand = $this->query()
            ->setSelect(['ID', 'UF_NAME', /* ... */])
            ->setFilter(['=ID' => $id])
            ->exec()
            ->fetch();
        if (empty($arBrand)) {
            return null;
        } else {
            return (new Brand())->setAttributesFromArray($arBrand);
        }
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        $arBrands = $this->query()
            ->setSelect(['ID', 'UF_NAME', /* ... */])
            ->exec()
            ->fetchAll();
        $arResult = [];
        foreach ($arBrands as $arBrand) {
            $arResult[] = (new Brand())->setAttributesFromArray($arBrand);
        }
        return $arResult;
    }

    /**
     * @inheritDoc
     */
    public function getAllHasGoods(): array
    {
        // ...
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getAllStm(): array
    {
        // ...
        $query = $this->query()
            ->setFilter(['UF_STM' => 1]);
        // ....
        return [];
    }

    /**
     * @inheritDoc
     */
    protected function table(): string
    {
        return Brands::class;
    }
}
