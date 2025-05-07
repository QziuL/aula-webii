<?php

namespace App\Http\Controllers;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class RelatorioController extends Controller
{
    function emitirRelatorio() {
        $dompdf = new Dompdf();

        $dados = ['curso'=>'Análise e Desenvolvimento de Sistemas', 'alunos'=>['blah', 'bleh', 'blih'], 'duracao'=>6];

        $data = date('d/m/Y');
        $html = View::make('relatorio.curso', ['dados' => $dados, 'data' => $data])->render();

        $dompdf->loadHtml($html);        

        $dompdf->setPaper('A4', 'landscape');

        $dompdf->render();

        $dompdf->stream();
    }
}
