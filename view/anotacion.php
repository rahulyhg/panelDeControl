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
	<h1>Anotación</h1>
	<p class="lead">Todos los campos son obligatorios</p>
</div>
           
     <div class="row">
			<div class="form-group col-md-8">
				<label for="alumnoaImplicado">Alumno/a implicado</label>
				<input type="text" class="form-control ui-autocomplete-input" id="alumnoaImplicado" value="" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
			</div>
			
			<div class="form-group col-md-2 ">
				<label for="fecha">Fecha:</label>
				<div class="input-group date">

						<input type="text" id="fecha" name="fecha" class="form-control" value="15/02/2019"><span class="input-group-addon"><i class="fa fa-calendar"></i></span>

			
				</div>
			</div>
			
			<div class="form-group col-md-2">
				<label for="hora">Hora:</label>
				 <select class="form-control" id="hora" name="hora">
				  <option>Primera</option>
				   <option>Segunda</option>
				   <option>Tercera</option>
				   <option>Recreo</option>
				   <option>Cuarta</option>
				   <option>Quinta</option>
				   <option>Sexta</option>
				 </select>
			</div>
		</div>
		
<form method="post" action="/alumnos/anotaciones/guardar" role="form">
		
		<input type="hidden" name="ID" value="{{comentario.ID}}"/>
		<input type="hidden" name="ID_ALUMNO" value="{{comentario.ID_ALUMNO}}"/>
		
		                              
		                                <div class="form-group col-md-12">
			                                <label for="comentario">Descripción:</label>
			<textarea style="width:100%" rows="8" cols="50" class="form-control" id="comentario" name="descripcion" >{{comentario.COMENTARIO}}</textarea>
		</div>
										
		<div class="form-group col-md-9"></div>
			
		<div class="form-group col-md-3">
			<a href="/alumnos/anotaciones/aceptar" class="btn btn-success">Aceptar</a>
			<button type="submit" class="btn btn-danger">Cancelar</button>
		</div>										
 				
</form>





<script type="text/javascript">
			
 		$(document).ready(function(){
			$('.input-group.date').datepicker({
				format: "dd/mm/yyyy",
				weekStart: 1,
				todayBtn: "linked",
				language: "es",
				daysOfWeekDisabled: "0,6",
				orientation: "auto",
				autoclose: true,
				container: '.input-group' 
			});
			
 			$( "#alumnoaImplicado" ).autocomplete({
			  source: "/alumnos/buscar/nombre",
			  minLength: 3,
			  select: function (event,ui){
				$.ajax({
					url:'/alumnos/buscar/id',
					  type:'POST',
					  dataType:'json',
					  data:{ valor:ui.item.id}
				  }).done(function(respuesta){
					  $("#id_alumno").val(respuesta.ID);
					  $("#cursoygrupo").val(respuesta.CURSO);
					  $("#tutor").val(respuesta.TUTOR);
				  });  
			  }
			});
 			
 		});
 		
 		
 	</script>
 	
 	
 	
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
{% endblock cuerpo %}

