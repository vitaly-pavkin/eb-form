<?php

namespace Infrastructure\FormRequest\Storage;

use Domain\FormRequest\DataTransferObjects\FormRequestData;
use Domain\FormRequest\Repositories\FormRequestRepository as FormRequestRepositoryInterface;
use Illuminate\Support\Facades\Storage;

/**
 * Class FormRequestRepository
 * @package Infrastructure\FormRequest\Eloquent
 */
class FormRequestRepository implements FormRequestRepositoryInterface
{
    /**
     * Create a new form request to storage.
     *
     * @param FormRequestData $formRequestData
     * @return FormRequestData
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function create(FormRequestData $formRequestData): FormRequestData
    {
        $formRequests = Storage::disk('local')->exists('form_requests.json')
            ? json_decode(Storage::disk('local')->get('form_requests.json'))
            : [];

        array_push($formRequests, $formRequestData->toArray());

        Storage::disk('local')->put('form_requests.json', json_encode($formRequests));

        return $formRequestData;
    }
}
