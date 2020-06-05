<?php

namespace Example3\Repositories;

use Example3\Entites\Brand\BrandInterface;
use Example3\Repositories\Brand\BrandCacheRepository;
use Example3\Repositories\Brand\BrandDbRepository;
use Example3\Repositories\Brand\BrandRepositoryInterface;

/**
 * BrandRepository > BrandCachedRepository > BaseDbRepository
 * @package Example3\Repositories
 */
class BrandRepository implements BrandRepositoryInterface
{
    private BrandRepositoryInterface $dbRepository;
    private BrandRepositoryInterface $cacheRepository;

    public function __construct()
    {
        $this->dbRepository = new BrandDbRepository();
        $this->cacheRepository = new BrandCacheRepository();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?BrandInterface
    {
        return $this->cacheRepository->getById($id);
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        // Не нужен кеш
        return $this->dbRepository->getAll();
    }

    /**
     * @inheritDoc
     */
    public function getAllHasGoods(): array
    {
        return $this->cacheRepository->getAllHasGoods();
    }

    /**
     * @inheritDoc
     */
    public function getAllStm(): array
    {
        return $this->cacheRepository->getAllStm();
    }
}
