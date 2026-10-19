
<?php
$carpeta = "imagenes/";
$mensaje = "";
$imagenSubida = "";
$mostrarImagen = false;

// Procesar el formulario
if (isset($_POST["subir"])) {

    $tipos = ["image/jpeg", "image/png", "image/gif", "image/webp", "image/bmp"];

    if ($_FILES["imagen"]["error"] != 0) {
        $mensaje = "Error al subir el archivo.";
    } elseif (!in_array($_FILES["imagen"]["type"], $tipos)) {
        $mensaje = "Error: solo se permiten imágenes.";
    } else {

        $nombre = basename($_FILES["imagen"]["name"]);
        $nombre = time() . "_" . $nombre;
        $ruta = $carpeta . $nombre;

        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta)) {
            $imagenSubida = $ruta;
            $mostrarImagen = true;
        } else {
            $mensaje = "No se ha podido guardar la imagen.";
        }
    }
}

// Obtener el listado de imágenes
$imagenes = scandir($carpeta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Subida de imágenes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <h1 class="text-center mb-4">Subida de imágenes</h1>

    <?php if ($mostrarImagen): ?>

        <?php
        $datos = getimagesize($imagenSubida);
        $tamano = filesize($imagenSubida);
        ?>

        <!-- Volver al formulario después de 5 segundos -->
        <meta http-equiv="refresh" content="5;url=subidaImagen.php">

        <div class="card p-4 mb-4">
            <div class="alert alert-success">
                Imagen subida correctamente. Volverás al formulario en 5 segundos.
            </div>

            <img src="<?= htmlspecialchars($imagenSubida) ?>"
                 class="img-fluid mb-3"
                 style="max-width: 400px;"
                 alt="Imagen subida">

            <p><strong>Ruta:</strong>
                <?= htmlspecialchars($imagenSubida) ?></p>

            <p><strong>Nombre:</strong>
                <?= htmlspecialchars(basename($imagenSubida)) ?></p>

            <p><strong>Anchura:</strong> <?= $datos[0] ?> píxeles</p>

            <p><strong>Altura:</strong> <?= $datos[1] ?> píxeles</p>

            <p><strong>Tamaño:</strong> <?= round($tamano / 1024, 2) ?> KB</p>
        </div>

    <?php else: ?>

        <?php if ($mensaje != ""): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($mensaje) ?>
            </div>
        <?php endif; ?>

        <div class="card p-4 mb-4">
            <form action="subidaImagen.php" method="POST"
                  enctype="multipart/form-data">

                <div class="mb-3">
                    <label for="imagen" class="form-label">
                        Selecciona una imagen
                    </label>

                    <input type="file" name="imagen" id="imagen"
                           class="form-control" required>
                </div>

                <button type="submit" name="subir" class="btn btn-primary">
                    Subir imagen
                </button>
            </form>
        </div>

    <?php endif; ?>

    <a href="subidaImagen.php?listado=1" class="btn btn-secondary mb-3">
        Mostrar todas las imágenes
    </a>

    <?php if (isset($_GET["listado"])): ?>

        <h2 class="mt-3">Listado de imágenes</h2>

        <div class="row">

            <?php foreach ($imagenes as $archivo): ?>

                <?php if ($archivo != "." && $archivo != ".."
                    && is_file($carpeta . $archivo)
                    && getimagesize($carpeta . $archivo) !== false): ?>

                    <div class="col-md-4 mb-3">
                        <div class="card p-3 h-100">

                            <img src="<?= htmlspecialchars($carpeta . $archivo) ?>"
                                 class="img-fluid mb-2"
                                 alt="Imagen subida">

                            <p><?= htmlspecialchars($archivo) ?></p>

                        </div>
                    </div>

                <?php endif; ?>

            <?php endforeach; ?>

        </div>

    <?php endif; ?>

</div>

</body>
</html>
