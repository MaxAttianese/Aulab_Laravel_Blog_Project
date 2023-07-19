<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\ContactEmail;

use Illuminate\Support\Facades\Mail;

use App\Http\Requests\MailRequest;

class Contactcontroller extends Controller
{

    public function contacts()
    {

        $title = "Contatti";

        $description = "Puoi contattare Max a alla seguente email: max@exempel.it";

        return view("Homepage.Contacts.contacts", compact("title", "description"));
    }

    public function saveData(MailRequest $request)
    {

        //dd($request->all());

        $mail = new ContactEmail($request->nameUser, $request->emailUser, $request->textUser);

        //return $mail->render();


        // Soluzione di controllo dei campi Selfwork antecedente alla lezione delle Request

        /*if (!$request->nameUser || !$request->emailUser || !$request->textUser) {

            return redirect()->route("contacts")->with(["insuccess" => "L'operazione non è andata a buon fine, compila tutti i campi per poter procedere"]);

        } else {

            Mail::to('example@expample.it')->send($mail);

            return redirect()->route("contacts")->with(["success" => "L'operazione è andata a buon fine ti risponderemo al più presto."]);
        }*/

        
        Mail::to('example@expample.it')->send($mail);

        return redirect()->route("contacts")->with(["success" => "L'operazione è andata a buon fine ti risponderemo al più presto."]);
    }
}
