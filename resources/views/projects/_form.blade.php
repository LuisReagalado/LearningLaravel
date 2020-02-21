@csrf
<label>Titulo del Proyecto:
			<input type="text" name="title" placeholder="Titulo de tu proyecto" value="{{ old('title', $project->title) }}">
		</label><br>

		<label>Url del Proyecto:
			<input type="text" name="url" placeholder="Url de tu proyecto" value="{{ old('url', $project->url)}}">
		</label><br>

		<label>Descripcion del Proyecto: <br>
			<textarea name="description" placeholder="Descripcion de tu proyecto">{{ old('description', $project->description)}}</textarea></label>

		<br>
		<button>{{$btn}}</button>

