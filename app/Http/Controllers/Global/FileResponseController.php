<?php

namespace App\Http\Controllers\Global;

use App\Http\Controllers\Controller;
use App\Supports\Str;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

final class FileResponseController extends Controller
{
    public function responseFile(string $file): BinaryFileResponse
    {
        $filePath = Str::fileRequest($file);
        return $this->responseFile($filePath);
    }

    public function responseFileDownload(string $file): BinaryFileResponse
    {
        $filePath = Str::fileRequest($file);
        return $this->responseFile($filePath)->setContentDisposition('attachment', basename($filePath));
    }
}
