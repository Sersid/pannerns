<?php

namespace Example3\Entites\Brand;

/**
 * @package Example3\Entites
 */
interface BrandInterface
{
    /**
     * @return int
     */
    public function getId(): int;

    /**
     * Название бренда
     * @return string
     */
    public function getName(): string;

    /**
     * Является собственной торговой маркой
     * @return bool
     */
    public function isSTM(): bool;
}
