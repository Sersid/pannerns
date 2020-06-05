<?php

namespace Example2\Repositories;

use Main\Query;

/**
 * Class BaseDbRepository
 */
abstract class BaseDbRepository
{
    /**
     * @return Query
     */
    public function query(): Query
    {
        $table = $this->table();
        return $table::query();
    }

    /**
     * @return string
     */
    abstract protected function table(): string;
}
