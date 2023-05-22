<?php

namespace App\Http\Controllers;

use App\Mail\InfoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public $classes = [
        ['name' => 'Functional',
        'img' => 'https://www.my-personaltrainer.it/2021/02/12/allenamento-funzionale_900x760.jpeg',
        'synopsis' => "L'allenamento funzionale è una tipologia di esercizio fisico destinato a migliorare la funzionalità specifica dell'organismo a determinati gesti o sforzi."],
        ['name' => 'Bodybuilding',
        'img' => 'https://www.my-personaltrainer.it/2023/03/01/bodybuilding-consapevole-guida-al-principiante_900x760.jpeg',
        'synopsis' => "Consideriamo bodybuilding qualsiasi attività finalizzata rimodellare esteticamente l'organismo aumentando la quantità di massa muscolare (ipertrofia) e riducendo i livelli di adiposità."],
        ['name' => 'Spinning',
        'img' => 'https://www.my-personaltrainer.it/2019/11/18/spinning_900x760.jpeg',
        'synopsis' => "Lo spinning, come anche l'esecuzione della cyclette, dell'hydro bike e della bici sui rulli, è un'attività motoria di gruppo facente parte della categoria ''indoor cycling'' (ciclismo indoor, o ciclismo al coperto)."],
        ['name' => 'Fit-Boxe',
        'img' => 'https://www.my-personaltrainer.it/2019/11/18/fit-boxe_900x760.jpeg',
        'synopsis' => "Fit boxe è un metodo di allenamento fitness – concepito per ottimizzare lo stato di forma fisica generale – sviluppato in stile kickboxing."],
        ['name' => 'Yoga',
        'img' => 'https://www.my-personaltrainer.it/2020/03/09/yoga_900x760.jpeg',
        'synopsis' => "Yoga è il nome di un gruppo di pratiche e discipline fisiche, mentali e spirituali originariamente indiane. Rappresenta una delle sei scuole ortodosse tradizionali filosofiche indù."],
        ['name' => 'Crossfit',
        'img' => 'https://www.my-personaltrainer.it/2019/10/31/crossfit_900x760.jpeg',
        'synopsis' => 'Il crossfit, che molti reputano uno sport, è in verità un "programma" di rafforzamento e condizionamento fisico generale di tipo fitness e wellness.'],
        ['name' => 'Pilates',
        'img' => 'https://www.my-personaltrainer.it/2020/04/22/pilates_900x760.jpeg',
        'synopsis' => 'Il pilates è un tipo di ginnastica di tipo rieducativo, preventivo ed ipoteticamente terapeutico, focalizzato sul controllo della postura – tramite la "regolazione del baricentro" – a sua volta necessario a guadagnare maggiore armonia e fluidità nei movimenti.']
    ];

    public function homepage() {
        return view('homepage');
    }

    public function class() {
        return view('class')->with('classes', $this->classes);
    }

    public function detail($ref) {
        return view('detail', ['ref' => $ref, 'classes' => $this->classes]);
    }

    public function contact() {
        return view('contact');
    }

    public function send(Request $request) {
        $request -> validate([
            'name' => 'required|string',
            'phone' => 'numeric',
            'mail' => 'required|email',
            'message' => 'min:10'
        ]);

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'mail' => $request->input('mail'),
            'message' => $request->message,            
        ];

        Mail::to($request->input('mail')) -> send(new InfoMail($data));
        return redirect()->route('homepage');

        dd($data);
    }
}
