<?php

namespace App\Actions\Establishments;

use App\Models\Establishment;
use Illuminate\Support\Collection;

class CreateEstablishmentAction
{
    public function execute(Collection $collection)
    {
        try {
            $establishment = new Establishment();
            $establishment->name = $collection->get('name');
            $establishment->description = $collection->get('description');
            $establishment->logo = $collection->has('logo') ? $collection->get('logo')->store('establishments', 'uploads') : NULL;
            $establishment->logo_small = $collection->has('logo_small') ? $collection->get('logo_small')->store('establishments', 'uploads') : NULL;
            $establishment->telephone = $collection->get('telephone');
            $establishment->mobile = $collection->get('mobile');
            $establishment->district = $collection->get('district');
            $establishment->pincode = $collection->get('pincode');  
            $establishment->gmail = $collection->get('gmail');
            $establishment->facebook = $collection->get('facebook');
            $establishment->twitter = $collection->get('twitter');
            $establishment->instagram = $collection->get('instagram');
            $establishment->linkedin = $collection->get('linkedin');



            if ($establishment->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            dd($th);
            return false;
        }
    }
}
