{% extends "layout.php" %}

{% block tabActivo %}contacto{% endblock tabActivo %}

{% block cuerpo %}

{% if message %}
	<div class="alert alert-success" role="alert"> {{ message|raw}}</div>
{% endif %}

{% if error %}
	<div class="alert alert-error" role="alert"> {{ error|raw}}</div>
{% endif %}

<div class="jumbotron">
	<h1>Crear usuario</h1>
	<p class="lead">Indica los datos del nuevo usuario del sistema</p>
</div>


<form method="post" action="/alumnos/anotaciones/guardar" role="form">
		
		<input type="hidden" name="ID" value="{{comentario.ID}}"/>
		
		                              
		<div class="form-group col-md-12">
			<label for="comentario">Observaciones:</label>
			<textarea style="width:100%" rows="8" cols="50" class="form-control" id="comentario" name="descripcion" >{{comentario.COMENTARIO}}</textarea>
		</div>
										
		<div class="form-group col-md-9">
		</div>
		
		<div class="form-group col-md-3">
			<a href="/alumnos/anotaciones/cancelar" class="btn btn-danger">Cancelar</a>
			<button type="submit" class="btn btn-success">Aceptar</button>
		</div>										
 				
</form>	

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

{% endblock cuerpo %}

