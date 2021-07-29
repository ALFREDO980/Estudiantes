
<?php include "header.php"; ?>
<?php
    session_start();
    $operacion = "";
    if (isset($_SESSION['operacion'])) {
        $operacion = $_SESSION['operacion'];
        unset($_SESSION['operacion']);
    }
?>

    
    <!-- Page Content -->
    <div class="container">
    <div class="card border-0 shadow my-5">
        <div class="card-body p-5">
            <h1 class="font-weight-light">Informacion del estudiante</h1>
            <p class="lead">
                <?php ?>
                <div class="row">
                    <div class="col-sm-4">
                        <form action="servidor/agregarDato.php" method="POST">
                            <label>Nombre (s):</label>
                            <input type="tex" name="nombre" class="form-control" required>
                            <label>Matricula</label>
                            <input type="text" name="matricula" class="form-control" required>
                            <label>Sexo:</label>
                            <select name="genero" class="form-control" required >
                                    <option value="Hombre" >Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select> 
                        
                    </div>
                    <div class="col-sm-4">
                    
                         <label>Apellido paterno:</label>
                         <input type="tex" name="paterno" class="form-control" required>
                         <label>Fecha de nacimiento:</label>
                         <input type="date" name="fecha" class="form-control" required>
                         <label>Subir un archivo a servidor</label>
                         <input type="file" name="miArchivo" class="form-control" required>
                            </div>
                    <div class="col-sm-4">
                        
                            <label>Apellido materno:</label>
                            <input type="tex" name="materno" class="form-control" required>
                            <label>Especialidad:</label>
                            <input type="text" name="especialidad" class="form-control" required>
                            <hr>
                            <button class="btn btn-primary">
                                Registrar
                            </button>  
                </form>
                
            </div>
        </div>
        
        </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <h3>Tabla de registro de estudiantes</h3>
                        <?php include "tablaDatos.php";?>
                    </div>
                </div>
            </p>
        </div>
    </div>
    </div>
    


<?php include "footer.php"; ?>

