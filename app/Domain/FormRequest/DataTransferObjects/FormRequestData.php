<?php

namespace Domain\FormRequest\DataTransferObjects;

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
     * @var string
     */
    public string $phone;

    /**
     * @var string
     */
    public string $message;
}
