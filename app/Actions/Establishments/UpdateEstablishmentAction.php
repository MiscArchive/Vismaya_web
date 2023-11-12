<?php

namespace App\Actions\Establishments;

use App\Models\Establishment;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class UpdateEstablishmentAction
{
    public function execute(Collection $collection, Establishment $establishment)
    {
        try {
            $establishment->name = $collection->get('name');
            $establishment->description = $collection->get('description');
            $establishment->status = $collection->get('status');
            $establishment->telephone = $collection->get('telephone');
            $establishment->mobile = $collection->get('mobile');
            $establishment->district = $collection->get('district');
            $establishment->pincode = $collection->get('pincode');  
            $establishment->gmail = $collection->get('gmail');
            $establishment->facebook = $collection->get('facebook');
            $establishment->twitter = $collection->get('twitter');
            $establishment->instagram = $collection->get('instagram');
            $establishment->linkedin = $collection->get('linkedin');
            if ($collection->has('logo')) {
                $currentImage = $establishment->logo;
                Storage::disk('uploads')->delete($currentImage);
                $establishment->logo =  $collection->get('logo')->store('establishments', 'uploads');
            }
            if ($collection->has('logo_small')) {
                $currentImage = $establishment->logo_small;
                Storage::disk('uploads')->delete($currentImage);
                $establishment->logo_small =  $collection->get('logo_small')->store('establishments', 'uploads');
            }
            if ($establishment->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
