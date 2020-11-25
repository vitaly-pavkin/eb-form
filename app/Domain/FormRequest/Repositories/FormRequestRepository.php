<?php

namespace Domain\FormRequest\Repositories;

use Domain\FormRequest\DataTransferObjects\FormRequestData;

/**
 * Interface FormRequestRepository
 * @package Domain\FormRequest\Repositories
 */
interface FormRequestRepository
{
    /**
     * Create a new form request.
     *
     * @param FormRequestData $formRequest
     * @return mixed
     */
    public function create(FormRequestData $formRequest);
}
