<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class FioDto implements FioInterface
{
    /** @var string Фамилия */
    private $surname;
    /** @var string Имя */
    private $name;
    /** @var string Отчество */
    private $patronymic;

    /**
     * @param string $surname
     * @param string $name
     * @param string $patronymic
     */
    public function __construct(string $surname, string $name, string $patronymic)
    {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getPatronymic(): string
    {
        return $this->patronymic;
    }

    /**
     * @return string
     */
    public function getResult(): string
    {
        return sprintf('%s %s %s', $this->getSurname(), $this->getName(), $this->getPatronymic());
    }

    /**
     * @param array $data
     * @return self
     */
    public static function toDto(array $data): DtoInterface
    {
        return new FioDto(
            (string)$data['surname'],
            (string)$data['name'],
            (string)$data['patronymic']
        );
    }

    /**
     * @param array $data
     * @return self
     */
    public static function fromString(string $data): DtoInterface
    {
        $parts = explode(' ', $data, 3);

        return new FioDto(
            @(string)$parts[0],
            @(string)$parts[1],
            @(string)$parts[2]
        );
    }
}