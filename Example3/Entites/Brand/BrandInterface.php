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
     * �������� ������
     * @return string
     */
    public function getName(): string;

    /**
     * �������� ����������� �������� ������
     * @return bool
     */
    public function isSTM(): bool;
}
