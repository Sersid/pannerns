<?php

namespace Example3\Repositories\Brand;

use Example3\Entites\Brand\BrandInterface;

/**
 * @package Example1\Repositories
 */
interface BrandRepositoryInterface
{
    /**
     * ����� �� ID
     *
     * @param int $id
     *
     * @return BrandInterface|null
     */
    public function getById(int $id): ?BrandInterface;

    /**
     * ��� ������
     * @return BrandInterface[]
     */
    public function getAll(): array;

    /**
     * ��� ������, � ������� ���� ������
     * @return BrandInterface[]
     */
    public function getAllHasGoods(): array;

    /**
     * ��� ������ ����������� �������� �����
     * @return BrandInterface[]
     */
    public function getAllStm(): array;
}
