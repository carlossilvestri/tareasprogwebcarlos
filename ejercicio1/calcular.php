<?php 

include 'assets/inc/layout/header.php';
include 'assets/inc/funciones/funciones.php';
?>
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="card small">
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <h5>La hipotenusa del triangulo rectangulo es: </h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input disabled value="<?php echo $hipotenusa; ?> cm" id="disabled" type="text"
                                        class="validate">
                                    <label for="disabled">Resultado</label>
                                </div>
                                <button type="button" id="btnRegresar"
                                    class="waves-effect waves-light btn">Regresar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'assets/inc/layout/footer.php'; ?>
