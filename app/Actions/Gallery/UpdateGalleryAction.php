<?php

namespace App\Actions\Gallery;

use App\Models\Gallery;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class UpdateGalleryAction
{
    public function execute(Collection $collection, Gallery $gallery)
    {
        try {
            $currentImage = $gallery->image;
            $gallery->video_url = null;

            if (filled($currentImage)) {
                Storage::disk('uploads')->delete($currentImage);
                $gallery->image = null;
            }

            if ($collection->has('image')) {
                $gallery->image = $collection->get('image')->store('gallery', 'uploads');
            }

            if ($collection->has('video_url')) {
                $gallery->video_url = $collection->get('video_url');
            }

            $gallery->type = $collection->get('video_url') ? 'video' : 'image';

            if ($gallery->save()) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            dd($th);
            return false;
        }

    }
}
