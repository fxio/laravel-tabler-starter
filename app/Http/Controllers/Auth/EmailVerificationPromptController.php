<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    /**
     * Display the email verifications prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        if($request->user()->hasVerifiedEmail()) {
            if($request->user()->isAdmin()) {
                return redirect()->intended(route('admin.index', absolute: false));
            }

            return redirect()->intended(route('user.index', absolute: false));
        }

        return view('auth.verify-email');
    }
}
