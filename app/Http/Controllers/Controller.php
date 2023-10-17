<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}?> 



 
<!-- // namespace App\Http\Controllers;
 
// use Illuminate\Http\RedirectResponse;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
 
// class PasswordController extends Controller
// {
//     /**
//      * Update the password for the user.
//      */
//     public function update(Request $request): RedirectResponse
//     {
//         // Validate the new password length...
 
//         $request->user()->fill([
//             'password' => Hash::make($request->newPassword)
//         ])->save();
 
//         return redirect('/profile');
//     }
}  -->