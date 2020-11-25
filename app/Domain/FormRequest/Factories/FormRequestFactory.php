<?php

namespace Domain\FormRequest\Factories;

use App\Api\FormRequest\Requests\FormRequestRequest;
use Domain\FormRequest\DataTransferObjects\FormRequestData;

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
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);
    }
}
