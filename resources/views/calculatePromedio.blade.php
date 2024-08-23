<form action="{{ route('calculatePromedio.result') }}" method="POST">
    @csrf
    <label for="number1">Matematica:</label>
    <input type="number" id="number1" name="number1" required><br><br>
    
    <label for="number2">Programación:</label>
    <input type="number" id="number2" name="number2" required><br><br>
    

    <label for="number3">Laboratorio de Computación:</label>
    <input type="number" id="number3" name="number3" required><br><br>
    

    <label for="number4">Metodología de Sistemas:</label>
    <input type="number" id="number4" name="number4" required><br><br>
    

    <label for="number5">Legislación:</label>
    <input type="number" id="number5" name="number5" required><br><br>
    
    <label for="operation">Operación:</label>
    <select id="operation" name="operation" required>
        <option value="pro">Promedio</option>
    </select><br><br>

    <button type="submit">Calcular</button>
</form>

@if(isset($result))
    <h2>Resultado: {{ $result }}</h2>
@endif