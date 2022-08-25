<?php

namespace traits;

/**
 * Трейт magick
 * @version 0.0.1
 * @package Settings\traits
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
trait magick {

    /**
     * Магический метод
     * @return string Дамп текущего экземпляра класса Settings\Settings
     */
    public function __toString(): string
    {
        return print_r($this, true);
    }

    /**
     * Магический метод
     * @return self Текущий экземпляр класса Settings\Settings
     */
    public function __clone(): self
    {
        return $this;
    }

    /**
     * Магический метод
     * @return array массив для сериализации
     */
    public function __serialize(): array
    {
        return (array) $this;
    }

    /**
     * Магический метод
     * @param array $data массив для десерализации
     * @return self Сериализованый экземпляр класса Settings\Settings
     */
    public function __unserialize(array $data): self
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

}
