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
                            <option value="escolar"
                                    {{ ($note->category == 'escolar') ? 'selected': '' }}>
                                Escolar
                            </option>
                            <option value="hogar"
                                    {{ ($note->category == 'home') ? 'selected': '' }}>
                                Hogar
                            </option>
                            <option value="deportes"
                                    {{ ($note->category == 'deportes') ? 'selected': '' }}>
                                Deportes
                            </option>
                            <option value="proyectos"
                                    {{ ($note->category == 'proyectos') ? 'selected': '' }}>
                                Proyectos
                            </option>
                            <option value="ocio"
                                    {{ ($note->category == 'ocio') ? 'selected': '' }}>
                                Ocio
                            </option>
                        </select>
                        <label for="note-category">Categoría</label>
                    </div>
                    <div class="input-field col l12 s12">
                        <i class="material-icons prefix">line_weight</i>
                        <textarea
                                name="description"
                                id="note-description"
                                class="materialize-textarea">{{ $note->description }}</textarea>
                        <label for="note-description">Descripción</label>
                    </div>
                    <div class="col l10 offset-l1">
                        <button class="waves-effect waves-light btn amber darken-3">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>