<?php

namespace unapi\dadata\dto;

use unapi\interfaces\DtoInterface;

class DadataFioDto implements DadataFioInterface
{
    /** @var string Исходная серия и номер одной строкой */
    private $source;
    /** @var FioInterface Стандартизованное ФИО */
    private $result;
    /** @var FioInterface ФИО в родительном падеже (кого?) */
    private $result_genitive;
    /** @var FioInterface ФИО в дательном падеже (кому?) */
    private $result_dative;
    /** @var FioInterface ФИО в творительном падеже (кем?) */
    private $result_ablative;
    /** @var string Пол */
    private $gender;
    /** @var int Код проверки */
    private $qc;

    /**
     * @param string $source
     * @param FioInterface $result
     * @param int $qc
     */
    public function __construct(string $source, FioInterface $result, int $qc)
    {
        $this->source = $source;
        $this->result = $result;
        $this->qc = $qc;
    }

    /**
     * @param array $data
     * @return static
     */
    public static function toDto(array $data): DtoInterface
    {
        return (new DadataFioDto(
            $data['source'],
            new FioDto(
                (string)$data['surname'],
                (string)$data['name'],
                (string)$data['patronymic']
            ),
            (int)$data['qc']
        ))
            ->setResultGenitive(FioDto::fromString($data['result_genitive']))
            ->setResultDative(FioDto::fromString($data['result_dative']))
            ->setResultAblative(FioDto::fromString($data['result_ablative']))
            ->setGender($data['gender']);
    }

    /**
     * @return string
     */
    public function getSource(): string
    {
        return $this->source;
    }

    /**
     * @return FioInterface
     */
    public function getResult(): FioInterface
    {
        return $this->result;
    }

    /**
     * @return int
     */
    public function getQc(): int
    {
        return $this->qc;
    }

    /**
     * @return FioInterface
     */
    public function getResultGenitive(): FioInterface
    {
        return $this->result_genitive;
    }

    /**
     * @param FioInterface $result_genitive
     * @return DadataFioDto
     */
    public function setResultGenitive(FioInterface $result_genitive): DadataFioDto
    {
        $this->result_genitive = $result_genitive;
        return $this;
    }

    /**
     * @return FioInterface
     */
    public function getResultDative(): FioInterface
    {
        return $this->result_dative;
    }

    /**
     * @param FioInterface $result_dative
     * @return DadataFioDto
     */
    public function setResultDative(FioInterface $result_dative): DadataFioDto
    {
        $this->result_dative = $result_dative;
        return $this;
    }

    /**
     * @return FioInterface
     */
    public function getResultAblative(): FioInterface
    {
        return $this->result_ablative;
    }

    /**
     * @param FioInterface $result_ablative
     * @return DadataFioDto
     */
    public function setResultAblative(FioInterface $result_ablative): DadataFioDto
    {
        $this->result_ablative = $result_ablative;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return DadataFioDto
     */
    public function setGender(string $gender): DadataFioDto
    {
        $this->gender = $gender;
        return $this;
    }
}