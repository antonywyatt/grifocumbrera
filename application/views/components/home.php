<div class="container p-4">
    <h5 style="color: gray">Bienvenido(a)</h5>
    <h1 class="title"><?php echo $this->session->userdata('nombre');?></h1>
    <div class="row">
        <div class="col-sm-6 col-xl-3 p-2">
            <a href="numeracion"><button class="btn btn-success btn-block btn-rounded">Numeración Gasohol</button></a>
        </div>
        <div class="col-sm-6 col-xl-3 p-2">
            <a href="numeraciond"><button class="btn btn-warning btn-block btn-rounded">Numeración Diesel</button></a>
        </div>
        <div class="col-sm-6 col-xl-3 p-2">
            <button class="btn btn-primary btn-block btn-rounded" disabled>Ver reportes</button>
        </div>
        <div class="col-sm-6 col-xl-3 p-2">
            <button class="btn btn-danger btn-block btn-rounded" disabled>Caculadora</button>
        </div>
    </div>
</div>