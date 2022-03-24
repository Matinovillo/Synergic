<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginFacebookController extends Controller
{
	public function redirect()
	{
		return Socialite::driver('facebook')->redirect();
	}

	public function callback()
	{
		$user = Socialite::driver('facebook')->user();

		$findUser = User::where('email', $user->getEmail())->first();

		if ($findUser) {
			Auth::login($findUser, false);
		} else {
			$new = User::firstOrCreate([
				'nombre' => $user->getName(),
				'email' => $user->getEmail(),
				'id_foto' => 1,

			]);
			Auth::login($new, false);
		}
		return redirect('/');
	}
}
