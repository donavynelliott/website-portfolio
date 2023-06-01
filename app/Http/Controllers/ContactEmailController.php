<?php

namespace App\Http\Controllers;

use App\Models\ContactEmail;
use Illuminate\Http\Request;

class ContactEmailController extends Controller
{
    /**
     * Retrieve the email address from the database and display it on the contact page.
     */
    public function index()
    {
        $email = ContactEmail::first();

        return response()->json([
            'email' => $email->email
        ]);
    }
}
