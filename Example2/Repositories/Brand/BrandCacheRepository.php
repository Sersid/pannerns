<?php

namespace Example2\Repositories\Brand;

use Example2\Repositories\BaseCacheRepository;
use Exception;

/**
 * @package Example1\Repositories
 */
class BrandCacheRepository extends BaseCacheRepository implements BrandRepositoryInterface
{
    private BrandRepositoryInterface $brandDbRepository;

    public function __construct()
    {
        $this->brandDbRepository = new BrandDbRepository();
    }

    /**
     * @inheritDoc
     */
    public function getById(int $id): ?array
    {
        return $this->getCache(3600, $id, fn() => $this->brandDbRepository->getById($id));
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
        return $this->getCache(3600, 'all-has-goods', fn() => $this->brandDbRepository->getAllHasGoods());
    }

    /**
     * @inheritDoc
     */
    public function getAllStm(): array
    {
        // ...
        $arResult = $this->brandDbRepository->getAllStm();
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
