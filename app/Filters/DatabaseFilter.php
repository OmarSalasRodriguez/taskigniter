<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;

class DatabaseFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        try {
            Database::connect();
        } catch (\Exception $e) {
            if (is_cli()) {
                echo "ERROR DE CONEXIÓN A BD: " . $e->getMessage() . "\n";
                return;
            }

            return response()->setStatusCode(503)
                ->setBody('
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <title>Error de Conexión</title>
                        <script src="https://cdn.tailwindcss.com"></script>
                    </head>
                    <body class="bg-gray-100 min-h-screen flex items-center justify-center">
                        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md text-center">
                            <h1 class="text-2xl font-bold text-red-600 mb-4">Error de Conexión</h1>
                            <p class="text-gray-600 mb-4">No se pudo conectar a la base de datos.</p>
                            <p class="text-sm text-gray-400">' . $e->getMessage() . '</p>
                        </div>
                    </body>
                    </html>
                ');
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
