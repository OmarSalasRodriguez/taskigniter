# Docker - MySQL

## Contenedor MySQL para Taskigniter

### Crear contenedor

```bash
docker run -d --name mysql-taskigniter \
  -e MYSQL_ROOT_PASSWORD=pass123 \
  -e MYSQL_USER=taskigniter \
  -e MYSQL_PASSWORD=pass123 \
  -e MYSQL_DATABASE=taskigniter \
  -p 3306:3306 \
  mysql:8
```

### Detener contenedor

```bash
docker stop mysql-taskigniter
```

### Iniciar contenedor

```bash
docker start mysql-taskigniter
```

### Eliminar contenedor

```bash
docker rm mysql-taskigniter
```

### Configuración de conexión

| Variable | Valor |
|----------|-------|
| Host     | localhost |
| Puerto   | 3306 |
| Usuario  | taskigniter |
| Password | pass123 |
| Base de datos | taskigniter |
