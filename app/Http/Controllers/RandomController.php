<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
    
        $data = [
            'elemento_1' => [
                'number' => 1,
                'title' => 'Random 1',
                'icon' => 'images/icons/icon-1.svg',
                'subtitle' => 'Lorem ipsum dolor sit amet, has stet nonumy senserit duo debet.'
            ],
            'elemento_2' => [
                'number' => 2,
                'title' => 'Random 2',
                'icon' => 'images/icons/icon-2.svg',
                'subtitle' => 'Te cum quidam eripuit, postea integre intellegat id vim.'
            ],
            'elemento_3' => [
                'number' => 3,
                'title' => 'Random 3',
                'icon' => 'images/icons/icon-3.svg',
                'subtitle' => 'Eam alii adolescens ad, pri tempor libris antiopam te.'
            ],
            'elemento_4' => [
                'number' => 4,
                'title' => 'Random 4',
                'icon' => 'images/icons/icon-4.svg',
                'subtitle' => 'Iriure accumsan intellegam eam ex, reque graecis laboramus vim id.'
            ],
            'elemento_5' => [
                'number' => 5,
                'title' => 'Random 5',
                'icon' => 'images/icons/icon-5.svg',
                'subtitle' => 'Vix te dicat veniam torquatos, reque nonumy habemus an sit.'
            ],
            'elemento_6' => [
                'number' => 6,
                'title' => 'Random 6',
                'icon' => 'images/icons/icon-6.svg',
                'subtitle' => 'Dolorem expetendis no duo, pro facer labores no, mel et dicant labitur legendos.'
            ],
            'elemento_7' => [
                'number' => 7,
                'title' => 'Random 7',
                'icon' => 'images/icons/icon-7.svg',
                'subtitle' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.'
            ],
            'elemento_8' => [
                'number' => 8,
                'title' => 'Random 8',
                'icon' => 'images/icons/icon-8.svg',
                'subtitle' => 'Eu fugiat nulla pariatur excepteur sint occaecat cupidatat non proident.'
            ],
            'elemento_9' => [
                'number' => 9,
                'title' => 'Random 9',
                'icon' => 'images/icons/icon-9.svg',
                'subtitle' => 'Sunt in culpa qui officia deserunt mollit anim id est laborum.'
            ]

        ];
    
        $json = json_encode($data);
        return view('layout/app')->with('data', $json);

    }

}