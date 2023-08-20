<?php

namespace App\Actions\Banners;

use App\Models\Banner;
use Illuminate\Support\Collection;

class CreateBannerAction
{
    public function execute(Collection $collection)
    {
        try {
            $banner = new Banner();
            $banner->establishment_id = $collection->get('establishment_id');
            $banner->title = $collection->get('title');
            $banner->description = $collection->get('description');
            $banner->image = $collection->has('image') ? $collection->get('image')->store('banners', 'uploads') : null;
            if ($banner->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
