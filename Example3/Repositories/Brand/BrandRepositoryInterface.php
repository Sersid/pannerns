<?php

namespace Example3\Repositories\Brand;

use Example3\Entites\Brand\BrandInterface;

/**
 * @package Example1\Repositories
 */
interface BrandRepositoryInterface
{
    /**
     * Бренд по ID
     *
     * @param int $id
     *
     * @return BrandInterface|null
     */
    public function getById(int $id): ?BrandInterface;

    /**
     * Все бренды
     * @return BrandInterface[]
     */
    public function getAll(): array;

    /**
     * Все бренды, у которых есть товары
     * @return BrandInterface[]
     */
    public function getAllHasGoods(): array;

    /**
     * Все бренды собственной торговой марки
     * @return BrandInterface[]
     */
    public function getAllStm(): array;
}
