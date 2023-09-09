<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Customer;


class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        $customers = Customer::all();

        return view('payments.create', compact('customers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'amount' => 'required|numeric',
            'payment_date' => 'required|date',
        ]);
    
        // Create a new payment record
        $payment = new Payment();
        $payment->customer_id = $request->input('customer_id');
        $payment->amount = $request->input('amount');
        $payment->payment_date = $request->input('payment_date');
        // Add other fields if needed
        $payment->save();
    
        // Redirect to the payment index page or wherever you want
        return redirect()->route('payments.index');
    }

    public function edit(Payment $payment)
    {
        return view('payments.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        // Validasi input di sini

        $payment->update($request->all());

        return redirect()->route('payments.index');
    }

    public function destroy(Payment $payment)
    {
        $payment->delete();

        return redirect()->route('payments.index');
    }
}
