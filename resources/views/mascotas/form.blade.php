<div>
    <label for="name">Nombre</label>
    <input type="text" name="name"  value="{{ old('name', @$mascota->name)}}" />
</div>
<div>
    <label for="description">Descripción</label>
    <input type="text" name="description"  value="{{ old('description', @$mascota->description)}}" />
</div>
<div>
    <label for="type">Tipo</label>
    <select name="type" id="">
        <option value="">seleccione</option>
        <option value="Dog">Dog</option>
        <option value="Car">Car</option>
        <option value="Turtle">Turtle</option>
    </select>
</div>

<div>
    <label for="birthday">Fecha de nacieminto</label>
    <input type="date" name="birthday"  value="{{ old('birthday', @$mascota->birthday)}}" />
</div>

<button type="submit">guardar</button>