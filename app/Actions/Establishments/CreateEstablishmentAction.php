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


            if ($establishment->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
