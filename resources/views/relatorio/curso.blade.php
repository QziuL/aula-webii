<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Simples</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        .container {
            padding: 20px;
        }

        h1 {
            font-size: 24px;
        }

        h2 {
            font-size: 20px;
            color: #333;
        }

        p {
            font-size: 16px;
            line-height: 1.5;
            color: #555;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Relatório de Análise</h1>
    </header>

    <div class="container">
        @if (isset($dados))
        <section>
            <h2>Resultados</h2>
            <p>{{ $dados['curso'] }}</p>

            <table>
                <thead>
                    <tr>
                        <th>Aluno</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dados['alunos'] as $aluno)
                        <tr>
                            <td>{{ $aluno }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        @endif
        <section>
            <h2>Duração do curso: {{ $dados['duracao'] }}</h2>
        </section>
    </div>
    
    <footer>
        <p>Relatório gerado em {{ $data }}</p>
    </footer>
</body>
</html>