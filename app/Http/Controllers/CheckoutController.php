<?php

namespace App\Http\Controllers;

use App\Models\Split;
use Illuminate\Http\Request;
use Error;
use Stripe\StripeClient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Password;
use Stripe\Stripe;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class CheckoutController extends Controller
{
    public function success(Request $request){

        $sessionId = $request->get('session_id');

        $splits = Split::where('stripe_id',$sessionId)->get();

        foreach ($splits as $split) {
            $split->update([
                'status' => 2
            ]);
        }
        return view('success',compact('sessionId'));
    }

    public function cancel(){
        
    }

}
