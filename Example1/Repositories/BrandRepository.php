<?php

namespace Example1\Repositories;

use Opt\HighloadBlock\Brands;

/**
 * @package Example1\Repositories
 */
class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{
    /**
     * @inheritDoc
     */
    public function getById(int $id): ?array
    {
        // cache
        $arBrand = $this->query()
            ->setSelect(['ID', 'UF_NAME', /* ... */])
            ->setFilter(['=ID' => $id])
            ->exec()
            ->fetch();
        // cache
        return $arBrand;
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        return $this->query()
            ->setSelect(['ID', 'UF_NAME', /* ... */])
            ->exec()
            ->fetchAll();
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
    public function getAllHasStm(): array
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
