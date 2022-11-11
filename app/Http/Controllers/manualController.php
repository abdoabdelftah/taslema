<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class manualController extends Controller
{
    //

    public function checkAdminLogin(Request $request)
    {


        if (Auth::attempt(['phone_number' => $request->phone_number, 'password' => $request->password, 'is_admin' => 1])) {

            $user = Auth::user();

            return redirect()->route('main.orders');
        }

        return redirect()->back()->withErrors(['errors' => ' رقم الهاتف غير صحيح او كلمة المرور غير صحيحة']);
    }
}
