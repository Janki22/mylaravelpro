<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

 public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|string',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->withErrors([
            'email' => 'No user found with this email.',
        ])->withInput();
    }

    // Plain text comparison
    if ($request->password !== $user->password) {
        return back()->withErrors([
            'password' => 'Incorrect password.',
        ])->withInput();
    }

    // Login the user manually
    Auth::login($user, $request->filled('remember'));
    $request->session()->regenerate();

    return redirect()->intended('/dashboard');
}




    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
