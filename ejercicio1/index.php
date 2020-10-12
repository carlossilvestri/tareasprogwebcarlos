<?php 

include 'assets/inc/layout/header.php';
// include 'assets/inc/funciones/funciones.php';
?>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-6 col-auto mr-auto">
            <div class="card text-left" id="contenido">
                <div class="card-body">
                    <h4 class="card-title">Hipotenusa de un triángulo rectangulo</h4>
                    <form action="calcular.php" method="POST">
                        <div class="form-group">
                            <label for="lado1">Lado 1 en cm</label>
                            <input required type="number" class="form-control" id="lado1" name="lado1">
                        </div>
                        <div class="form-group">
                            <label for="lado2">Lado 2 en cm</label>
                            <input required type="number" class="form-control" id="lado2" name="lado2">
                        </div>
                        <button type="submit" class="btn btn-primary" name="button" value="calcular">Calcular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="card small">
                <div class="container">
                    <div class="row">
                        <form action="calcular.php" method="POST" class="col s12">
                            <h5>Hipotenusa de un triángulo rectangulo</h5>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input required type="number" id="lado1" name="lado1" class="validate">
                                    <label for="lado1">Lado 1 (En cm)</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input required type="number" id="lado2" name="lado2" class="validate">
                                    <label for="lado2">Lado 2 (En cm)</label>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" name="button" value="calcular"
                                    class="waves-effect waves-light btn">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'assets/inc/layout/footer.php'; ?>


<!--    <div class="col m 8"> <form action="calcular.php" method="POST" class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                        <label for="disabled">Disabled</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate">
                        <label for="password">Password</label>
                    </div>
                </div>
            </form> -->