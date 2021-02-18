<div class="bg-light mb-5">
    <div class="d-flex justify-content-between">
        <div class="mx-2 mt-4">
            <h4>{{ $cantact->firstName }} <small><i>Envoyé : {{ $cantact->created_at->diffForHumans() }}</i></small></h4>
        </div>
        <div class="mt-4 row mx-2">
            <div>
                <input type="button" value="Editer" class="btn btn-primary">
            </div>
            <div>
                <form action="{{ route('cantact.destroy', $cantact) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    <div class="mt-2 mx-5 border rounded">
        <p>{{ $cantact->description }}</p>
    </div>
</div>