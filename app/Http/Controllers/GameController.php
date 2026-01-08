<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = [
            ['id' => 1, 'title' => 'Elden Ring',               'cover' => 'https://i.3djuegos.com/juegos/16678/elden_ring/fotos/ficha/elden_ring-5953540.webp'],
            ['id' => 2, 'title' => 'God of War Ragnarök',      'cover' => 'https://i.3djuegos.com/juegos/17544/god_of_war_ragnarok/fotos/ficha/god_of_war_ragnarok-5732812.webp'],
            ['id' => 3, 'title' => 'Horizon Forbidden West',   'cover' => 'https://i.3djuegos.com/juegos/17054/horizon_zero_dawn_2/fotos/ficha/horizon_zero_dawn_2-5596826.webp'],
            ['id' => 4, 'title' => 'The Last of Us Part II',   'cover' => 'https://i.3djuegos.com/juegos/14236/the_last_of_us_2/fotos/ficha/the_last_of_us_2-4977781.webp'],
            ['id' => 5, 'title' => 'Cyberpunk 2077',           'cover' => 'https://i.3djuegos.com/juegos/8873/cyberpunk/fotos/ficha/cyberpunk-4889717.webp'],
            ['id' => 6, 'title' => 'Ghost of Tsushima',        'cover' => 'https://i.3djuegos.com/juegos/15027/proyecto_sucker_punch/fotos/ficha/proyecto_sucker_punch-5215557.webp'],
            ['id' => 7, 'title' => 'Resident Evil Village',    'cover' => 'https://i.3djuegos.com/juegos/17369/resident_evil_8/fotos/ficha/resident_evil_8-5391187.webp'],
            ['id' => 8, 'title' => 'Hogwarts Legacy',          'cover' => 'https://i.3djuegos.com/juegos/16217/harry_potter__2018_/fotos/ficha/harry_potter__2018_-5953611.webp'],
        ];

        return view('listaGeneral', compact('games'));
    }
}
