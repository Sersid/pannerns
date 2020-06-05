<?php

namespace Example2\Repositories\Brand;

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
     * @return array|null
     */
    public function getById(int $id): ?array;

    /**
     * Все бренды
     * @return array|null
     */
    public function getAll(): array;

    /**
     * Все бренды, у которых есть товары
     * @return array|null
     */
    public function getAllHasGoods(): array;

    /**
     * Все бренды собственной торговой марки
     * @return array|null
     */
    public function getAllStm(): array;
}
