<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Taskigniter' ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    
    <?= $this->include('partials/header') ?>

    <main class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="bg-white rounded-lg shadow-sm p-6">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <?= $this->include('partials/footer') ?>

</body>
</html>
