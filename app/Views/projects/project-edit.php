<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>

<h2 class="text-2xl font-semibold text-gray-800 mb-6">Editar Proyecto</h2>

<form action="/projects/<?= $project['id'] ?>" method="post" class="space-y-5">
    <input type="hidden" name="_method" value="PUT">

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
        <input type="text" name="name" id="name" value="<?= esc($project['name']) ?>" required
               class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent">
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
        <textarea name="description" id="description" rows="4"
                  class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"><?= esc($project['description'] ?? '') ?></textarea>
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-gray-800 text-white px-5 py-2 rounded text-sm hover:bg-gray-700 transition">
            Actualizar
        </button>
        <a href="/projects" class="px-5 py-2 text-gray-600 hover:text-gray-800 text-sm">
            Cancelar
        </a>
    </div>

</form>

<?= $this->endSection() ?>
