<?php

namespace App\Actions\Enquiry;

use App\Models\Enquiry;
use Illuminate\Support\Collection;

class CreateEnquiryAction
{
    public function execute(Collection $collection)
    {
        try {
            $enquiry = Enquiry::create($collection->toArray());
            if ($enquiry) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            dd($th);
            return false;
        }
    }
}
