<?php

namespace App\Actions\Settings;

use App\Models\Setting;
use Illuminate\Support\Collection;

class UpdateProfileSettingAction
{
    public function execute(Collection $collection)
    {
        try {
            $existingSetting = Setting::first();

            if (!$existingSetting) {
                $existingSetting = new Setting();
            }

            $existingSetting->description = $collection->get('description');

            if ($collection->has('logo')) {
                $existingSetting->logo = $collection->get('logo')->store('settings', 'uploads');
            }

            if ($collection->has('favicon')) {
                $existingSetting->favicon = $collection->get('favicon')->store('settings', 'uploads');
            }

            if ($existingSetting->save()) {
                return true;
            }

            return false;
        } catch (\Throwable $th) {
            info($th);

            return false;
        }
    }
}
