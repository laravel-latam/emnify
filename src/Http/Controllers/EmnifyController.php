<?php

namespace LaravelLatam\Emnify\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLatam\Emnify\Http\Middleware\VerifyRedirectUrl;

class EmnifyController extends Controller
{
    /**
     * Create a new PaymentController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(VerifyRedirectUrl::class);
    }

    /**
     * Display the form to gather additional payment verification for the given payment.
     *
     * @param  string  $id
     * @return \Illuminate\View\View
     */
    public function index()
    {

        /* [
            'EmnifyKey' => config('cashier.key'),
            'payment' => new Payment(
                EmnifyPaymentIntent::retrieve($id, Emnify::stripeOptions())
            ),
            'redirect' => request('redirect'),
        ]);
        /*
        return view('cashier::payment', [
            'EmnifyKey' => config('cashier.key'),
            'payment' => new Payment(
                EmnifyPaymentIntent::retrieve($id, Emnify::stripeOptions())
            ),
            'redirect' => request('redirect'),
        ]);*/
        return view('emnify::index');
    }

    public function show($id)
    {
        /*
        return view('cashier::payment', [
            'EmnifyKey' => config('cashier.key'),
            'payment' => new Payment(
                EmnifyPaymentIntent::retrieve($id, Emnify::stripeOptions())
            ),
            'redirect' => request('redirect'),
        ]);*/
        return $id;
    }
}
