@if(count($mascotas)>0)
<option disabled selected value="">Selecciona una opcion</option>
@foreach($mascotas as $mascota)
    <option value="{{$mascota->id}}">{{$mascota->nombre}}</option>
@endforeach
@else
<option disabled selected value="">CLIENTE NO TIENE MASCOTAS</option>
@endif