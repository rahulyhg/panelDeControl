{% extends "layout.php" %}

{% block cuerpo %}

{% if message %}
	<div class="alert alert-success" role="alert"> {{ message|raw}}</div>
{% endif %}

{% if error %}
	<div class="alert alert-error" role="alert"> {{ error|raw}}</div>
{% endif %}

<div class="jumbotron">
	<h1>Acceso servicios Google</h1>
	<p class="lead">Se necesita su autorización para acceder a su cuenta de Google</p>
</div>

<div class="form-group col-md-12">
  <strong>Gracias</strong> por proporcionarnos acceso a los servicios de Google.
</div>

<script type="text/javascript">

// Cerramos la ventana que solicitaba la autorización

window.opener.close();
window.history.replaceState('Anterior', 'Title', window.location.pathname);

</script>
{% endblock cuerpo %}

