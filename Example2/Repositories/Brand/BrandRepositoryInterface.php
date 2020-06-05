<?php

namespace Example2\Repositories\Brand;

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
     * @return array|null
     */
    public function getById(int $id): ?array;

    /**
     * ��� ������
     * @return array|null
     */
    public function getAll(): array;

    /**
     * ��� ������, � ������� ���� ������
     * @return array|null
     */
    public function getAllHasGoods(): array;

    /**
     * ��� ������ ����������� �������� �����
     * @return array|null
     */
    public function getAllStm(): array;
}
