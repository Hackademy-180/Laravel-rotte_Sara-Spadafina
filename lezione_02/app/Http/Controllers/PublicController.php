<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $prodotti = [
        [
            "id"=> 1,
            "titolo"=> "righello",
            "descrizione"=> "unità di misura in mm e cm",
            "prezzo"=> "100",
        ],
        [
            "id"=> 2,
            "titolo"=> "borraccia",
            "descrizione"=> "acciaio 1l",
            "prezzo"=> "569",
        ],
        [
            "id"=> 3,
            "titolo"=> "le meraviglie di Aulab",
            "descrizione"=> "corso intensivo",
            "prezzo"=> "fantamiglione",
        ],
    ];

    public function Welcome(){
        return view('welcome');
    }

    public function Chisiamo(){
        $nomi = ["Matteo", "Maria", "Maryna", "Elisabetta", "Simone"];
        return view('chi-siamo', ["names" => $nomi]);
    }

   public function Prodotti(){
        // 
        return view("prodotti", ["listaProdotti"=>$this->prodotti]);
   }

   public function Dettaglioprodotto($id){
    
    foreach($this->prodotti as $prodotto){
        if($prodotto["id"]==$id)
        return view("dettaglio-prodotto", ["prodotto"=>$prodotto]);
    }
}
}
