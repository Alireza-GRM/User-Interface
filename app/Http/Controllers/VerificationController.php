<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function showVerificationForm(Request $request)
    {
        $code = $request->session()->get('verify');

        if (!$code) {
            return redirect()->route('login')->withErrors(['code' => 'کد تأیید پیدا نشد.']);
        }

        return view('auth.verification', compact('code'));
    }

    public function verifyCode(Request $request)
    {
        $request->validate([
            'code' => 'required|string',
        ]);
        
        if ($request->code == $request->session()->get('verify')) 
        {
            $userId = $request->session()->get('auth_user_id');

            if ($userId) {
                Auth::loginUsingId($userId);
                $request->session()->forget(['verify', 'auth_user_id']);
                return redirect()->intended('/');
            }
            return redirect()->route('login')->withErrors(['error' => 'مشکلی در فرآیند ورود رخ داده است.']);
        }
        return back()->withErrors(['code' => 'کد تأیید نادرست است.']);
    }
}

