@csrf
<div class="form-group">
    <label for="title">Titulo del Proyecto</label>
    <input type="text" name="title" class="form-control placeholder="" value="{{ old('title', $project->title) }}"><br>
    {!! $errors->first('title', '<small>:message</small><br>') !!}
</div>
<div class="form-group">
    <label for="description">Descripcion del Proyecto</label>
    <textarea type="text" class="form-control" name="description">{{ old('description', $project->description) }}</textarea>
    {!! $errors->first('description', '<small>:message</small><br>') !!}
</div>
<button class="btn btn-primary">{{ $btnText }}</button>
