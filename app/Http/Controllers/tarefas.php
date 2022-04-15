<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tarefas extends Controller
{

        public function index(){
            $tarefas = DB::select("
                select * from tarefas where status='0' order by data
            ");
            
        
            return view('index', ['tarefas' => $tarefas]);
        }

        public function adicionarTarefa(){
            return view('adicionar_tarefa');
        }

        public function cadastrarTarefa(Request $request){
            $titulo = $request->titulo;
            $data = $request->data;
            $mensagem = $request->mensagem;
            DB::insert("insert into tarefas (status,titulo,descricao,data) value ('0','$titulo','$mensagem','$data')");
            
            return redirect('/');
            
        }

        public function concluidoStatus1($status, $id){
            DB::update("
                update tarefas set status= '$status' where id='$id'
            ");
           
            echo "<script>location.href='/concluido'</script>";
        }

        public function concluido(){
            $tarefas = DB::select("
            select * from tarefas where status='1'
            ");
            return view('concluido', ['tarefas' => $tarefas]);
        }

        public function deletar($id){
            DB::delete("
                delete from tarefas where id='$id' 
            ");
            echo "<script>location.href='/concluido'</script>";
        }

}
