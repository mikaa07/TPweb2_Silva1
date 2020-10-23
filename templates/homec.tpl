{include file="header.tpl"}
{include file="navbar.tpl"}

  <div class="row">
    <div class="container col-lg-4 col-sm-12">
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
              

            </tr>
           {/foreach}
        </tr>

      </tbody>
    </table>
    </div>






    <div class="container col-lg-8 col-sm-12">
    <h1 class="titulo">{$Titulo2}</h1>
    <table class="table table-bordered table-dark col-9">
    <thead>
    <tr>

      <th scope="col">id_variedad</th>
      <th scope="col">Variedad</th>
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
          

      </tr>
      {/foreach}

      </tr>
    </tbody>
    </table>

    </div>


  </div>
  {include file="footer.tpl"}
