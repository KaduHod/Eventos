<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    //
    public function index() {
        $events = Event::all();// ??
        return view('home', ['events'=> $events]);
    }
    public function create() {
        return view('events.create');
    }
    public function store(Request $request) {
        $event = new Event;

        $event->tittle = $request->tittle;

        $event->city = $request->city;

        $event->description = $request->description;

        $event->private = $request->private;

        $event->items = $request->items;

        $event->date = $request->date;
        


        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;// pego a imagem da req

            $extension = $requestImage->extension();// pego a extensão jpg, png etc

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension; //crio uma string que é referente ao nome da imagem que será salva no banco de dados

            $requestImage->move(public_path('img/events'), $imageName);// salvo a imagem em um diretorio no servidor

            $event->image = $imageName;// salvo no $event o nome da imagem
        }

        $event->save();// Método que salva os novos dados no banco de dados

        return redirect('/')->with('msg','Evento criado com sucesso!');// with metodo que envia flash massages
    }

    public function show($id) {
        $event = Event::findOrFail($id);

        return view('events.show', ['event'=>$event]);
    }
}
