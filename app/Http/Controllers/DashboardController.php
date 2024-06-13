<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Accomodation;
use App\Models\Image;
use App\Models\Comment;
use App\Models\Account;

class DashboardController extends Controller
{
    public function index() {

        $package = Package::count();
        $accomodation = Accomodation::count();
        $image = Image::count();
        $message = Comment::count();
        $account = Account::count();

        if ( session('logged_in') ) {
            return view('admin.index', compact(
                'package',
                'accomodation',
                'image',
                'message',
                'account'
            ));
        } else {
            return redirect()->route('login');
        }

    }
}
