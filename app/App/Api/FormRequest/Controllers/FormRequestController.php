<?php

namespace App\Api\FormRequest\Controllers;

use App\Api\FormRequest\Requests\FormRequestRequest;
use App\Core\Http\Controllers\Controller;
use Domain\FormRequest\Factories\FormRequestFactory;
use Domain\FormRequest\Repositories\FormRequestRepository;

/**
 * Class FormRequestController
 * @package App\Api\FormRequest\Controllers
 */
class FormRequestController extends Controller
{
    /**
     * @var FormRequestRepository
     */
    protected FormRequestRepository $formRequestRepository;

    /**
     * FormRequestController constructor.
     * @param FormRequestRepository $formRequestRepository
     */
    public function __construct(FormRequestRepository $formRequestRepository)
    {
        $this->formRequestRepository = $formRequestRepository;
    }

    /**
     * Store a new form request.
     *
     * @param FormRequestRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(FormRequestRequest $request)
    {
        $this->formRequestRepository->create(FormRequestFactory::fromRequest($request));

        return response()->json([
            'message' => __('Заявка успешно отправлена.')
        ]);
    }
}
