<?php

namespace Ztf\Settings;

/**
 * Класс Settings
 * @version 0.0.1
 * @package \Settings
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич. Все права защищены.
 * Запрещено для комерческого использования без соглосования с автором проекта
 */
class Settings {

    /**
     * Хранение настроек конфигурации;
     * @var array
     */
    private static Array $settings;

    /**
     * Получить объект настроек по его наименованию
     * @param string $settingsName Наименование настройки
     * @return self Текущий экземпляр класса Settings\Settings
     */
    public function get(string $settingsName): self
    {
        if (isset(self::$settings[$settingsName])) {
            return self::$settings[$settingsName];
        }
        return $this;
    }

    /**
     * Задать конфигурацию класса настроек
     * @param string $settingsName Наименование настройки
     * @param mixed $value Значение настройки
     * @return self Новый экземпляр класса Settings\Settings
     */
    public function set(string $settingsName, mixed $value): self
    {
        if (!isset(self::$settings[$settingsName])) {
            return $this->__setSettings($settingsName, $value);
        } else {
            $data = (array) self::$settings[$settingsName];
            if ($data !== $value) {
                return $this->__setSettings($settingsName, $value);
            }
            return self::$settings[$settingsName];
        }
    }

    /**
     * Задать конфигурацию класса настроек
     * @param string $settingsName Наименование настройки
     * @param mixed $value Значение настройки
     * @return self Текущий или новый экземпляр класса Settings\Settings
     */
    private function __setSettings(string $settingsName, mixed $value): self
    {
        if (is_array($value) OR is_object($value)) {
            $data = new self();
            foreach ($value as $key => $val) {
                $data->$key = $val;
            }
            self::$settings[$settingsName] = $data;
            return self::$settings[$settingsName];
        } else {
            self::$settings[$settingsName] = $value;
        }
        return $this;
    }

    /**
     * Добавить свойство
     * @param string $propertyName Наименование свойства
     * @param mixed $value значение свойства
     * @return self Текущий экземпляр класса Settings\Settings
     */
    public function add(string $propertyName, mixed $value): self
    {
        $this->$propertyName = $value;
        return $this;
    }

    /**
     * Удалить свойство
     * @param string $propertyName наименование свойства
     * @return self Текущий экземпляр класса Settings\Settings
     */
    public function del(string $propertyName): self
    {
        if (isset($this->$propertyName)) {
            unset($this->$propertyName);
        }
        return $this;
    }

}
