{include file="header.tpl"}
<h3 class="titulo">FORMULARIO VARIEDAD</h3>
<form method="POST" action="{$home}/guardarEditar">
        <input type="hidden" class="form-control" id="id_variedad" name="idvariedad" value="{$variedad['id_variedad']}">
        <div class="form-group">
          <label for="nombre_variedad">Nombre_variedad</label>
          <input type="text" class="form-control" id="nombrevariedad" name="nombrevariedad" value="{$variedad['Nombre_variedad']}">
        </div>
        <div class="form-group">
          <label for="estado">Estado</label>
          <input type="text" class="form-control" id="estado" name="estado" value="{$variedad['Estado']}">
        </div>
        <button  class="btn btn-warning" type= "submit">Editar Variedad</button>
  </form>


{include file="footer.tpl"}
