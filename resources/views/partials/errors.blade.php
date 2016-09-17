@if (count($errors) > 0)
<div class="row">
    <div class="col s12 m12 l12">
        <div class="card-panel red white-text">
            <span>
                <b>Please, check the follow messages errors:</b>
            </span>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif