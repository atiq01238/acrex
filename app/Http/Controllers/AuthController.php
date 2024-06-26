<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Referral;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|string|min:8',
            'referral_code' => 'nullable|string|exists:users,referral_code',
        ]);


        $referralCode = Str::random(8);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'referral_code' => $referralCode,
        ]);

        if ($validatedData['referral_code']) {
            $referredBy = User::where('referral_code', $validatedData['referral_code'])->first();
            if ($referredBy) {
                $referral = new Referral();
                $referral->user_id = $referredBy->id;
                $referral->referred_user_id = $user->id;
                $referral->save();
            }
        }

        return redirect()->route('auth.login')->with('success', 'Account created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withInput($request->only('email'))->withErrors([
            'email' => 'Invalid email or password.',
        ]);
    }

    public function logout()

    {
        Auth::logout();
        session()->flush();
        return redirect('/login');

    }

}
