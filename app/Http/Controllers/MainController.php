<?php

namespace App\Http\Controllers;

use App\Models\{About, Order, Portfolio, Team};
use App\Http\Requests\StoreRequest\StoreOrderRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome', [
            "about" => About::all(),
            "order" => Order::all(),
            "team" => Team::all(),
        ]);
    }


    public function portfolio()
    {
        return view('portfolio', ["portfolio" => Portfolio::with('tags')->get(),]);
    }


    public function order(StoreOrderRequest $request)
    {
        try {
            $order = Order::create($request->all());

            if ($request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Ваш заказ успешно отправлен!'
                ]);
            }
            return redirect()->route('home')->with('success', 'Ваш заказ успешно отправлен!');
        } catch (\Exception $e) {
            if ($request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Ошибка при отправке заказа. Попробуйте снова.'
                ], 500);
            }

            return redirect()->route('home')->with('error', 'Ошибка при отправке заказа.');
        }
    }
}
