<!-- Modal Structure -->
<div id="create-note" class="modal" style="height: auto">
    <div class="modal-content">
        <h4>Crea una nota</h4>
        <form action="" method="POST">
            <div class="row">
                <div class="input-field col l6 s12">
                    <i class="material-icons prefix">assignment</i>
                    <input
                        id="titulo-nota"
                        type="text"
                        name="titulo-nota"
                        class="validate">
                    <label for="titulo-nota">Título</label>
                </div>
                <div class="input-field col l6 s12">
                    <i class="material-icons prefix">label</i>
                    <select id="categoria-nota" name="categoria-nota">
                        <option value="1">Escolar</option>
                        <option value="2">Hogar</option>
                        <option value="3">Deportes</option>
                        <option value="3">Proyectos</option>
                        <option value="3">Ocio</option>
                    </select>
                    <label for="categoria-nota">Categoría</label>
                </div>
                <div class="input-field col l12 s12">
                    <i class="material-icons prefix">line_weight</i>
                    <textarea id="descripcion-nota" class="materialize-textarea"></textarea>
                    <label for="descripcion-nota">Descripción</label>
                </div>
            </div>
             <div class="modal-footer">
                <button type="submit" class="modal-action modal-close waves-effect waves-green btn-flat">
                    <i class="material-icons">note_add</i>
                    Guardar
                </button>
            </div>
        </form>
    </div>

</div>