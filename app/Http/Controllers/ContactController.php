<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('contact.contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $message = $request->input('message');

        // Envoyer l'e-mail en utilisant le mailable
        Mail::to('dv.balenvokolo@gmail.com')->send(new ContactFormMail($name, $email, $message));

        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès ! Nous vous répondrons bientôt.');
    }
}

