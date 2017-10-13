<?php

namespace unapi\dadata;

use unapi\dadata\dto\DadataAddressDto;
use unapi\dadata\dto\DadataBirthDateDto;
use unapi\dadata\dto\DadataVehicleDto;
use unapi\dadata\dto\DadataEmailDto;
use unapi\dadata\dto\DadataFioDto;
use unapi\dadata\dto\DadataPassportDto;
use unapi\dadata\dto\DadataPhoneDto;
use unapi\interfaces\DtoInterface;

class DadataResponseFabric implements DtoInterface
{
    public static function toDto(array $data): DtoInterface
    {
        if (array_key_exists('email', $data))
            return DadataEmailDto::toDto($data);
        elseif (array_key_exists('country', $data))
            return DadataAddressDto::toDto($data);
        elseif (array_key_exists('phone', $data))
            return DadataPhoneDto::toDto($data);
        elseif (array_key_exists('series', $data))
            return DadataPassportDto::toDto($data);
        elseif (array_key_exists('surname', $data))
            return DadataFioDto::toDto($data);
        elseif (array_key_exists('birthdate', $data))
            return DadataBirthDateDto::toDto($data);
        elseif (array_key_exists('model', $data))
            return DadataVehicleDto::toDto($data);

        throw new \InvalidArgumentException('Unknown response format');
    }
}