<div class="bg-light mb-5">
    <div class="d-flex justify-content-between">
        <div class="mx-2 mt-4">
            <h4>{{ $cantact->firstName }} <small><i>Envoyé : {{ $cantact->created_at->diffForHumans() }}</i></small></h4>
        </div>
        <div class="mt-4 row mx-2">
            <div>
                <a href="{{ route('cantact_display_edit', $cantact) }}" class="btn btn-info">Edit</a>
            </div>
            <div>
                <form action="{{ route('cantact_destroy', $cantact) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" id="controle" >Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-2 mx-5 border rounded">
        <p> {!! nl2br(e($cantact->description)) !!}</p>
    </div>
</div>