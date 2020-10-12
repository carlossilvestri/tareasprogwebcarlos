<?php 

include 'assets/inc/layout/header.php';
// include 'assets/inc/funciones/funciones.php'; silvestri
?>
<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <form action="calcular.php" method="POST" class="col s12">
                <div class="card small">
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <br>
                                <h5>Ingrese los datos de su Empleado</h5>
                                <br>
                                <h6>Empleado 1:</h6>
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="first_name1" type="text" name="first_names1"
                                                class="validate">
                                            <label for="first_name1">Nombres</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="last_name1" name="last_names1" type="text"
                                                class="validate">
                                            <label for="last_name1">Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="cedula1" type="number" name="cedula1" class="validate">
                                            <label for="cedula1">Cédula</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="lugar1" type="text" name="lugar1" class="validate">
                                            <label for="lugar1">Lugar de Trabajo</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select required id="departamento1" name="departamento1">
                                                <option value="0" selected>Elige el departamento</option>
                                                <option value="rs">Recursos Humanos</option>
                                                <option value="inf">Infórmatica</option>
                                                <option value="cont">Contabilidad</option>
                                                <option value="legal">Legal</option>
                                            </select>
                                            <label>Departamento</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="sueldo1" name="sueldo1" type="number" class="validate">
                                            <label for="sueldo1">Sueldo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card small">
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <br>
                                <h5>Ingrese los datos de su Empleado</h5>
                                <br>
                                <h6>Empleado 2:</h6>
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="first_name2" type="text" name="first_names2"
                                                class="validate">
                                            <label for="first_name2">Nombres</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="last_name2" name="last_names2" type="text"
                                                class="validate">
                                            <label for="last_name2">Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="cedula2" type="number" name="cedula2" class="validate">
                                            <label for="cedula2">Cédula</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="lugar2" type="text" name="lugar2" class="validate">
                                            <label for="lugar2">Lugar de Trabajo</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select required name="departamento2">
                                                <option value="0" selected>Elige el departamento</option>
                                                <option value="rs">Recursos Humanos</option>
                                                <option value="inf">Infórmatica</option>
                                                <option value="cont">Contabilidad</option>
                                                <option value="legal">Legal</option>
                                            </select>
                                            <label>Departamento</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="sueldo2" name="sueldo2" type="number" class="validate">
                                            <label for="sueldo2">Sueldo</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card small">
                    <div class="container">
                        <div class="row">
                            <div class="row">
                                <br>
                                <h5>Ingrese los datos de su Empleado</h5>
                                <br>
                                <h6>Empleado 3:</h6>
                                <div class="row">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="first_name3" type="text" name="first_names3"
                                                class="validate">
                                            <label for="first_name3">Nombres</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="last_name3" name="last_names3" type="text"
                                                class="validate">
                                            <label for="last_name3">Apellidos</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="cedula3" type="number" name="cedula3" class="validate">
                                            <label for="cedula3">Cédula</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="lugar3" type="text" name="lugar3" class="validate">
                                            <label for="lugar3">Lugar de Trabajo</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select required name="departamento3">
                                                <option value="0" selected>Elige el departamento</option>
                                                <option value="rs">Recursos Humanos</option>
                                                <option value="inf">Infórmatica</option>
                                                <option value="cont">Contabilidad</option>
                                                <option value="legal">Legal</option>
                                            </select>
                                            <label>Departamento</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input required id="sueldo3" name="sueldo3" type="number" class="validate">
                                            <label for="sueldo3">Sueldo</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <button id="btnSiguiente"
                                            class="waves-effect waves-light btn">Siguiente</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<?php include 'assets/inc/layout/footer.php'; ?>