<?php
require_once 'layout/Header.php';
require_once 'controllers/VehiculosControllers.php';

$vehiController = new VehiculosControllers();
$arrayVehiculos = $vehiController->obtenerVehiculos();
$id = '';

if ($_GET) {
    if ($_GET['accion'] == 'eliminar') {
        $vehiController->eliminarVehiculo($_GET['id']);
        header('Location: index.php');
    }
}

if ($_POST && !$_GET) {
    $newVvehiculo = array(
        "placa" => $_POST['txtPlaca'],
        "marca" => $_POST['txtMarca'],
        "modelo" => $_POST['txtModelo'],
        "version" => $_POST['txtVersion'],
        "color" => $_POST['txtColor'],
        "num_puestos" => $_POST['txtNumPuestos'],
        "num_puertas" => $_POST['txtNumPuertas'],
        "combustible" => $_POST['txtCombustible'],
        "kilometros" => $_POST['txtKilometros'],
        "cilindraje" => $_POST['txtCilindraje'],
        "categoria" => $_POST['txtCategoria']
    );
    print_r($newVvehiculo);
    $vehiController->registrarVehiculo($newVvehiculo);
    header('Location:index.php');
}

if ($_GET) {
    $id = $_GET['id'];
    $vehiculo = $vehiController->obtenerVehiculoPorId($id);
}

if ($_POST):
    echo $id;
    $vehiculoEditado = array(
        "id" => $id,
        "placa" => $_POST['txtPlaca'],
        "marca" => $_POST['txtMarca'],
        "modelo" => $_POST['txtModelo'],
        "version" => $_POST['txtVersion'],
        "color" => $_POST['txtColor'],
        "num_puestos" => $_POST['txtNumPuestos'],
        "num_puertas" => $_POST['txtNumPuertas'],
        "combustible" => $_POST['txtCombustible'],
        "kilometros" => $_POST['txtKilometros'],
        "cilindraje" => $_POST['txtCilindraje'],

        "categoria" => $_POST['txtCategoria']
    );
    $vehiController->actualizarVehiculo($id, $vehiculoEditado);
    header('Location: index.php');
endif;
?>
<style>
    .card-body {
        overflow: auto !important;
        max-height: 500px !important;
    }
</style>
<div class="row">
    <div class="col-5">
        <?php
        if (!$_GET) {
            ?>
            <div class="card w-100">
                <h5 class="card-title mx-3 mt-3">Registrar Estudiantes</h5>
                <form method="post">
                    <div class="card-body shadow-lg m-2">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtPlaca" name="txtPlaca" required/>
                            <label for="txtPlaca" class="form-label">Placa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtMarca" name="txtMarca" required/>
                            <label for="txtMarca" class="form-label">Marca</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtModelo" name="txtModelo" required/>
                            <label for="txtModelo" class="form-label">Modelo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtVersion" name="txtVersion" required/>
                            <label for="txtVersion" class="form-label">Versión</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="txtKilometros" name="txtKilometros" required/>
                            <label for="txtKilometros" class="form-label">Kilometros</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="txtColor" type="color" class="form-control" name="txtColor" required/>
                            <label for="txtColor" class="form-label">Color</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="txtNumPuestos" name="txtNumPuestos" required/>
                            <label for="txtNumPuestos" class="form-label">Número de puestos</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="number" id="txtNumPuertas" name="txtNumPuertas" required/>
                            <label for="txtNumPuertas" class="form-label">Número de puertas</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtCombustible" name="txtCombustible" required/>
                            <label for="txtCombustible" class="form-label">Combustible</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtCilindraje" name="txtCilindraje" required/>
                            <label for="txtCilindraje" class="form-label">Cilindraje</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtCategoria" name="txtCategoria" required/>
                            <label for="txtCategoria" class="form-label">Categoria</label>
                        </div>
                    </div>
                    <div class="card-actions p-3">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <button class="btn btn-outline-danger" type="reset">Limpiar</button>
                    </div>
                </form>
            </div>
            <?php
        } else if (($_GET['accion'] == 'actualizar')) {
        ?>
            <div class="card w-100">
                <h5 class="card-title mx-3 mt-3">Actualizar Estudiantes</h5>
                <form method="post">
                    <div class="card-body shadow-lg m-2">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtPlaca" name="txtPlaca"
                                   value="<?php echo $vehiculo->placa ?>" required/>
                            <label for="txtPlaca" class="form-label">Placa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtMarca" name="txtMarca"
                                   value="<?php echo $vehiculo->marca ?>" required/>
                            <label for="txtMarca" class="form-label">Marca</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtModelo" name="txtModelo"
                                   value="<?php echo $vehiculo->modelo ?>" required/>
                            <label for="txtModelo" class="form-label">Modelo</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtVersion" name="txtVersion"
                                   value="<?php echo $vehiculo->version ?>" required/>
                            <label for="txtVersion" class="form-label">version</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="color" class="form-control" id="txtColor" name="txtColor"
                                   value="<?php echo $vehiculo->color ?>" required/>
                            <label for="txtColor" class="form-label">color</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input id="txtNumPuestos" class="form-control" name="txtNumPuestos"
                                   value="<?php echo $vehiculo->num_puestos ?>"
                                   required />
                            <label for="txtNumPuestos" class="form-label">número de puestos</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="txtNumPuertas" name="txtNumPuertas"
                                   value="<?php echo $vehiculo->num_puertas ?>" required/>
                            <label for="txtNumPuertas" class="form-label">número de puertas</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtCombustible" name="txtCombustible"
                                   value="<?php echo $vehiculo->combustible ?>" required/>
                            <label for="txtCombustible" class="form-label">combustible</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="txtKilometros" name="txtKilometros"
                                   value="<?php echo $vehiculo->kilometros ?>" required/>
                            <label for="txtKilometros" class="form-label">kilometros</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="cilindraje" id="txtCilindraje" name="txtCilindraje"
                                   value="<?php echo $vehiculo->cilindraje ?>" required/>
                            <label for="txtCilindraje" class="form-label">Contraseña</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" type="text" id="txtCategoria" name="txtCategoria"
                                   value="<?php echo $vehiculo->categoria ?>" required/>
                            <label for="txtCategoria" class="form-label">Categoria</label>
                        </div>
                    </div>
                    <div class="card-actions p-3">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                        <a href="index.php" class="btn btn-outline-danger" type="reset">Cancelar</a>
                    </div>
                </form>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="col-7 p-3 border table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="text-truncate">
                <th scope="col">ID</th>
                <th scope="col">placa</th>
                <th scope="col">marca</th>
                <th scope="col">modelo</th>
                <th scope="col">version</th>
                <th scope="col">color</th>
                <th scope="col">numero de puestos</th>
                <th scope="col">numero de puertas</th>
                <th scope="col">combustible</th>
                <th scope="col">acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($arrayVehiculos as $vehiculo):
                ?>
                <tr class="text-truncate">
                    <th scope="row"><?php echo $vehiculo->id ?></th>
                    <td><?php echo $vehiculo->placa ?></td>
                    <td><?php echo $vehiculo->marca ?></td>
                    <td><?php echo $vehiculo->modelo ?></td>
                    <td><?php echo $vehiculo->version ?></td>
                    <td><?php echo $vehiculo->color ?></td>
                    <td><?php echo $vehiculo->num_puestos ?></td>
                    <td><?php echo $vehiculo->num_puertas ?></td>
                    <td><?php echo $vehiculo->combustible ?></td>
                    <td>
                        <a class="link-info mx-2" href="index.php?id=<?php echo $vehiculo->id ?>&accion=actualizar">
                            Editar
                        </a>
                        <a class="link-danger mx-2" href="index.php?id=<?php echo $vehiculo->id ?>&accion=eliminar">
                            Eliminar
                        </a>
                    </td>
                </tr>
            <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>
</div>


<?php
require_once 'layout/Footer.php'
?>
