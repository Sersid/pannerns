<?php

namespace Example2\Repositories;

use Example2\Repositories\Brand\BrandCacheRepository;
use Example2\Repositories\Brand\BrandDbRepository;
use Example2\Repositories\Brand\BrandRepositoryInterface;

/**
 * @package Example2\Repositories
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
    public function getById(int $id): ?array
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
