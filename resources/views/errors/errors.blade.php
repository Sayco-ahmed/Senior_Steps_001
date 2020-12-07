
@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $ero)
            <p> {{$ero}} </p>
        @endforeach
    </div>
@endif