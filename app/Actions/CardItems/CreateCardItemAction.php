<?php

namespace App\Actions\CardItems;

use App\Models\Branch;
use App\Models\CardItem;
use Illuminate\Support\Collection;

class CreateCardItemAction
{
    public function execute(Collection $collection)
    {
        try {
            $cardItem = new CardItem();
            $cardItem->establishment_id = $collection->get('establishment_id');
            $cardItem->title = $collection->get('title');
            $cardItem->description = $collection->get('description');
            $cardItem->type = $collection->get('type');
            $cardItem->is_featured = $collection->get('is_featured');
            $cardItem->image = $collection->has('image') ? $collection->get('image')->store('cardItems', 'uploads') : null;
            if ($cardItem->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
