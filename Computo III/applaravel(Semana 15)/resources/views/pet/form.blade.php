    Nombre:
    <input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" /><br />
    Edad:
    <input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" /><br />
    Peso (Kg):
    <input type="number" name="weight_kg" id="weigth_kg" value="{{ isset($pet)?$pet->weight_kg:'' }}"><br />

    Propietario:
    <input type="text" name="owner" id="owner" value="{{ isset($pet)?$pet->owner:'' }}"><br />

    <!--mostrar propietarios-->
    <select name="owner_id">
        <option value=""></option>
        @foreach($owners as $own)
        <option value="{{$own->id}}">
            {{$own->full_name}}
        </option>
        @endforeach
    </select>

    <button type="submit">Guardar</button>