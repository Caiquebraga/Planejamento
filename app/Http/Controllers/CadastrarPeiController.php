<?php

namespace App\Http\Controllers;
use App\Models\Planejamento;

use Illuminate\Http\Request;
use Whoops\Run;

class CadastrarPeiController extends Controller
{

    protected $planejamento;

    public function __construct(Planejamento $planejamento) {

        $this->planejamento = $planejamento;
    }
    
            public function cadastrar(Request $request){
                
                $request->validate([
                    'plaDescricao' => 'required|string',
                    'plaDataInicio' => 'required|date',
                    'plaDataFinal' => 'required|date',
                    'plaPublicacao' => 'required|boolean'
                ]);

                // acessando planejamento por meio do $this, propriedade "planejamento da classe CadastrarPeiController"
                $this->planejamento->create([
            
                //acessando os inputs do frontend por meio da request para criar novos planejamentos
                    'plaDescricao' => $request->input('plaDescricao'),
                    'plaDataInicio' => $request->input('plaDataInicio'),
                    'plaDataFinal' => $request->input('plaDataFinal'),
                    'plaPublicacao' => $request->input('plaPublicacao'),
                ]);

                return redirect()->route('lista_pei/index')->with('success', 'Planejamento criado com sucesso!');
            }

}
