<div class="row">
    <div class="col s12">
        <div class="card small blue-grey darken-1">
            <div class="card-content white-text">
                <span class="card-title">Hola, bienvenido {{ Auth::user()->name }}</span>
                <p>Permiteme darte mis mas cordiales saludos mientras te invito a que crees tú primera nota :).</p>
            </div>
            <div class="card-action">
                <button id="boton-modal" type="button" class="waves-effect waves-light btn" data-target="create-note">
                    Crea una nota
                </button>
            </div>
        </div>
    </div>
</div>