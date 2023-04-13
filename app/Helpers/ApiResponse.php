<?php

declare(strict_types=1);

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\JsonResponse;

/**
 * Returns a success HTTP JSON response.
 *
 * @param string $message
 * @param array|Arrayable|JsonSerializable|null $data
 * @param int $status_code
 * @return JsonResponse
 */
function sendSuccessResponse(
    string $message = 'OK',
    array|Arrayable|JsonSerializable|null $data = null,
    int $status_code = 200
): JsonResponse {
    $response_data = [
        'success' => true,
        'message' => $message,
        'data' => $data,
        'status_code' => $status_code,
    ];

    return response()->json(
        $response_data,
        $status_code
    );
}

/**
 * Returns a failed HTTP JSON response.
 *
 * @param string $message
 * @param array|Arrayable|JsonSerializable|null $data
 * @param int $status_code
 * @return JsonResponse
 */
function sendFailedResponse(
    string $message = 'Error',
    array|Arrayable|JsonSerializable|null $data = null,
    int $status_code = 404
): JsonResponse {
    $response_data = [
        'success' => false,
        'message' => $message,
        'data' => $data,
        'status_code' => $status_code
    ];

    return response()->json(
        $response_data,
        $status_code
    );
}
