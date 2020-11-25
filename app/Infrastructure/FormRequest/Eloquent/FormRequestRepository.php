<?php

namespace Infrastructure\FormRequest\Eloquent;

use Domain\FormRequest\DataTransferObjects\FormRequestData;
use Domain\FormRequest\Repositories\FormRequestRepository as FormRequestRepositoryInterface;
use Domain\FormRequest\Models\FormRequest;

/**
 * Class FormRequestRepository
 * @package Infrastructure\FormRequest\Eloquent
 */
class FormRequestRepository implements FormRequestRepositoryInterface
{
    /**
     * @param FormRequest $formRequest
     * @return FormRequestData
     */
    private function hydrateFormRequest(FormRequest $formRequest)
    {
        return new FormRequestData([
            'name' => $formRequest->name,
            'phone' => $formRequest->phone,
            'message' => $formRequest->message,
        ]);
    }

    /**
     * Create a new form request to database.
     *
     * @param FormRequestData $formRequestData
     * @return FormRequestData
     */
    public function create(FormRequestData $formRequestData): FormRequestData
    {
        $formRequest = FormRequest::create($formRequestData->toArray());

        return $this->hydrateFormRequest($formRequest);
    }
}
