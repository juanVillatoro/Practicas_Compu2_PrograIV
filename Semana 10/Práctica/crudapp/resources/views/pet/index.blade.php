<h1>Listado de Mascotas</h1>

<table border="1">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pets as $pet)
        <tr>
            <td>{{ $pet->id }}</td>
            <td>{{ $pet->name }}</td>
            <td>{{ $pet->age }}</td>
            <form action="{{ url('/pet/'.$pet->id) }}" method="POST">
                @csrf
                {{ method_field('DELETE') }}
                <td>
                    <input type="submit" value="Eliminar" 
                    onclick="return confirm('Desea eliminar el registro?')">
                </td>
            </form>
        </tr>
        @endforeach
    </tbody>
</table>

