<div class="row">
    @include ('partials.components.errors')
    @foreach ($notes as $note)
        <div class="col s12 m6 l4">
            <div class="card small deep-purple">
                <div class="card-content white-text">
                    <span class="card-title truncate">{{ $note->title }}</span>
                    <p>{{ str_limit($note->description) }}</p>
                    <div class="chip fn-category-label">
                        <h6><i>{{ $note->category->name}}</i></h6>
                    </div>
                </div>
                <div class="card-action">
                    <a href="{{ url('note/'.$note->id) }}"
                       class="left btn waves-effect waves-light blue">
                        <i class="material-icons">edit</i>
                    </a>
                    <form action="{{ url('/note/'.$note->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="right btn waves-effect waves-light red">
                            <i class="material-icons">delete</i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div>
{!! $notes->render() !!}
