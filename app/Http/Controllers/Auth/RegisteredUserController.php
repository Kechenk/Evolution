<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
  /**
   * Display the registration view.
   */
  public function create(): View
  {
    return view('auth.register');
  }

  /**
   * Handle an incoming registration request.
   *
   * @throws \Illuminate\Validation\ValidationException
   */
  public function store(Request $request): RedirectResponse
  {
    $request->validate(
      [
        'name' => ['required', 'string', 'max:255'],
        'email' => [
          'required',
          'string',
          'lowercase',
          'email',
          'max:255',
          'unique:users,email',
          function ($value, $fail) {
            $allowedDomains = ['gmail.com', 'yahoo.com', 'proton.me'];
            $domain = substr(strrchr($value, "@"), 1);

            if (!in_array($domain, $allowedDomains)) {
              $fail('Hanya diperbolehkan menggunakan email dari Google');
            }
          },
        ],
        'phone' => [
          'string',
          'max:15',
          function ($value, $fail) {
            $allowedPrefixes = [
              '811','812','813','821','822','823','851','852','853','814','815','816',
              '855','856','857','858','895','896','897','898','899','817','818','819',
              '859','877','878','831','832','833','838','881','882','883','884',
              '885','886','887','888','889',
            ];
            $valueLength = strlen($value);
            if ($valueLength < 10 || $valueLength > 12 || $value[0] === '0') {
              $fail('Phone number invalid.');
              return;
            }
            $isValidPrefix = false;
            foreach ($allowedPrefixes as $prefix) {
              if (strpos($value, $prefix) === 0) {
                $isValidPrefix = true;
                break;
              }
            }
            if (!$isValidPrefix) {
              $fail('Phone number invalid.');
            }
          },
        ],
        'password' => ['required', 'confirmed', Rules\Password::defaults()],
        'instansi' => ['string', 'max:255'],
      ]
    );

    $user = User::create([
      'name' => $request->name,
      'email' => $request->email,
      'phone' => $request->phone,
      'institusi' => $request->institusi,
      'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(route('dashboard', absolute: false));
  }
}
