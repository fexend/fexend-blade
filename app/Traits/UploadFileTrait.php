<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadFileTrait
{
    /**
     * Upload file to storage
     */
    public function uploadFile(UploadedFile $file, string $folder = 'unknown', ?string $filename): string|bool
    {
        if ($filename) {
            return $file->storeAs($folder, $filename, 'public');
        }

        return $file->store($folder, 'public');
    }

    /**
     * Delete file from storage
     */
    public function deleteFile(?string $filename): bool
    {
        if (is_null($filename)) {
            return false;
        }

        if (Storage::disk('public')->exists($filename) === false) {
            return false;
        }

        return Storage::disk('public')->delete($filename);
    }
}
