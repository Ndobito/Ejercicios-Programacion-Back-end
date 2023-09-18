<h1 class="page-header"><?php echo $pvd[0]->nit != null ? $pvd[0]->razonS:'Nuevo Registro'; ?></h1>
<ol class="breadcrumb">
  <li><a href="?c=proveedor">Proveedores</a></li>
  <li class="active"><?php echo $pvd[0]->nit != null ? $pvd[0]->razonS : 'Nuevo Registro'; ?></li>
</ol>
<form id="frm-proveedor" action="?c=proveedor&a=Editar" method="post" enctype="multipart/
form-data">
    <input type="hidden" name="nit" value="<?php echo $pvd[0]->nit; ?>" />
    <div class="form-group">
        <label>Razón Social</label>
        <input type="text" name="razonS" value="<?php echo $pvd[0]->razonS; ?>" class="form-control" 
        placeholder="Ingrese Razón Social" data-validacion-tipo="requerido|min:100">
    </div>
    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="dir" value="<?php echo $pvd[0]->dir; ?>" class="form-control" place-
        holder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100">
    </div>
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="tel" value="<?php echo $pvd[0]->tel; ?>" class="form-control" place-
        holder="Ingrese teléfono proveedor" data-validacion-tipo="requerido|min:10">
    </div>
    <hr />
    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>
<script>
    $(document).ready(function(){
        $("#frm-proveedor").submit(function(){
            return $(this).validate();
        });
    })
</script>
