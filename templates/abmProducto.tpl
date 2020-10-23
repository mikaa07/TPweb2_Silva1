{include file="header.tpl"}

    <h1>{$Titulo}</h1>
    <div class="formproducto col-4">
      <form method="post" action="{$home}/guardaProducto" class="needs-validation" novalidate>
        <div class="form">
          <h3 class="titulo">FORMULARIO PRODUCTO</h3>
          <div class="col-11 ">

            <input type="hidden" class="form-control" id="id_producto" name="id_producto"
             placeholder="id producto" value="{$producto['id_producto']}" >

          </div>
          <div class="col-11 ">
            <label class="titulo"for="validationTooltip01">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto"
             placeholder="Nombre de Producto" value="{$producto['Nombre_producto']}" required>
            <div class="valid-tooltip">

            </div>
          </div>
          <div class="col-11">
            <label class="titulo"for="validationTooltip02">Precio</label>
            <input type="text" class="form-control" id="precio" name="precio"placeholder="Precio" value="{$producto['Precio']}" required>
            <div class="valid-tooltip">

            </div>
          </div>

            </div>
          </div>

        </div>
        <button class="btn btn-success" type="submit">Cargar</button>
      </form>
    </div>
{include file="footer.tpl"}
