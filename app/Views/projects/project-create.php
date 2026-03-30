<?= $this->extend('templates/main') ?>

<?= $this->section('content') ?>

<h2 class="text-2xl font-semibold text-gray-800 mb-6">Nuevo Proyecto</h2>

<?php if (session()->getFlashdata('errors')): ?>
    <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded mb-6">
        <ul class="list-disc list-inside text-sm">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

<form action="/projects" method="post" class="space-y-5">
    
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nombre</label>
        <input type="text" name="name" id="name" value="<?= old('name') ?>" required
               class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent">
    </div>

    <div>
        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Descripción</label>
        <textarea name="description" id="description" rows="4"
                  class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"><?= old('description') ?></textarea>
    </div>

    <div class="flex gap-3 pt-2">
        <button type="submit" class="bg-gray-800 text-white px-5 py-2 rounded text-sm hover:bg-gray-700 transition">
            Guardar
        </button>
        <a href="/projects" class="px-5 py-2 text-gray-600 hover:text-gray-800 text-sm">
            Cancelar
        </a>
    </div>

</form>

<?= $this->endSection() ?>
