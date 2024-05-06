<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ivania rios </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h2>Enviar datos a la aplicación Servlet</h2>
        <div class="row">

            <form action="http://localhost:8080/WebApplication1/NewServlet" method="GET">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="nombre">
                    <div id="nombre" class="form-text">Ingrese Nombres</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Paterno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="paterno">
                    <div id="paterno" class="form-text">ingrese Apellido Paterno</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Materno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="materno">
                    <div id="materno" class="form-text">Ingrese Apellido Materno</div>
                </div>
                <div class="mb-3">

                    <label for="departamento">Departamento:</label>
                    <select name="departamento" id="departamento">
                        <option value="La Paz">La Paz</option>
                        <option value="Oruro">Oruro</option>
                        <option value="Potosi">Potosi</option>
                        <option value="Beni">Beni</option>
                        <option value="Cochabamba">Cochabamba</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Tarija">Tarija</option>
                        <option value="Pando">Pando</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                    </select>
                </div>
                <div class="mb-3">

                    <label for="rol">Rol:</label>
                    <select name="rol" id="rol">
                        <option value="Usuario">Usuario</option>
                        <option value="Director">Director</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <input class="btn btn-success btn-lg" type="submit" value="Enviar Datos" />
            </form>
        </div>

<hr>
        <h2>Enviar datos a la aplicación ASP.NET</h2>
        <div class="row">

            <form action="http://localhost:60616/Default.aspx" method="GET">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="nombre">
                    <div id="nombre" class="form-text">Ingrese Nombres</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"> Paterno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="paterno">
                    <div id="paterno" class="form-text">ingrese Apellido Paterno</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Materno:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="materno">
                    <div id="materno" class="form-text">Ingrese Apellido Materno</div>
                </div>
                <div class="mb-3">

                    <label for="departamento">Departamento:</label>
                    <select name="departamento" id="departamento">
                        <option value="La Paz">La Paz</option>
                        <option value="Oruro">Oruro</option>
                        <option value="Potosi">Potosi</option>
                        <option value="Beni">Beni</option>
                        <option value="Cochabamba">Cochabamba</option>
                        <option value="Sucre">Sucre</option>
                        <option value="Tarija">Tarija</option>
                        <option value="Pando">Pando</option>
                        <option value="Santa Cruz">Santa Cruz</option>
                    </select>
                </div>
                <div class="mb-3">

                    <label for="rol">Rol:</label>
                    <select name="rol" id="rol">
                        <option value="Usuario">Usuario</option>
                        <option value="Director">Director</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <input class="btn btn-success btn-lg" type="submit" value="Enviar Datos" />
            </form>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>