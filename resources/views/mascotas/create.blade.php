<form action="{{route('mascotas.store')}}" method="POST">
    @csrf
    @include('mascotas.form')
</form>