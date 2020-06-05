<?php

namespace Example3\Entites;

/**
 * @package Example3\Entites
 */
abstract class BaseEntity
{
    /**
     * Карта атрибутов, где ключ - поле в бд, значение - атрибут класса
     */
    abstract protected function getAttributesMap(): array;

    /**
     * @param array $arItem
     *
     * @return BaseEntity
     */
    public function setAttributesFromArray(array $arItem): self
    {
        foreach ($this->getAttributesMap() as $key => $attr) {
            if (isset($arItem[$key]) && property_exists($this, $attr)) {
                $this->{$attr} = $arItem[$key];
            }
        }
        return $this;
    }
}
