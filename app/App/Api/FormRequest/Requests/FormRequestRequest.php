<?php

namespace App\Api\FormRequest\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class FormRequestRequest
 * @package App\Web\Requests
 */
class FormRequestRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|phone:RU',
            'message' => 'required|string',
        ];
    }
}
