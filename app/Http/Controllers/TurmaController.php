<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;

use App\Turma;
use App\Curso;
use App\Subscription;

class TurmaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($curso_id)
    {
        return view('turmas.create',compact('curso_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $curso_id)
    {
        $turma = new \App\Turma;
        $turma->inicio = Carbon::createFromFormat('d/m/Y', $request->inicio);
        $turma->fim = Carbon::createFromFormat('d/m/Y', $request->fim);
        $turma->curso_id = $request->curso_id;
        $turma->inscricao_aberta = true; // temporário
        $turma->save();
        return redirect("/cursos/$curso_id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function show(Turma $turma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function edit(Turma $turma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Turma $turma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turma  $turma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turma $turma)
    {
        //
    }

    public function subscription($curso_id, $turma_id)
    {
        $turma = Turma::find($turma_id);
        return view('turmas.subscription',compact('curso_id','turma'));
    }

    public function subscriptionStore(Request $request, $curso_id, $turma_id)
    {   
        $user = Auth::user();
        
        // Verifica se pessoa já está inscrita
        $already = Subscription::where([
            ['turma_id','=', (int)$turma_id],
            ['user_id','=', (int)$user->id]
        ])->get();
        if( !($already->isEmpty()) ){
            $request->session()->flash('alert-danger', 'Sorry =( Você já está inscrito nesse curso');
            return redirect('/');
        }
 
        $subscription = new Subscription;
        $subscription->turma_id = $turma_id;
        $subscription->user_id = $user->id;
        $subscription->motivacao = $request->motivacao;
        $subscription->save();
        $request->session()->flash('alert-success', 'Inscrição realizada com sucesso!');
        return redirect('/');
    }
}
