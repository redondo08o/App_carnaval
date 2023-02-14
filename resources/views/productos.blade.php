@extends('layout.layoutAdmin')
@section('content_admin')

<div class="row">

    <div class="col-lg-12">
        <h3> Registrar nuevo producto</h3>
    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nombre</label>
    <input type="text" class="form-control"  >
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Precio</label>
    <input type="text" class="form-control">
  </div>
  <div class=content>
                        <label> upload image</label> <br>

                        <label for='file-upload' class='subir'>
                            <i class='fas fa-cloud-upload-alt'></i>
                            <div style='float: left;' id='info-2'>Subir archivo</div>
                        </label>
                        <input id='file-upload' accept='image/png,image/jpeg' onchange='cambiar()' type='file' name='file-2' style='display: none;' />
                    </div>

 
</form>
    </div>

</div>
<style>

@media screen and (max-width: 50em) {
        .inputfile-7+label strong {
            display: block;
        }
    }

    .subir {
        padding: 5px 10px;
        background: #2d64f5;
        color: #fff;
        border: 0px solid #fff;
    }

    .subir:hover {
        color: #fff;
        background: #2d64f59e;
    }
</style>
<script>
    function cambia() {
        var pdrs = document.getElementById('file-uploa').files[0].name;
        document.getElementById('info-2').innerHTML = pdrs;
    }

    function cambiar() {
        var pdrs = document.getElementById('file-upload').files[0].name;
        document.getElementById('info-2').innerHTML = pdrs;
    }
</script>
@endsection