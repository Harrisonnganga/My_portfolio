<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Request\ContactRequest;

class ContactController extends Controller
{

  public function show()
  {
    return view('contacts.show');
  }

  public function submit(ContactRequest $request): RedirectResponse
  {
    Mail::to('ngangaharrison490@gmail.com')->send(new Contactmail($request->name, $request->email, $request->content));

    return to_route('home')
  }
}


