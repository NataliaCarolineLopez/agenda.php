<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="style.css">
    <title>Agendamento - Salão de Beleza</title>

      <h1>Agendamento - Salão de Beleza</h1>

    <form action="{{ route('agendamentos.store') }}" method="POST">

        <label for="cliente">Nome do Cliente:</label>
        <input type="text" name="cliente" id="cliente" placeholder="Digite seu nome" value="" required>

        <label for="telefone">Telefone:</label>
        <input type="tel" name="telefone" id="telefone" placeholder="(00) 00000-0000" value="" required>

        <label for="servico">Serviço:</label>
        <select name="servico" id="servico" required>
            <option value="">Selecione</option>
            <option value="Corte de Cabelo">Corte de Cabelo</option>
            <option value="Pintura">Pintura</option>
            <option value="Manicure e Pedicure">Manicure e Pedicure</option>
            <option value="Escova">Escova</option>
            <option value="Hidratação">Hidratação</option>
        </select>

        <label for="data">Data:</label>
        <input type="date" name="data" id="data" value="" required>

        <label for="hora">Hora:</label>
        <input type="time" name="hora" id="hora" value="" required>

        <button type="submit">Agendar</button>
    </form>
</body>
</html>

    