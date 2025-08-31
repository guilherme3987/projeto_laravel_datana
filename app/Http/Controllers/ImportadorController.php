<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ImportadorController extends Controller
{
    public function importar(Request $request) {
        echo("Importar CSV funcionando!");
    }
    
}


?>