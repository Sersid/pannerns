<?php

namespace Example1\Repositories;

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
     * @return array
     */
    public function getAll(): array;

    /**
     * Все бренды, у которых есть товары
     * @return array
     */
    public function getAllHasGoods(): array;

    /**
     * Все бренды собственной торговой марки
     * @return array
     */
    public function getAllHasStm(): array;
}
