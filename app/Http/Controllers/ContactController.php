<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Mail\ContactMail;




class ContactController extends Controller
{
    public function show()
    {
        return view('contatti');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'message' => 'required|min:5'
        ]);

        Mail::to('noreply@agenziacom.test')->send(new ContactMail($validated));

        return back()->with('success', 'Messaggio inviato con successo!');
    }
}
