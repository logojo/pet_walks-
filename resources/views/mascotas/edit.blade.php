<form action="{{route('mascotas.update', $mascota->id )}}" method="POST">
    @csrf
    @method('PUT')
    @include('mascotas.form')
</form>