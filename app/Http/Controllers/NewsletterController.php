<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'user_email' => 'required|email'
        ]);

        if (!Newsletter::isSubscribed($request->email))
        {
            Newsletter::subscribe($request->email);
            return redirect()->back()->with(['success' => 'Success to subscribe Newsletter!']);
        }

        return redirect()->back()->with(['failure' => 'Failure to subscribe']);
    }
}
