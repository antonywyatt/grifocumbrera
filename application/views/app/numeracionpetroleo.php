<div class="container p-4">
    <div class="row">
    <div style="text-align: center;color:#ffc809">
        <h4>Numeración de DIESEL</h4>
    </div>
    <div class="col-sm-12 col-xl-6">
        <div class="card">
        <form method="post" action="numeraciond/agregar">
        <div class="card-body">
            <label class="card-title">Sacar Numeración</label>
                <div class="col-sm-12 mb-4">
                    <div class="form-outline">
                        <input
                        required
                        autocomplete="off"
                        type="text" 
                        class="form-control" 
                        name="precio_diesel" 
                        maxlength="5" 
                        id="typeText"
                        value="15"
                        onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" 
                        />
                        <label class="form-label" for="typeText">Precio actual</label>
                    </div>
                </div>
                <div class="col-sm-12 mb-4">
                    <input
                    required
                    autocomplete="off"
                    type="text" 
                    class="form-control" 
                    name="num_hoy" 
                    maxlength="9" 
                    placeholder="numeración de hoy"
                    onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;">  
                </div>
            <button type="submit" class="btn btn-primary btn-block">GUARDAR</button>
        </div>
        </form>
        </div>
    </div>
    <div class="col-sm-12 col-xl-6">
        <div class="card">
        <form method="post" action="numeracion/agregar">
        <div class="card-body">
            <label class="card-title">Historial (DIESEL PETROLEO)</label>
            <div class="row p-2">
                <div class="col-sm-12 mb-4">
                <table class="table table-bordered" style="border-radius: 5px;">
                <thead>
                    <tr>
                    <th scope="col">Fecha</th>
                    <th scope="col">Galones vendidos</th>
                    <th scope="col">Venta Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($numeraciones as $numeracion){
                    ?>
                    <tr class="table">
                    <th scope="row"><?= $numeracion->fecha;?></th>
                    <td><?= $numeracion->gal_vendidos;?></td>
                    <td>S/. <?= $numeracion->t_precio;?></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
                </div>
            </div>
        </div>
        </form>
        </div>
    </div>
    </div>
</div>