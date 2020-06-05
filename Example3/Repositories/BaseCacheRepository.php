<?php

namespace Example3\Repositories;

use Closure;
use CPHPCache;

/**
 * Class BaseDbRepository
 */
abstract class BaseCacheRepository
{
    /**
     * @param int     $ttl
     * @param string  $key
     * @param Closure $callback
     *
     * @return mixed
     */
    public function getCache(int $ttl, string $key, Closure $callback)
    {
        $obCache = new CPHPCache;
        if ($obCache->InitCache($ttl, $key, $this->dir())) {
            $arResult = $obCache->GetVars();
        } else {
            $arResult = $callback();
            if ($obCache->StartDataCache()) {
                $obCache->EndDataCache($arResult);
            }
        }
        return $arResult;
    }

    /**
     * Директория с кешем
     * @return string
     */
    abstract protected function dir(): string;
}
