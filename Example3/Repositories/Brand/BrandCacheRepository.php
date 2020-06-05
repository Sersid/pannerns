<?php

namespace Example3\Repositories\Brand;

use Example3\Entites\Brand\BrandInterface;
use Example3\Repositories\BaseCacheRepository;
use Exception;

/**
 * @package Example1\Repositories
 */
class BrandCacheRepository extends BaseCacheRepository implements BrandRepositoryInterface
{
    private BrandRepositoryInterface $repository;

    public function __construct()
    {
        $this->repository = new BrandDbRepository();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?BrandInterface
    {
        return $this->getCache(3600, $id, fn() => $this->repository->getById($id));
    }

    /**
     * !!! Не нужно кешировать
     * @inheritDoc
     * @throws Exception
     */
    public function getAll(): array
    {
        throw new Exception('Я не умею кешировать данный метод :(');
    }

    /**
     * @inheritDoc
     */
    public function getAllHasGoods(): array
    {
        return $this->getCache(3600, 'all-has-goods', fn() => $this->repository->getAllHasGoods());
    }

    /**
     * @inheritDoc
     */
    public function getAllStm(): array
    {
        // ...
        $arResult = $this->repository->getAllStm();
        // ...
        return $arResult;
    }

    /**
     * @inheritDoc
     */
    protected function dir(): string
    {
        return 'brands';
    }
}
