<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {
    return view('home');
    }

    public function detail($id) {
        $games = [
            0 => [
                'download' => 'https://we.tl/t-yj13T7a3Z4',
                'type' => 'computer',
                'name' => 'Cults Of Praywood',
                'description' => "Made in collaboration with 34BigThings, Cults of 
                                  Praywood is an online RTS in which 4 players impersonate 4 deities to take control of a small city.​

                                  The game takes place on a squared map, every corner of which is controlled by a god. From there, each player will be able to expand their influence to the rest of the map. To do so, they will have to send their cultists to the connected territories, place totems on the ones they conquered and use their god's special ability.",
                'img' => '/img/cultsofpraywood.jpg',
                'video' => '/videos/CultsOfPrayWood.mp4',
                'contributions' => [ 'Server/Client interactions',
                                    'Map logic and data structures',
                                    'Link logic',
                                    'Unit movement',
                                    'Units AI and path selection',
                                    'Tiles logic and data structures',
                                    'Tile and link shaders'
                                    ],
                 ],

            5 => [
                'download' => 'PlaceMemeory/PlaceMemory.apk',
                'type' => 'mobile',
                'name' => 'Place Memory',
                'description' => "Place Memory is a serious game for mobile 
                                  devices designed to improve the user's spatial memory. It is set in an actual room of the University of Udine, where the player will have to memorize some objects and their position to then put everything back in its right place.",
                'img' => '/img/place_memory.png',
                'video' => '/videos/placememory.mkv', 
                'contributions' => [],
                ],

            3 => [
                'download' => 'SnakePong/SnakePong.zip',
                'type' => 'computer',
                'name' => 'Snake Pong',
                'description' => "Born from two old classics, Snake Pong brings 
                                  together the controls of Snake and the rules of Pong. Try to score as many points as you can using your snake's body instead of the traditional Pong bat.",
                'img' => '/img/SnakePong.png',
                'video' => '/videos/SnakePong.mp4',
                'contributions' => ['Spawn logic',
                                    'Ball physics',
                                    'Snake size increase and boost'
                                   ],
                ],

            1 => [
                'download' => 'DiceyGalaxy/DiceyGalaxy.apk',
                'type' => 'mobile',
                'name' => 'Dicey Galaxy',
                'description' => "Explore the universe while conquering every 
                                  galaxy ahead of you! Get new resources by rolling the dice and keep discovering new planets to find what you need to upgrade your spaceships. You can do that and so much more by playing this mobile game!",
                'img' => '/img/dicey_galaxy.jpg',
                'video' => '/videos/DiceyGalaxy.mp4',
                'contributions' => ['Resources data structures and logic',
                                    'Galaxy logic and timings',
                                    'Savings logic',
                                    'Hangar ship movements',
                                    'Mission gameplay',
                                    'Dice rolls'],
                 ],
            
            4 => [
                'download' => 'https://we.tl/t-4kqBvdyahv',
                'type' => 'computer',
                'name' => 'Soul Laundry',
                'description' => "Who said that doing your laundry is boring? 
                                  Certainly not someone that instead of having to wash their clothes is washing the dirty souls of the dead, while a devil is trying to consume them. Take on the challenge in this first-person simulation game!",
                'img' => '/img/SoulLaundry.png',
                'video' => '/videos/SoulLaundry.mp4',
                'contributions' => ['Spawn logic and algorithm',
                                    'Environment animations',
                                    'Objects behaviour and interactions',
                                    'Gameplay logic'],
                 ],
        ];

        $game = $games[$id];

        return view('project',compact('game'));
    }
}
