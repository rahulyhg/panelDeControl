{% extends "layout.php" %}

{% block tabActivo %}comentarios{% endblock tabActivo %}

{% block cuerpo %}

{% if message %}
	<div class="alert alert-success" role="alert"> {{ message|raw}}</div>
{% endif %}

{% if error %}
	<div class="alert alert-error" role="alert"> {{ error|raw}}</div>
{% endif %}

<div class="jumbotron">
	<h1>Partes registrados</h1>
	<p class="lead">Listado de partes</p>
</div>

<table class="table table-bordered table-hover" id="temas">				
	<thead>	
		<tr>			
			<th>ID</th>	
			<th>Alumno</th>
			<th>Email</th>
			<th>Clave</th>
			<th>Hora</th>
		</tr>	
	</thead>
	<tbody style=" .table-hover">
		{% for comentario in comentarios %}
			<tr>
			{% for campo, valor in comentario %}
				<td>{{valor}}</td>
			{% endfor %}
				<td>
					<a href="/usuarios/borrar?id={{comentario.ID}}"><img width="32px" src="http://findicons.com/files/icons/2226/matte_basic/32/trash_can1.png"></a>
					<a href="/usuarios/editar?id={{comentario.ID}}"><img width="32px" src="http://findicons.com/files/icons/2226/matte_basic/32/document_edit.png"></a>			
				</td>
			</tr>
		{% endfor %}
<<<<<<< HEAD
	</tbody>
</table>

=======
		
	    {% set url=utils.protegerURL('/borrar?id=' ~ comentario.ID) %}
		<a href="{{url}}"><img width="32px" src="http://findicons.com/files/icons/2226/matte_basic/32/trash_can1.png"></a>
		{% set url=utils.protegerURL('/editar?id=' ~ comentario.ID) %}
		<a href="{{url}}"><img width="32px" src="http://findicons.com/files/icons/2226/matte_basic/32/document_edit.png"></a><br>
		----------------<br>
{% endfor %}
>>>>>>> 574d6f2d0436689f8286622141a5d25b0841bdeb
	
{% endblock cuerpo %}

