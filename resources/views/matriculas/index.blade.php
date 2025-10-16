
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
            @foreach($matriculas as $matricula)
                <tr>
                    <td>{{ $matricula->alumno_id }}</td>
                    <td>{{ $matricula->alumno->nombre}}</td>
                    <td>{{ $matricula->alumno->apellido}}</td>
                    <td>{{ $matricula->alumno->email}}</td>
                    <td>{{ $matricula->carrera }}</td>
                    <td>{{ $matricula->matricula }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
