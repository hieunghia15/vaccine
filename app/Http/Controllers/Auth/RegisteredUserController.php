<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterUserRequest;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterUserRequest $request)
    {
        $request->validated();

        $user = User::create([
            'fullname' => $request->fullname,
            'phone' => $request->phone,
            'day_of_birth' => $request->day_of_birth,
            'gender' => $request->gender,
            'email' => $request->email,
            'identification' => $request->identification,
            'address' => $request->address,
            'ward_id' => $request->ward_id,
            'nationality_id' => $request->nationality_id,
            'ethnic_id' => $request->ethnic_id,
            'password' => Hash::make($request->password),
        ]);

        $user->syncRoles(['citizen']);
        event(new Registered($user));
        return redirect()->route('login');
    }
}
