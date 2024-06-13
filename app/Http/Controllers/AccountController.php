<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Crypt;

class AccountController extends Controller
{
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        $account = Account::where('username', $username)->first();

        if ($account && Crypt::decrypt($account->password) === $password) {
            session(['logged_in' => true]);
            return redirect()->route('dashboard');
        } else {
            return redirect()->back()->withErrors(['error' => 'Username or Password is incorrect!']);
        }
    }

    public function logout()
    {
        session()->forget('logged_in');
        return redirect()->to('/');
    }

    public function show()
    {
        $account = Account::paginate(5);
        $i = ($account->currentPage() - 1) * $account->perPage() + 1;

        if ( session('logged_in') ) {
            return view('admin.account.show', compact('account', 'i'));
        } else {
            return redirect()->route('login');
        }

    }

    public function store(Request $request)
    {
        $account = new Account();
        $account->username = $request->input('username');
        $account->password = Crypt::encrypt($request->input('password'));
        $account->save();

        return redirect()->back();
    }

    public function edit($id)
    {
        // if (!session('logged_in')) {
        //     return redirect()->route('login');
        // }

        // $userId = session('user_id');
        // $user = Account::find($userId);

        $account = Account::findOrFail($id);

        if ( session('logged_in') ) {
            return view('admin.account.edit', compact('account'));
        } else {
            return redirect()->route('login');
        }
    }

    public function update(Request $request, Account $account)
    {
        $account->update([
            'username' => $request->username,
            'password' => Crypt::encrypt($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('account.show');
    }

    public function destroy(Account $account)
    {
        $account->delete();
        return redirect()->back();
    }
}
