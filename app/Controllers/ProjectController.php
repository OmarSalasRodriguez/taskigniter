<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProjectController extends BaseController
{
    /**
     * Muestra la lista de todos los proyectos
     */
    public function index()
    {
        log_message('info', 'Lista de proyectos cargada');
        $model = model(ProjectModel::class);
        $data['projects'] = $model->findAll();

        return view('projects/projects-list', $data);
    }

    /**
     * Muestra los detalles de un proyecto específico
     * @param string $id ID del proyecto
     */
    public function show(string $id)
    {
        $id = (int) $id;
        $model = model(ProjectModel::class);
        $data['project'] = $model->find($id);
        return view('projects/project-details', $data);
    }

    /**
     * Muestra el formulario para crear un nuevo proyecto
     */
    public function new()
    {
        return view('projects/project-create');
    }

    /**
     * Guarda un nuevo proyecto en la base de datos
     */
    public function create()
    {
        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'description' => 'required',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        $model = model(ProjectModel::class);
        $model->insert([
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/projects')->with('success', 'Proyecto creado exitosamente');
    }

    /**
     * Muestra el formulario para editar un proyecto existente
     * @param int $id ID del proyecto a editar
     */
    public function edit($id)
    {
        $model = model(ProjectModel::class);
        $data['project'] = $model->find($id);

        return view('projects/project-edit', $data);
    }

    /**
     * Actualiza un proyecto existente en la base de datos
     * @param int $id ID del proyecto a actualizar
     */
    public function update(string $id)
    {
        $id = (int) $id;
        $rules = [
            'name' => 'required|min_length[3]|max_length[255]',
            'description' => 'required',
        ];
        if (!$this->validate($rules)) {
            return redirect()->back()->with('errors', $this->validator->getErrors())->withInput();
        }

        $model = model(ProjectModel::class);
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('/projects')->with('success', 'Proyecto actualizado exitosamente');
    }

    /**
     * Elimina un proyecto de la base de datos
     * @param int $id ID del proyecto a eliminar
     */
    public function delete(string $id)
    {
        $id = (int) $id;
        $model = model(ProjectModel::class);
        $model->delete($id);
        return redirect()->to('/projects')->with('success', 'Proyecto eliminado exitosamente');
    }
}
