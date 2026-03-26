<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>

<h2 class="text-2xl font-semibold text-gray-800 mb-6">Eliminar Proyecto</h2>

<div class="border border-gray-200 rounded-lg p-6 bg-white">
    <p class="text-gray-700 mb-4">¿Estás seguro de que deseas eliminar el proyecto <strong><?= esc($project['name']) ?></strong>?</p>
    <p class="text-gray-500 text-sm mb-6">Esta acción no se puede deshacer.</p>

    <div class="flex gap-3">
        <form action="/projects/<?= $project['id'] ?>" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="bg-red-600 text-white px-5 py-2 rounded text-sm hover:bg-red-700 transition">
                Eliminar
            </button>
        </form>
        <a href="/projects" class="px-5 py-2 text-gray-600 hover:text-gray-800 text-sm">
            Cancelar
        </a>
    </div>
</div>

<?= $this->endSection() ?>
