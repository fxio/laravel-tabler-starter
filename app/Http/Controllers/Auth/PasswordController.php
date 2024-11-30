<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    public function update(Request $request)
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', Password::defaults(), 'confirmed'],
        ]);

        DB::beginTransaction();

        try {
            $request->user()->update([
                'password' => Hash::make($validated['password']),
            ]);

            DB::commit();
            return back()->with('success', __('password_updated_successfully'));
        } catch (\Exception $exception) {
            Log::error('Password updating failed: ' . $exception->getMessage());
            DB::rollBack();
            return back()->with('error', __('password_updating_failed'));
        }
    }
}
