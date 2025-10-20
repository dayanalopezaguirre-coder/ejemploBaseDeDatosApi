
<div class="container">
    <h2>Listado de Matrículas</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alumno ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>E-mail</th>
                <th>Carrera</th>
                <th>Matrícula</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
                <tr>
                    <td>{{ $alumno->id }}</td>
                    <td>{{ $alumno->nombre}}</td>
                    <td>{{ $alumno->apellido}}</td>
                    <td>{{ $alumno->email}}</td>
                    <td>{{ $alumno->matricula->carrera }}</td>
                    <td>{{ $alumno->matricula->matricula }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
