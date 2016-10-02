<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Note;
use App\Repositories\NoteRepository;

class NotesController extends Controller
{
    /**
     * Instancia del repositorio de notas.
     * @var NoteRepository
     */
    protected $notes;

    public function __construct(NoteRepository $notes)
    {
        $this->notes = $notes;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->get('search')) {
            //$notes = Note::where('title', 'LIKE', "%{$request->get('search')}%")
            //       ->paginate(6);
            $search = true;
            $notes = $this->notes->forUserSearch($request->user(), $request->get('search'));
            return view('sections.home.index', compact('notes', 'search'));
        }
        $search = false;
        $notes = $this->notes->forUser($request->user());
        //$notes = Note::OrderBy('created_at', 'desc')->paginate(12);
        return view('sections.home.index', compact('notes', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'title' => 'required',
          'category' => 'required',
          'description' => 'required'
        ]);
        $request->user()->notes()->create([
            'title' => $request->input('title'),
            'category' => $request->input('category'),
            'description' => $request->input('description')
        ]);
        return redirect()
                ->to('/home')
                ->with('message', 'Nota creada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $note = Note::findOrFail($id);
        return view('sections.home.show', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        Note::findOrFail($id)->update($request->all());
        return redirect()
                ->to('/home')
                ->with('message', 'Cambios guardados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $note = Note::findOrFail($id);
        $note->delete();
        return redirect()
                ->to('/home')
                ->with('message', 'Nota eliminada correctamente!');
    }
}
