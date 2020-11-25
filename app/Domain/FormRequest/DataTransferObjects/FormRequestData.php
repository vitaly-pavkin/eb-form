<?php

namespace Domain\FormRequest\DataTransferObjects;

use Propaganistas\LaravelPhone\PhoneNumber;
use Spatie\DataTransferObject\DataTransferObject;

/**
 * Class FormRequestData
 * @package Domain\DataTransferObjects
 */
class FormRequestData extends DataTransferObject
{
    /**
     * @var string
     */
    public string $name;

    /**
     * @var \Propaganistas\LaravelPhone\PhoneNumber
     */
    public PhoneNumber $phone;

    /**
     * @var string
     */
    public string $message;
}
