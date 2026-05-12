# Lab Eloquent - Sistema de Gestión de Cursos

## Autor

Alejandro Pérez
Carné: 24136

## Descripción

Proyecto desarrollado en Laravel que implementa un sistema de gestión de cursos utilizando Eloquent ORM.

El sistema incluye:

* Más de 10 tablas relacionadas
* Relaciones entre modelos (hasMany, belongsTo, belongsToMany)
* Consultas Eloquent avanzadas
* Uso de Eager Loading para optimización de consultas (N+1)
* Seeders con más de 10,000 registros

---

## Instalación

```bash
git clone https://github.com/TU-USUARIO/lab-eloquent.git
cd lab-eloquent
composer install
cp .env.example .env
php artisan key:generate
```

Configurar las credenciales de la base de datos en el archivo `.env`.

---

## Migraciones y Seeders

```bash
php artisan migrate --seed
```

Este comando creará la estructura de la base de datos y generará datos de prueba (más de 10,000 registros).

---

## Estructura del Proyecto

### Tablas principales:

* users
* students
* teachers
* categories
* courses
* enrollments
* lessons
* assignments
* submissions
* grades
* course_teacher (tabla pivote)

---

## Relaciones implementadas

Ejemplos de relaciones utilizadas:

* Student → hasMany → Enrollment
* Student → belongsToMany → Course
* Course → belongsTo → Category
* Course → belongsToMany → Teacher
* Lesson → hasMany → Assignment
* Submission → hasOne → Grade

---

## Consultas Eloquent

Se implementaron consultas accesibles mediante rutas:

* `/q1` → Estudiantes con sus cursos
* `/q2` → Cursos con más de cierta cantidad de estudiantes
* `/q3` → Cursos ordenados por fecha
* `/q4` → Submissions con nota mayor a 70
* `/q5` → Profesores con sus cursos
* `/q6` → Uso de eager loading

---

## Eager Loading

Se utilizó eager loading para evitar el problema N+1:

```php
Course::with(['students', 'teachers'])->get();
```

Esto permite cargar relaciones en una sola consulta optimizada.

---

## Ejecución

```bash
php artisan serve
```

Acceder en el navegador:

```
http://127.0.0.1:8000/q1
```

---

## Tecnologías

* Laravel
* Eloquent ORM
* MySQL / SQLite

---

## Objetivo académico

Demostrar el uso de Eloquent ORM en:

* Modelado de bases de datos
* Definición de relaciones
* Construcción de consultas avanzadas
* Optimización de consultas

---

