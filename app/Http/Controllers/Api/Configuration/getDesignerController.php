<?php

namespace App\Http\Controllers\Api\Configuration;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class getDesignerController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param int $id
     * @return JsonResponse
     */
    public function __invoke(int $id): JsonResponse
    {
        $data=User::query()
                ->role('designer')
                ->where('id',  $id)
                ->where('is_deleted', false)
                ->first();

        return sendSuccessResponse(
            __('messages.get_data'),
            $data
        );
    }
}

