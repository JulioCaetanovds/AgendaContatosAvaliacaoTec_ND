<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // buscar contatos
        $contacts = \App\Models\Contact::all();

        return view('contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:contacts,email|max:255',
            'city_state' => 'required|string|max:255',
            'category' => 'required|in:Aluno,Responsável,Professor,Funcionário,Gestor',
        ]);

        // criacao
        \App\Models\Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contato criado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(\App\Models\Contact $contact)
    {
        return view('contacts.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(\App\Models\Contact $contact)
    {
        return view('contacts.edit', ['contact' => $contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, \App\Models\Contact $contact)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255|unique:contacts,email,' . $contact->id,
            'city_state' => 'required|string|max:255',
            'category' => 'required|in:Aluno,Responsável,Professor,Funcionário,Gestor',
        ]);

        // atualizacao
        $contact->update($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contato atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(\App\Models\Contact $contact)
    {
        $contact->delete();

        return redirect()->route('contacts.index')->with('success', 'Contato excluído com sucesso!');
    }
}
