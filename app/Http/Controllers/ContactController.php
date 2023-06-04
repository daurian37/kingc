<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    // Afficher le formulaire de contact
    public function show()
    {
        return view('contact');
    }

    // Soumettre le formulaire de contact
    public function submit(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Envoyer l'e-mail
        Mail::to('dv.balenvokolo@gmail.com')->send(new ContactFormMail($validatedData));

        // Rediriger l'utilisateur après l'envoi du formulaire
        return redirect('contact')->back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
