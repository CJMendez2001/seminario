<!-- resources/views/items/alumnos.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Registrar Alumnos</h1>
   <!-- Alert for Errors Messages -->
   @if($errors->any())
     <div class="alert alert-danger">
         <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
         </ul>
     </div>
    @endif

    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre*</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{old('nombre')}}" required>
        </div>

        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido*</label>
            <input type="text" name="apellido" class="form-control" id="apellido" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico*</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="mb-3">
            <label for="edad" class="form-label">Edad*</label>
            <input type="number" name="edad" class="form-control" id="edad" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Regresar</a>
    </form>
</body>
</html>
