<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\BinanceService;
use App\Models\Order;

class OrderController extends Controller
{
    protected $binanceService;

    public function __construct(BinanceService $binanceService)
    {
        $this->binanceService = $binanceService;
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'symbol' => 'required|string',
            'side' => 'required|string|in:buy,sell',
            'price' => 'required_if:type,limit|numeric|min:0',
        ]);
        try {
            $response = $this->binanceService->createOrder(
                $validatedData['symbol'],
                $validatedData['side'],
                $validatedData['price'] ?? null
            );
            // dd($validatedData);
            Order::create([
                'symbol' => $validatedData['symbol'],
                'side' => $validatedData['side'],
                'price' => $validatedData['price'],
            ]);
            // dd($validatedData);


            return redirect()->back()->with('success', 'Order created successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to create order: ' . $e->getMessage());
        }
    }

}
