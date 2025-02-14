<?php

// app/Http/Controllers/ApiController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class ApiController extends Controller
{
    // implementasmos la funcion index

    public function index(){
        $libros = Books::with('author')->get();
        return response() -> json($libros);
    }
}
