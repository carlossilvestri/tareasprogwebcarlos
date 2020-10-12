<?php 

include 'assets/inc/layout/header.php';
// include 'assets/inc/funciones/funciones.php'; silvestri
?>
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="card small">
                <div class="container">
                    <div class="row">
                        <form action="calcular.php" method="POST" class="col s12">
                            <h5>Área de un Octágono Regular</h5>
                            <h6>Calcular según su:</h6>
                            <div class="row">
                                <label>
                                    <input name="checkbox" value="checkLong" type="radio" id="checkLong" />
                                    <span>Logitud del Lado</span>
                                </label>
                                <label>
                                    <input name="checkbox" value="checkApotema" type="radio" id="checkApotema" />
                                    <span>Longitud del Apotema</span>
                                </label>
                            </div>
                            <div class="row" id="longitudLado">
                                <div class="input-field col s12">
                                    <input type="number" id="inputLongitudLado" name="longitudLado" class="validate">
                                    <label for="longitudLado">Longitud del lado (En cm)</label>
                                </div>
                            </div>
                            <div class="row" id="apotema">
                                <div class="input-field col s12">
                                    <input type="number" name="apotema" id="inputApotema" class="validate">
                                    <label for="apotema">Longitud del Apotema (En cm)</label>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" name="button" id="calcular" value="calcular"
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