<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento - Salão de Beleza</title>

      <h1>Agendamento - Salão de Beleza</h1>

    <form action="{{ route('agendamentos.store') }}" method="POST">
    <!-- Isso é necessário em formulários POST no Laravel -->

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

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(120deg, #fce4ec, #f8bbd0);
            color: #880e4f;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 40px;
        }

        h1 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            text-align: center;
        }

        form {
            background-color: #ffffffcc;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(136, 14, 79, 0.2);
            width: 100%;
            max-width: 450px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            color: #880e4f;
        }

        input, select {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #f8bbd0;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #880e4f;
            box-shadow: 0 0 5px rgba(136, 14, 79, 0.3);
        }

        button {
            background-color: #f8bbd0;
            color: #880e4f;
            font-weight: bold;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            width: 100%;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            box-shadow: 0 4px 10px rgba(136, 14, 79, 0.2);
        }

        button:hover {
            background-color: #880e4f;
            color: #ffffff;
        }
    </style>
</head>
<body>
