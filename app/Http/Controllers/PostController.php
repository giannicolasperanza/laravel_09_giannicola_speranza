<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticoloRequest;
use App\Models\Articolo;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function articoli(){


        //  $listaArticoli=[
        //     ['titolo' => 'Lampada da tavolo', 'descrizione' => 'Lampada moderna con base in legno.', 'prezzo' => 39.99, 'id' => 1, 'img' => 'https://picsum.photos/seed/1/400/300'],
        //     ['titolo' => 'Tazza in ceramica', 'descrizione' => 'Tazza personalizzata per caffè o tè.', 'prezzo' => 12.50, 'id' => 2, 'img' => 'https://picsum.photos/seed/2/400/300'],
        //     ['titolo' => 'Zaino impermeabile', 'descrizione' => 'Perfetto per escursioni e viaggi.', 'prezzo' => 49.90, 'id' => 3, 'img' => 'https://picsum.photos/seed/3/400/300'],
        //     ['titolo' => 'Cuffie Bluetooth', 'descrizione' => 'Audio di alta qualità senza fili.', 'prezzo' => 89.00, 'id' => 4, 'img' => 'https://picsum.photos/seed/4/400/300'],
        //     ['titolo' => 'Tappetino mouse RGB', 'descrizione' => 'Illuminazione personalizzabile e superficie antiscivolo.', 'prezzo' => 25.99, 'id' => 5, 'img' => 'https://picsum.photos/seed/5/400/300'],
        //     ['titolo' => 'Set posate inox', 'descrizione' => 'Servizio da 24 pezzi in acciaio inox.', 'prezzo' => 34.75, 'id' => 6, 'img' => 'https://picsum.photos/seed/6/400/300'],
        //     ['titolo' => 'Notebook 15"', 'descrizione' => 'Laptop con 8GB RAM e SSD da 256GB.', 'prezzo' => 599.99, 'id' => 7, 'img' => 'https://picsum.photos/seed/7/400/300'],
        //     ['titolo' => 'Cornice digitale', 'descrizione' => 'Visualizza le tue foto preferite con facilità.', 'prezzo' => 65.00, 'id' => 8, 'img' => 'https://picsum.photos/seed/8/400/300'],
        //     ['titolo' => 'Smartwatch sportivo', 'descrizione' => 'Contapassi, battito cardiaco e notifiche.', 'prezzo' => 79.90, 'id' => 9, 'img' => 'https://picsum.photos/seed/9/400/300'],
        //     ['titolo' => 'Diffusore di aromi', 'descrizione' => 'Crea un atmosfera rilassante con oli essenziali.', 'prezzo' => 29.90, 'id' => 10, 'img' => 'https://picsum.photos/seed/10/400/300']
        //     ];


        $articoli = Articolo::all();
        return view('allarticles',['articoli'=>$articoli]);
    }




    // public function dettaglio($id){

    //     $listaArticoli=[
    //         ['titolo' => 'Lampada da tavolo', 'descrizione' => 'Lampada moderna con base in legno.', 'prezzo' => 39.99, 'id' => 1, 'img' => 'https://picsum.photos/seed/1/400/300'],
    //         ['titolo' => 'Tazza in ceramica', 'descrizione' => 'Tazza personalizzata per caffè o tè.', 'prezzo' => 12.50, 'id' => 2, 'img' => 'https://picsum.photos/seed/2/400/300'],
    //         ['titolo' => 'Zaino impermeabile', 'descrizione' => 'Perfetto per escursioni e viaggi.', 'prezzo' => 49.90, 'id' => 3, 'img' => 'https://picsum.photos/seed/3/400/300'],
    //         ['titolo' => 'Cuffie Bluetooth', 'descrizione' => 'Audio di alta qualità senza fili.', 'prezzo' => 89.00, 'id' => 4, 'img' => 'https://picsum.photos/seed/4/400/300'],
    //         ['titolo' => 'Tappetino mouse RGB', 'descrizione' => 'Illuminazione personalizzabile e superficie antiscivolo.', 'prezzo' => 25.99, 'id' => 5, 'img' => 'https://picsum.photos/seed/5/400/300'],
    //         ['titolo' => 'Set posate inox', 'descrizione' => 'Servizio da 24 pezzi in acciaio inox.', 'prezzo' => 34.75, 'id' => 6, 'img' => 'https://picsum.photos/seed/6/400/300'],
    //         ['titolo' => 'Notebook 15"', 'descrizione' => 'Laptop con 8GB RAM e SSD da 256GB.', 'prezzo' => 599.99, 'id' => 7, 'img' => 'https://picsum.photos/seed/7/400/300'],
    //         ['titolo' => 'Cornice digitale', 'descrizione' => 'Visualizza le tue foto preferite con facilità.', 'prezzo' => 65.00, 'id' => 8, 'img' => 'https://picsum.photos/seed/8/400/300'],
    //         ['titolo' => 'Smartwatch sportivo', 'descrizione' => 'Contapassi, battito cardiaco e notifiche.', 'prezzo' => 79.90, 'id' => 9, 'img' => 'https://picsum.photos/seed/9/400/300'],
    //         ['titolo' => 'Diffusore di aromi', 'descrizione' => 'Crea un atmosfera rilassante con oli essenziali.', 'prezzo' => 29.90, 'id' => 10, 'img' => 'https://picsum.photos/seed/10/400/300']
    //         ];



    //         foreach($listaArticoli as $articolo){
    //             if($id == $articolo['id']){
    //                 return view('dettaglioArticolo',['articolo'=>$articolo]);

    //             }

    //         }

    // }

    public function create(){
        return view('create');
    }


    public function store(ArticoloRequest $request){
    
       $articolo = Articolo::create([
        'titolo'=> $request->title ,
        'descrizione'=> $request->description,
        'prezzo'=> $request->price,
        'img' => $request->file('img')->store('/img')
       ]);

       

       return redirect()->route('homepage')->with('successMessage' , 'Hai inserito correttamente l articolo');
    }
}
