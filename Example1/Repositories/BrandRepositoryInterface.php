<?php

namespace Example1\Repositories;

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
     * @return array
     */
    public function getAll(): array;

    /**
     * ��� ������, � ������� ���� ������
     * @return array
     */
    public function getAllHasGoods(): array;

    /**
     * ��� ������ ����������� �������� �����
     * @return array
     */
    public function getAllHasStm(): array;
}
