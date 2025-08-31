<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class ImportadorController extends Controller
{
    public function importar(Request $request) {
        // Validação e processamento do arquivo de upload
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt|max:2048'
        ]);

        if ($request->file('csv_file')) {
            $path = $request->file('csv_file')->getRealPath();
            $data = array_map('str_getcsv', file($path));

            // Aqui você pode processar e salvar os dados no banco de dados
            // dd($data); // Para verificar os dados

            Session::flash('success', 'Arquivo CSV importado com sucesso!');
        } else {
            Session::flash('error', 'Nenhum arquivo enviado.');
        }

        return redirect()->route('dash');
    }
}
?>