{include file="header.tpl"}
{include file="navbaradmin.tpl"}

  <div class="row">
    <div class="container col-lg-6 col-sm-12">
      <h1 class="titulo">{$Titulo1}</h1>
    <table class="table table-bordered table-dark col-3">
      <thead>
      <tr>
        <th scope='col'>id_variedad</th>
        <th scope='col'>Producto</th>
        <th scope='col'>Precio</th>
        
      </tr>
    </thead>
    <tbody>
        <tr>
          {foreach from=$productos item=producto}
            <tr>
              <td>{$producto['id_variedad']}</td>
              <td>{$producto['Nombre_producto']}</td>
              <td>{$producto['Precio']}</td>
              
              <td >
                <a class="btn btn-danger btn-block" href="borrarProducto/{$producto['id_producto']}" role="button">BORRAR</a>


                <a class="btn btn-warning btn-block" href="editarProducto/{$producto['id_producto']}" role="button">EDITAR</a>
              </td>
            </tr>
           {/foreach}
        </tr>

      </tbody>
    </table>
      <a  href="addProducto" class="btn btn-success btn-lg active " role="button" aria-pressed="true">agregar Producto</a>
    </div>






    <div class="container col-lg-6 col-sm-12">
    <h1 class="titulo">{$Titulo2}</h1>
    <table class="table table-bordered table-dark col-9">
    <thead>
    <tr>

      <th scope="col">id_variedad</th>
      <th scope="col"> Variedad</th>
      <th scope="col">Estado</th>
      
    </tr>
    </thead>
    <tbody>
    <tr>
     {foreach from=$variedades item=variedad}
      <tr>
          <td>{$variedad['id_variedad']}</td>
          <td>{$variedad['Nombre_variedad']}</td>
          <td>{$variedad['Estado']}</td>
          
          <td >
            <a class="btn btn-danger btn-block" href="borrar/{$variedad['id_variedad']}" role="button">BORRAR</a>
            <a class="btn btn-warning btn-block" href="editar/{$variedad['id_variedad']}" role="button">EDITAR</a>
          </td>
      </tr>
      {/foreach}

      </tr>
    </tbody>
    </table>
    <a  href="addVariedad" class="btn btn-success btn-lg active " role="button" aria-pressed="true">Agregar Variedad</a>

    </div>


  </div>
  {include file="footer.tpl"}
