<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Gestión de Alumnos</h1>

        <?php if (isset($mensaje)): ?>
            <div class="mensaje exito">
                ✓ <?= $mensaje; ?>
            </div>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <div class="mensaje error">
                ✗ <?= $error; ?>
            </div>
        <?php endif; ?>

        <h2>Agregar Nuevo Alumno</h2>
        <form method="POST" class="formulario">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>

            <div class="form-group">
                <label for="curso">Curso:</label>
                <select id="curso" name="curso" required>
                    <option value="">Selecciona un curso</option>
                    <option value="Primero">Primero</option>
                    <option value="Segundo">Segundo</option>
                    <option value="Tercero">Tercero</option>
                </select>
            </div>

            <button type="submit">Agregar Alumno</button>
        </form>

        <h2>Lista de Alumnos</h2>
        <?php if (empty($alumnos)): ?>
            <div class="vacio">
                <p>No hay alumnos registrados.</p>
            </div>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Curso</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($alumnos as $alumno): ?>
                        <tr>
                            <td><?= $alumno['nombre']; ?></td>
                            <td><?= $alumno['apellido']; ?></td>
                            <td><?= $alumno['curso']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>