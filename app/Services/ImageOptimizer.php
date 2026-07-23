<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class ImageOptimizer
{
    public function optimize(
        $file,
        string $folder = 'images',
        int $quality = 90,
        int $maxWidth = 1600
    ): string {

        $manager = new ImageManager(
            Driver::class
        );

        $image = $manager->decodePath(
            $file->getRealPath()
        );

        // کوچک کردن فقط در صورت نیاز
        if ($image->width() > $maxWidth) {
            $image->scale(width: $maxWidth);
        }

        $filename = Str::uuid() . '.webp';

        $path = $folder.'/'.$filename;

        Storage::disk('public')->put(
            $path,
            (string) $image->encodeUsingMediaType(
                'image/webp',
                quality: $quality
            )
        );

        return $path;
    }
}