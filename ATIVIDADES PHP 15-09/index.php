<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Atividades de PHP - POO</title>
    <style>
        body { font-family: sans-serif; background-color: #f4f6f8; padding: 20px; color: #333; }
        h1 { text-align: center; margin-bottom: 30px; }
        .card { background: #fff; border-radius: 8px; padding: 15px 20px; margin-bottom: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .card h2 { margin-top: 0; color: #0056b3; font-size: 1.2rem; border-bottom: 1px solid #eee; padding-bottom: 8px; }
        pre { background: #272822; color: #f8f8f2; padding: 12px; border-radius: 6px; overflow-x: auto; font-size: 0.95rem; }
    </style>
</head>
<body>
    <h1>Atividades de PHP — POO</h1>

    <?php for ($i = 1; $i <= 10; $i++): ?>
        <div class="card">
            <h2>Exercício <?= $i ?></h2>
            <pre><?php
                $arquivo = "atividade_{$i}.php";
                if (file_exists($arquivo)) {
                    require_once $arquivo;
                } else {
                    echo "Ficheiro {$arquivo} ainda não encontrado.";
                }
            ?></pre>
        </div>
    <?php endfor; ?>
</body>
</html>