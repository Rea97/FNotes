<div class="row">
    <div class="col l12">
        <nav class="deep-purple">
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="{{ url('/home') }}" class="breadcrumb">Home</a>
                    <a href="#!" class="breadcrumb">{{ $note->title }}</a>
                </div>
            </div>
        </nav>
        <div class="card-panel deep-purple darken-4">
            <form action="{{ url('api/note/'.$note->id) }}" method="post" class="white-text">
                {{ csrf_field() }}
                {{ method_field('put') }}
                <div class="row">
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">assignment</i>
                        <input
                                id="note-title"
                                type="text"
                                name="title"
                                value="{{ $note->title }}">
                        <label for="note-title">Título</label>
                    </div>
                    <div class="input-field col l6 s12">
                        <i class="material-icons prefix">label</i>
                        <select id="note-category" name="category">
                            <option value="1"
                                    {{ ($note->category_id == 1) ? 'selected': '' }}>
                                Escolar
                            </option>
                            <option value="2"
                                    {{ ($note->category_id == 2) ? 'selected': '' }}>
                                Hogar
                            </option>
                            <option value="3"
                                    {{ ($note->category_id == 3) ? 'selected': '' }}>
                                Deportes
                            </option>
                            <option value="4"
                                    {{ ($note->category_id == 4) ? 'selected': '' }}>
                                Proyectos
                            </option>
                            <option value="5"
                                    {{ ($note->category_id == 5) ? 'selected': '' }}>
                                Otro
                            </option>
                        </select>
                        <label for="note-category">Categoría</label>
                    </div>
                    <div class="input-field col l12 s12">
                        <i class="material-icons prefix">line_weight</i>
                        <textarea
                                name="content"
                                id="note-content"
                                class="materialize-textarea">{{ $note->content }}</textarea>
                        <label for="note-content">Contenido</label>
                    </div>
                    <div class="col l10 offset-l1">
                        <button class="waves-effect waves-light btn amber darken-3">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
