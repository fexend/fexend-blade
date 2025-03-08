<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

trait ControllerTrait
{
    /**
     * Response JSON
     */
    public function responseJson($data, int $code = 200): JsonResponse
    {
        return response()->json($data, $code);
    }

    /**
     * Response JSON message
     */
    public function responseJsonMessage(string $message, int $code = 200): JsonResponse
    {
        return response()->json(['message' => $message], $code);
    }

    /**
     * Response JSON data
     */
    public function responseJsonData($data, string $message = 'success get data', int $code = 200): JsonResponse
    {
        return response()->json(['data' => $data, 'message' => $message], $code);
    }

    /**
     * Response JSON message CRUD
     */
    public function responseJsonMessageCrud(bool $success = true, string $method = 'create', ?string $message, ?string $exceptionMessage, int $code = 200, $data = null): JsonResponse
    {
        $methods = [
            'create' => __('insert new data. '),
            'update' => __('update data. '),
            'delete' => __('delete data. '),
            'restore' => __('restore data. '),
            'forceDelete' => __('force delete data. '),
        ];

        $final_message = ($success ? __('Success ') : __('Failed '));

        if (isset($methods[$method])) {
            $final_message .= $methods[$method];

            if ($method === 'create' && $success) {
                $code = 201;
            }
        }

        if ($message !== null) {
            $final_message .= $message . ' ';
        }

        if ($exceptionMessage !== null and config('app.debug')) {
            $final_message .= $exceptionMessage;
        }

        $response = ['message' => $final_message];

        if ($data !== null) {
            $response['result'] = $data;
        }

        return response()->json($response, $code);
    }

    /**
     * Response message CRUD
     */
    public function responseMessageCrud(bool $success = true, string $method = 'create', ?string $message, ?string $exceptionMessage): string
    {
        $methods = [
            'create' => __('insert new data. '),
            'update' => __('update data. '),
            'delete' => __('delete data. '),
            'restore' => __('restore data. '),
            'forceDelete' => __('force delete data. '),
        ];

        $final_message = ($success ? __('Success ') : __('Failed '));

        if (isset($methods[$method])) {
            $final_message .= $methods[$method];
        }

        if ($message !== null) {
            $final_message .= $message . ' ';
        }

        if ($exceptionMessage !== null and config('app.debug')) {
            $final_message .= $exceptionMessage;
        }

        return $final_message;
    }

    /**
     * Response file
     */
    public function responseFile(string $fileName): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $filePath = Storage::disk('public')->path($fileName);

        if (Storage::disk('public')->exists($fileName)) {
            return response()->file($filePath);
        }

        return response()->file(public_path('images/errors/no-file.png'));
    }

    /**
     * Response download from storage
     */
    public function responseDownloadStorage(string $file): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $filePath = storage_path('/app/public/' . $file);
        return response()->download($filePath);
    }

    /**
     * Response download
     */
    public function responseDownload(string $file): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        return response()->download($file);
    }
}
