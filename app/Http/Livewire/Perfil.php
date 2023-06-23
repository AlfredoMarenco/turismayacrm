<?php

namespace App\Http\Livewire;

use App\Models\Budget;
use App\Models\Split;
use Livewire\Component;
use Stripe\Stripe;

class Perfil extends Component
{

    public $user;
    public $splits = [];
    public $splitSelected = [];
    public $lineItems=[];

    public $show_payments=true;
    public $show_splits=false;
    public $show_checkout=false;

    public function mount()
    {
        $this->user = auth()->user();
    }

    public function selectedBudget(Budget $budget)
    {
        $this->splits = $budget->payment->splits;
        $this->show_splits = true;
        $this->show_payments = false;
    }

    public function paySplits()
    {
            Stripe::setApiKey(config('stripe.stripe_secret'));
            /* dd($this->splitSelected[0]); */
            /* dd(sizeof($this->splitSelected)); */
            $lineItems = [];
            for ($i=0; $i < sizeof($this->splitSelected); $i++) {
                $split = Split::find($this->splitSelected[$i]);
                array_push($lineItems,[
                    'price_data' => [
                        'currency' => 'mxn',
                        'product_data' => [
                            'name' => $split->description,
                        ],
                        'unit_amount' => $split->amount * 100,
                    ],
                    'quantity' => 1,
                ]);
            }

        $session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('success',[],true)."?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('user.profile',[],true)
        ]);

        for ($i=0; $i < sizeof($this->splitSelected); $i++) {
            $split = Split::find($this->splitSelected[$i]);
            $split->update([
                'stripe_id' => $session->id
            ]);
        }

        return redirect($session->url);
    }

    public function render()
    {
        return view('livewire.perfil');
    }
}
