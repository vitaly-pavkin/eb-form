<?php

namespace Domain\FormRequest\Factories;

use App\Api\FormRequest\Requests\FormRequestRequest;
use Domain\FormRequest\DataTransferObjects\FormRequestData;
use Propaganistas\LaravelPhone\PhoneNumber;

/**
 * Class FormRequestFactory
 * @package Domain\FormRequest\Factories
 */
class FormRequestFactory
{
    /**
     * Build a new form request from request.
     *
     * @param FormRequestRequest $request
     * @return FormRequestData
     */
    public static function fromRequest(FormRequestRequest $request): FormRequestData
    {
        return new FormRequestData([
            'name' => $request->input('name'),
            'phone' => PhoneNumber::make($request->input('phone'), 'RU'),
            'message' => $request->input('message'),
        ]);
    }
}
