<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProjectController extends BaseController
{
    /**
     * Muestra la lista de todos los proyectos
     */
    public function index()
    {
        return view('projects/projects-list');
    }

    /**
     * Muestra los detalles de un proyecto específico
     * @param int $id ID del proyecto
     */
    public function show($id)
    {
        return view('projects/project-details');
    }

    /**
     * Muestra el formulario para crear un nuevo proyecto
     */
    public function create()
    {
        return view('projects/project-create');
    }

    /**
     * Guarda un nuevo proyecto en la base de datos
     */
    public function store()
    {
        // TODO: Agregar lógica para guardar en BD
    }

    /**
     * Muestra el formulario para editar un proyecto existente
     * @param int $id ID del proyecto a editar
     */
    public function edit($id)
    {
        return view('projects/project-edit');
    }

    /**
     * Actualiza un proyecto existente en la base de datos
     * @param int $id ID del proyecto a actualizar
     */
    public function update($id)
    {
        // TODO: Agregar lógica para actualizar en BD
    }

    /**
     * Elimina un proyecto de la base de datos
     * @param int $id ID del proyecto a eliminar
     */
    public function delete($id)
    {
        // TODO: Agregar lógica para eliminar de BD
    }
}
