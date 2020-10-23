{include file="header.tpl"}

<div class="banner">

<h3 class="titulo">FORMULARIO VARIEDAD</h3>
<form method="post" action="agregar">
<div class="container">

  
</div>

<div class="form-group">
  <label class="titulo"for="nombre_variedad">nombre_variedad</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="nombre_variedad">
</div>
<div class="form-group">
  <label class="titulo" for="estado">estado</label>
  <input type="text" class="form-control" id="exampleInputPassword1"name="estado">
</div>

Producto
<select class="custom-select" name="id_producto">
    <option selected>producto</option>
    {foreach from=$productos item=producto}
      <option value= {$producto['id_producto']}  >{$producto['Nombre_producto']}</option>
     {/foreach}
  </select>
<button type="submit" class="btn btn-success">Crear Variedad</button>
</form>
{include file="footer.tpl"}
