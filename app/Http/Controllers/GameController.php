<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    private $games = [
        ['id' => 1, 'title' => 'Elden Ring', 'cover' => 'https://i.3djuegos.com/juegos/16678/elden_ring/fotos/ficha/elden_ring-5953540.webp', 'description' => 'Un RPG de mundo abierto creado por FromSoftware que combina exploración, dificultad desafiante y una narrativa oscura escrita junto a George R. R. Martin.'],
        ['id' => 2, 'title' => 'God of War Ragnarök', 'cover' => 'https://i.3djuegos.com/juegos/17544/god_of_war_ragnarok/fotos/ficha/god_of_war_ragnarok-5732812.webp', 'description' => 'Kratos y Atreus se enfrentan al fin de los tiempos nórdico en una aventura épica llena de combates intensos, mitología y evolución emocional.'],
        ['id' => 3, 'title' => 'Horizon Forbidden West', 'cover' => 'https://i.3djuegos.com/juegos/17054/horizon_zero_dawn_2/fotos/ficha/horizon_zero_dawn_2-5596826.webp', 'description' => 'Acompaña a Aloy hacia el Oeste Prohibido en un mundo postapocalíptico dominado por máquinas, con paisajes espectaculares y una historia profunda.'],
        ['id' => 4, 'title' => 'The Last of Us Part II', 'cover' => 'https://i.3djuegos.com/juegos/14236/the_last_of_us_2/fotos/ficha/the_last_of_us_2-4977781.webp', 'description' => 'Una narrativa madura y emocional que sigue la historia de Ellie en un viaje marcado por la venganza, el trauma y la búsqueda de redención.'],
        ['id' => 5, 'title' => 'Cyberpunk 2077', 'cover' => 'https://i.3djuegos.com/juegos/8873/cyberpunk/fotos/ficha/cyberpunk-4889717.webp', 'description' => 'Un RPG futurista ambientado en Night City, donde encarnas a V en una aventura llena de decisiones, implantes cibernéticos y conspiraciones corporativas.'],
        ['id' => 6, 'title' => 'Ghost of Tsushima', 'cover' => 'https://i.3djuegos.com/juegos/15027/proyecto_sucker_punch/fotos/ficha/proyecto_sucker_punch-5215557.webp', 'description' => 'Sigue a Jin Sakai en su lucha por liberar Tsushima, combinando sigilo, combate samurái y una estética inspirada en el cine japonés clásico.'],
        ['id' => 7, 'title' => 'Resident Evil Village', 'cover' => 'https://i.3djuegos.com/juegos/17369/resident_evil_8/fotos/ficha/resident_evil_8-5391187.webp', 'description' => 'Terror y acción se mezclan en esta entrega donde Ethan Winters explora un misterioso pueblo lleno de criaturas grotescas y secretos oscuros.'],
        ['id' => 8, 'title' => 'Hogwarts Legacy', 'cover' => 'https://i.3djuegos.com/juegos/16217/harry_potter__2018_/fotos/ficha/harry_potter__2018_-5953611.webp', 'description' => 'Vive tu propia aventura en el mundo mágico del siglo XIX, asistiendo a Hogwarts, aprendiendo hechizos y explorando un universo lleno de criaturas y misterios.'],
    ];

    public function index()
    {
        $games = $this->games;
        return view('listaGeneral', compact('games'));
    }

    public function show($id)
    {
        $game = collect($this->games)->firstWhere('id', $id);

        if (!$game) {
            abort(404);
        }

        return view('fichaJuego', compact('game'));
    }
}