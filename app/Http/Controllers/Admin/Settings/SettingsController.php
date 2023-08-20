<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Actions\Settings\UpdateProfileSettingAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileSettings\ProfileSettingsRequest;
use App\Http\Requests\Settings\ChangePasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SettingsController extends Controller
{
    public function settings()
    {
        return view('admin.Settings.index');
    }

        public function profileSettings(ProfileSettingsRequest $request, UpdateProfileSettingAction $UpdateProfileSettingAction)
        {
            try {
                $response = $UpdateProfileSettingAction->execute(collect($request->validated()));

                if (!$response) {
                    return redirect()->back()->withErrors('Failed to Uppdate Profile!');
                }

                return redirect()->route('settings')->withSuccess('Profile updated successfully');
            } catch (\Throwable $th) {
                return redirect()->back()->withErrors('Something went wrong,Please try again!');
            }
        }

        public function changePassword(ChangePasswordRequest $request)
        {
            $user = Auth::user();

            if (Hash::check($request->old_password, $user->password)) {
                $user->update([
                    'password' => Hash::make($request->new_password),
                ]);

                return redirect()->route('settings')->with('success', 'Password changed successfully.');
            }

            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }
}
