<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <div>
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
    </div>
    <div>
        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" required>
    </div>
    <div>
        <label for="categorias">Categorías:</label>
        <input type="text" id="categorias" name="categorias" required>
    </div>
    <div>
        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" step="0.01" required>
    </div>
    <button type="submit">Registrar Producto</button>
</form>
