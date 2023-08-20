<?php

namespace App\Actions\CardItems;

use App\Models\CardItem;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class UpdateCardItemAction
{
    public function execute(Collection $collection, CardItem $cardItem)
    {
        try {
            $cardItem->establishment_id = $collection->get('establishment_id');
            $cardItem->title = $collection->get('title');
            $cardItem->description = $collection->get('description');
            $cardItem->is_featured = $collection->get('is_featured');
            $cardItem->status = $collection->get('status');
            $cardItem->type = $collection->get('type');
            if ($collection->has('image')) {
                $currentImage = $cardItem->image;
                Storage::disk('uploads')->delete($currentImage);
                $cardItem->image =  $collection->get('image')->store('cardItems', 'uploads');
            }
            if ($cardItem->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
