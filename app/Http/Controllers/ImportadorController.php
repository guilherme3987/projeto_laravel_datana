<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session; 


class ImportadorController extends Controller
{
    public function importar(Request $request) {
        
        //dd($request->all());

        //Validar se o arquivo é csv
        $request ->validate([
            'csv_file' => 'required|mimes:csv,txt'
        ]);

        if ($request -> file('csv_file')->isValid()){
            //dd("Arquivo válido");

            //Caminho
            $path = $request->file('csv_file')->getRealPath();

            //Criando array com conteúdo do arquivo
            $data = array_map('str_getcsv', file($path));
            
            //dd($data);

            Session::flash('success', 'Arquivo importado com sucesso');

        }else{
            dd("Arquivo inválido");
            Session::flash('error', 'Arquivo inválido');
        }

        //redirecionar para a página de dashboard
       return redirect()->route('dash');
    }
}
?>