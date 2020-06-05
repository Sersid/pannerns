<?php

namespace Example3\Entites\Brand;

use Example3\Entites\BaseEntity;

/**
 * Class Brand
 * @package Example3\Entites
 */
class Brand extends BaseEntity implements BrandInterface
{
    private int $id;
    private string $name;
    private int $stm;

    /**
     * @inheritDoc
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function isSTM(): bool
    {
        return $this->stm == 1;
    }

    /**
     * @inheritDoc
     */
    protected function getAttributesMap(): array
    {
        return [
            'ID' => 'id',
            'UF_NAME' => 'name',
            'UF_STM' => 'stm',
            // ...
        ];
    }
}
