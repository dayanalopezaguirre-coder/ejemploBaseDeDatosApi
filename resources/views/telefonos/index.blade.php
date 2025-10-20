
<div class="container">
    <h2>Listado de Matrículas</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Alumno ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>E-mail</th>
                <th>tipo</th>
                <th>matricula</th>
            </tr>
        </thead>
        <tbody>
            @foreach($telefonos as $telefono)
                <tr>
                    <td>{{ $telefono->alumno_id }}</td>
                    <td>{{ $telefono->alumno}}</td>
                    <td>{{ $telefono->alumno}}</td>
                    <td>{{ $telefono->alumno}}</td>
                    <td>{{ $telefono->tipo }}</td>
                    <td>{{ $telefono->numero }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
