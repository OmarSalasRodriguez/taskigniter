<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>

<div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold text-gray-800">Proyectos</h2>
    <a href="/projects/new" class="bg-gray-800 text-white px-4 py-2 rounded text-sm hover:bg-gray-700 transition">
        Nuevo Proyecto
    </a>
</div>

<?php if (empty($projects)): ?>
    <p class="text-gray-500 text-center py-8">No hay proyectos aún.</p>
<?php else: ?>
    <div class="grid gap-4 md:grid-cols-2">
        <?php foreach ($projects as $project): ?>
            <div class="border border-gray-200 rounded-lg p-5 hover:shadow-md transition bg-white">
                <h3 class="text-lg font-medium text-gray-800 mb-2">
                    <a href="/projects/<?= $project['id'] ?>" class="hover:text-gray-600 transition">
                        <?= esc($project['name']) ?>
                    </a>
                </h3>
                <p class="text-gray-500 text-sm mb-4">
                    <?= esc($project['description'] ?? 'Sin descripción') ?>
                </p>
                <div class="flex justify-between items-center text-xs text-gray-400">
                    <span>Creado: <?= date('d/m/Y', strtotime($project['created_at'])) ?></span>
                    <div class="space-x-3">
                        <a href="/projects/<?= $project['id'] ?>/edit" class="text-gray-500 hover:text-gray-800 transition">Editar</a>
                        <a href="/projects/<?= $project['id'] ?>" class="text-gray-500 hover:text-gray-800 transition">Ver</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<?= $this->endSection() ?>
