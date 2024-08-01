<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended(
                        // auth()->user()->is_admin ? route('admin.dashboard') : route('dashboard')
                        auth()->user()->utype === 'ADM' ? route('admin.dashboard') : (auth()->user()->utype === 'SVP' ? route('sprovider.dashboard') : route('customer.dashboard'))
                    );
    }

}