<?php

namespace App\Http\Controllers;


class MoneyController extends Controller
{
    // Affiche la liste des pièces de monnaie disponibles
    public function liste() {
        $money = [200 => 100, 100 => 100, 50 => 100, 20 => 100, 10 => 100, 5 => 100];
                
        return view('pages/monnayeur', ['moneyInfos' => $money]);
    }
}