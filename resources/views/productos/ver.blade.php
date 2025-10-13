<div>
        <label for="descripcion">Descripción:</label>
        <input type="text" value="{{ $producto->descripcion }}" disabled>
    </div>

    <div>
        <label for="categorias">Categorías:</label>
        <input type="text" value="{{ $producto->categorias }}" disabled>
    </div>

    <div>
        <label for="cantidad">Cantidad:</label>
        <input type="number" value="{{ $producto->cantidad }}" disabled>
    </div>

    <div>
        <label for="precio">Precio:</label>
        <input type="number" step="0.01"  value="{{ $producto->precio }}" reqadonly>
</div>
<a href="{{ route('productos.index') }}">Regesar</a>
    