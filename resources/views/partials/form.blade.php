<div class="form-group">
   <label for="title">Título</label>
   <input type="text" name="title" id="title" class="form-control" @if(!empty($Pelicula)) value="{{$Pelicula->title}}"@endif>
</div>

<div class="form-group">
   <!-- TODO: Completa el input para el año   --> 
   <label for="year">Año de estreno</label>
   <input type="text" name="year" id="year" class="form-control" @if(!empty($Pelicula)) value="{{$Pelicula->year}}"@endif>
</div>

<div class="form-group">
   <!-- {{-- TODO: Completa el input para el director --}} -->
   <label for="director">Director de la pelicula</label>
   <input type="text" name="director" id="director" class="form-control" @if(!empty($Pelicula)) value="{{$Pelicula->director}}"@endif>
</div>

<div class="form-group">
   <!-- {{-- TODO: Completa el input para el poster --}} -->
   <label for="poster">URL del poster</label>
   <input type="text" name="poster" id="poster" class="form-control" @if(!empty($Pelicula)) value="{{$Pelicula->poster}}"@endif>
</div>

<div class="form-group">
   <label for="synopsis">Resumen</label>
   <textarea name="synopsis" id="synopsis" class="form-control" rows="3">@if(!empty($Pelicula)){{$Pelicula->synopsis}}
   @endif

   </textarea>
</div>

<div class="form-group text-center">
   <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
      Guardar película
   </button>
</div>