<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Mail\OtpMail;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OtpController extends Controller
{

    public function storeOtp(Request $request)
    {

        if (Auth::check()) {
            $user = auth()->user();
            $user->otp = $request->input('otp');
            $user->save();

            Mail::to($user->email)->send(new OtpMail($otp));

            return response()->json(['success' => 'OTP sent to Mail successfully!']);
        }

        return response()->json(['message' => 'Unauthorized'], 401);
    }
    public function getStoredOtp(Request $request)
    {
        $user = $request->user();

        $otp = $user->otp;

        return response()->json(['otp' => $otp]);
    }

}

