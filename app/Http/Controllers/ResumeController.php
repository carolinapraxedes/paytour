<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('welcome');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'position' => 'required|max:255',
            'education' => 'required|in:ens_medio_incom,ens_medio_com,grad_incom,grad_com,pos_grad_incom,pos_grad_com',
            'resume'=> 'required|file|mimes:pdf,doc,docx|max:1024' ,
        ];

        $messages = [
            'name.required' => 'Por favor, preencha o campo Nome',
            'name.max' => 'O limite máximo de caracteres para o campo Nome é 255',

            'email.required' => 'Por favor, preencha o campo E-mail',
            'email.email' => 'Informe um email válido!',

            'position.required' => 'Por favor, preencha o campo Cargo desejado',
            'position.max' => 'O limite máximo de caracteres para o campo Cargo desejado é 255',

            'education.required' => 'Por favor, selecione uma opção no campo Escolaridade',
            'education.in' => 'Selecione uma opção válida para o campo Escolaridade',
            
            'resume.required' => 'Por favor, envie o seu currículo',
            'resume.mimes' => 'O currículo deve ser um arquivo do tipo: pdf, doc, docx',
            'resume.max' => 'O currículo não deve exceder 1MB'
        ];

        $validatedData = $request->validate($rules, $messages);

        $ip = $request->ip();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function show(Resume $resume)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function edit(Resume $resume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resume $resume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Resume  $resume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resume $resume)
    {
        //
    }
}
