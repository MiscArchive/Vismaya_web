<?php

namespace App\Actions\Banners;

use App\Models\Banner;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class UpdateBannerAction
{
    public function execute(Collection $collection, Banner $banner)
    {
        try {
            $banner->title = $collection->get('title');
            $banner->description = $collection->get('description');
            $banner->status = $collection->get('status');
            if ($collection->has('image')) {
                $currentImage = $banner->image;
                Storage::disk('uploads')->delete($currentImage);
                $banner->image = $collection->get('image')->store('banners', 'uploads');
            }
            if ($banner->save()) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            info($th);

            return false;
        }
    }
}
