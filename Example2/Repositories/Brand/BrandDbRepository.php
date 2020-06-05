<?php

namespace Example2\Repositories\Brand;

use Example2\Repositories\BaseDbRepository;
use Opt\HighloadBlock\Brands;

/**
 * @package Example1\Repositories
 */
class BrandDbRepository extends BaseDbRepository implements BrandRepositoryInterface
{
    /**
     * @inheritDoc
     */
    protected function table(): string
    {
        return Brands::class;
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?array
    {
        return $this->query()
            ->setSelect(['ID', 'UF_NAME', /* ... */])
            ->setFilter(['=ID' => $id])
            ->exec()
            ->fetch();
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
    public function getAllStm(): array
    {
        // ...
        $query = $this->query()
            ->setFilter(['UF_STM' => 1]);
        // ....
        return [];
    }
}
