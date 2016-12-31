<!-- Modal Structure -->
<div id="create-note" class="modal" style="height: auto">
    <div class="modal-content">
        <h4>Crea una nota</h4>
        <form action="{{ url('/note') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="input-field col l6 s12">
                    <i class="material-icons prefix">assignment</i>
                    <input
                        id="note-title"
                        type="text"
                        name="title"
                        class="validate">
                    <label for="note-title">Título</label>
                </div>
                <div class="input-field col l6 s12">
                    <i class="material-icons prefix">label</i>
                    <select id="note-category" name="category">
                        <option value="1">Escolar</option>
                        <option value="2">Hogar</option>
                        <option value="3">Deportes</option>
                        <option value="4">Proyectos</option>
                        <option value="5" selected>Otro</option>
                    </select>
                    <label for="note-category">Categoría</label>
                </div>
                <div class="input-field col l12 s12">
                    <i class="material-icons prefix">line_weight</i>
                    <textarea name="content" id="note-content" class="materialize-textarea"></textarea>
                    <label for="note-content">Contenido</label>
                </div>
            </div>
             <div class="modal-footer">
                <button type="submit" class="waves-effect waves-light btn teal darken-2">
                    <div class="valign-wrapper">
                        <i class="material-icons valign">note_add</i> Guardar
                    </div>
                </button>
                <button type="button" class="modal-action modal-close waves-effect waves-green btn-flat fn-btn-left-in-modal">
                    Cancelar
                </button>
            </div>
        </form>
    </div>

</div>
