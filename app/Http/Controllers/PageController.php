<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about', [
            'name' => 'GoyyPW',
            'skills' => ['PHP', 'Laravel', 'MySQL', 'Git'],
        ]);
    }

    public function posts()
    {
        $posts = [
            ['title' => 'Belajar Laravel dari Nol', 'author' => 'Admin', 'date' => '2026-10-19'],
            ['title' => 'Mengenal Eloquent ORM', 'author' => 'Admin', 'date' => '2026-10-20'],
            ['title' => 'Tips Git untuk Pemula', 'author' => 'Admin', 'date' => '2026-10-21'],
        ];
        return view('pages.posts', compact('posts'));
    }

    public function contacts()
    {
        return view('pages.contacts', [
            'name' => 'GoyyPW',
            'kontak' => ['WA 081515679413'],
        ]);
    }
}
