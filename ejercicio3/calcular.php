<?php 

include 'assets/inc/layout/header.php';
include 'assets/inc/funciones/funciones.php';
?>
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <?php $index = 0; ?>
                        <?php foreach ($arreglo as $array) :  ?>
                        <?php $index++; ?>
                        <div class="card small">
                            <div class="container">
                                <div class="row">
                                    <div class="row">
                                        <br>
                                        <h5>Datos del Empleado</h5>
                                        <br>
                                        <h6>Empleado <?php echo $index; ?>:</h6>
                                        <div class="row">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" name="first_names1" class="validate"
                                                        value="<?php echo $array["nombres"]; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input name="last_names1" type="text" class="validate"
                                                        value="<?php echo $array["apelldios"]; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="number" name="cedula1" class="validate"
                                                        value="<?php echo $array["cedulas"]; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate"
                                                        value="<?php echo $array["lugar"]; ?>">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="text" class="validate"
                                                        <?php foreach ($departamentos as $departamento) :  ?>
                                                        <?php 
                                                            if ($array["departamento"] == $departamento["value"] ){ echo "value='".$departamento["escrito"] . "' "; } ?>
                                                        <?php endforeach; ?>>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <input type="number" class="validate"
                                                        value="<?php echo $array["sueldo"]; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'assets/inc/layout/footer.php'; ?>