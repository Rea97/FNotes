<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Note;
use App\Category;
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
            return view('sections.notes.index', compact('notes', 'search'));
        }
        $search = false;
        $notes = $this->notes->forUser($request->user());
        //$notes = Note::OrderBy('created_at', 'desc')->paginate(12);
        return view('sections.notes.index', compact('notes', 'search'));
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
        /*$note = new Note();
        $note->title = $request->input('title');
        $note->category_id = $request->input('category');
        $note->user_id = $request->user()->id;
        $note->description = $request->input('description');
        $note->save();*/

        /* Esta forma tambien es valida
        $note = new Note();
        $note->title = $request->input('title');
        $note->category()->associate(Category::find($request->input('category')));
        $note->user()->associate($request->user());
        $note->description = $request->input('description');
        $note->save();
        */
        /* Esta forma ya no funcionó al agregar la llave foranea de las categorias
         $request->user()->notes()->create([
            'title' => $request->input('title'),
            'category_id' => (int) $request->input('category'),
            'description' => $request->input('description')
        ]);
        ¨*/
        return redirect()
                ->to('/notes')
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
        return view('sections.notes.show', compact('note'));
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
    public function update(Request $request, Note $note)
    {
        $this->authorize('authChangesOnUserNote', $note);
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
            'description' => 'required'
        ]);
        //Note::findOrFail($id)->update($request->all());
        $note->update($request->all());
        return redirect()
                ->to('/notes')
                ->with('message', 'Cambios guardados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        $this->authorize('authChangesOnUserNote', $note);
        //$note = Note::findOrFail($note->id);
        $note->delete();
        return redirect()
                ->to('/notes')
                ->with('message', 'Nota eliminada correctamente!');
    }
}
