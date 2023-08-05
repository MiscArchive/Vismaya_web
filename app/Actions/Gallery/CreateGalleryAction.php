<?php

namespace App\Actions\Gallery;

use App\Models\Gallery;
use Illuminate\Support\Collection;

class CreateGalleryAction
{
    public function execute(Collection $collection)
    {
        try {
            $gallery = new Gallery();
            $gallery->type = $collection->get('type');
            $gallery->image = $collection->has('image') ? $collection->get('image')->store('gallery', 'uploads') : NULL;
            $gallery->video_url = $collection->get('video_url');
            if ($gallery->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
