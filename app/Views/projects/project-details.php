<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>

<div class="flex justify-between items-start mb-6">
    <h2 class="text-2xl font-semibold text-gray-800">Detalles del Proyecto</h2>
    <a href="/projects" class="text-gray-500 hover:text-gray-800 text-sm">
        ← Volver
    </a>
</div>

<div class="border border-gray-200 rounded-lg p-6 bg-white">
    <h3 class="text-xl font-medium text-gray-800 mb-4"><?= esc($project['name']) ?></h3>
    
    <div class="space-y-3">
        <div>
            <span class="text-sm text-gray-500">Descripción:</span>
            <p class="text-gray-700 mt-1"><?= esc($project['description'] ?? 'Sin descripción') ?></p>
        </div>
        
        <div class="flex gap-4 text-sm text-gray-500 pt-2">
            <span>Creado: <?= date('d/m/Y H:i', strtotime($project['created_at'])) ?></span>
            <span>Actualizado: <?= date('d/m/Y H:i', strtotime($project['updated_at'])) ?></span>
        </div>
    </div>

    <div class="flex gap-3 mt-6 pt-4 border-t border-gray-100">
        <a href="/projects/<?= $project['id'] ?>/edit" class="bg-gray-800 text-white px-4 py-2 rounded text-sm hover:bg-gray-700 transition">
            Editar
        </a>
        <form action="/projects/<?= $project['id'] ?>" method="post" onsubmit="return confirm('¿Estás seguro de eliminar este proyecto?');">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="px-4 py-2 text-red-600 hover:text-red-800 text-sm">
                Eliminar
            </button>
        </form>
    </div>
</div>

<?= $this->endSection() ?>
