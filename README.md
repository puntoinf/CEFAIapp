# CEFAI App

Desde el Centro de Estudiantes creemos que es necesario que existan algunas aplicaciones para la habituación de los ingresantes a la carrera, además de facilitarle el acceso a información que en un primer momento complicada de encontrar. Esta demo hecha en su parte con PHP, y librerías de CSS y JS, permite consultar por las correlativas de una materia y por los horarios del día.

## Gestión de horarios

Una de las aplicaciones del sistema es la de gestionar horarios. Hay dos secciones:

- [Lista de horarios](http://cefai.fi.uncoma.edu.ar/correlativa/horarios/): listando los horarios del día actual, y permite consultar por día.
- [Consulta de horarios por materia](http://cefai.fi.uncoma.edu.ar/correlativa/horarios/mi-semana/): el cual permite ver los horarios de cada materia seleccionada armando un listado semanal.

## Consulta de régimen de correlatividades

Otra de las aplicaciones son la de los finales para cursar. Esto es algunas materias requieren de finales previos aprobados para ser cursadas.

- Lista de cursadas para cursadas: donde le usuario consulta por materia cuales son las materias necesarias para cursarla, y si se cursa esa cuales habilita para cursar.
- Lista de finales para cursadas: donde el usuario puede consultar la finales necesarios para cursar esa materia, y si se aprueba es el final de dicha materia si se.

# Configuración genérica del sistema:

Tendremos que configurar varias cosas.

- La conexión a la base de datos.
- Insertado de carreras, materias, horarios, etc.
- Configuración del frodtend.
- Últimos retoques:

## La Base de Datos

La base de datos tiene una pinta como la siguiente:

![](Media/MERbd.jpg) link: [MERbd.jpg](Media/MERbd.jpg)

Donde el derivo a tablas queda de la siguiente manera:

---

carrera(**idCarrera**, nombre, plan, duracion)

materia(**idMateria**, nombre, ano, cuatrimestre)

imparte(idCarrera, idMateria)

dicta(**idMateria** , **dia**, **cuatrimestre**, modulo, aula, horainicio, horafin, cuatrimestre, estado )

evento(**nombre**, dia, hora, aula)

asueto(**idAsueto**, horainicio, horafin, fecha)

usuario(**usuario**, pass, tipo)

---

Donde tendremos las siguientes consideraciones:

1. La relación *se* economiza. usuario, auseto, evento, no se relacionan entre si para poder evitar sobrecargar el sistema, si se quiera llevar un control de quien crea cosas en el sistema se lo prodría relacionar sencillamente.
2. Dicta tiene un clave compuesta, en la practica yo solo uso la clave compuesta para no agregar duplicados. para eliminar comparo todos los atributos de la tabla.
3. El pass el usuario se le aplica un hash desde el frodtend *md5*. La contraseña se guarda con
4. Hay que tener en cuenta los detalles del frondtend donde tendremos que armar algunas funciones extrar para la carga de algunas materias:

## Conectar a la base de datos:

En la raiz de nuestro sistema tenemos la siguiente archivo: connecion.php

```php
<?php
class Connection {

    public function getConneccion() {
        $username = 'root';
        $password = '';
        $hostname = 'localhost';
        $database = 'correlativas';
        return new PDO("mysql:host=$hostname;dbname=$database;", $username, $password);
    }

}
```

Tenemos que modificar la variable `$username` por el usuario de la base de datos proporcionada, y `$password` por la contraseña de la misma, `$hostname` por el nombre del host que nos proporcionan y `database` que es el nombre de la base de datos que tendremos que crear para poner en funcionamiento al sistema.

## Cargando la estructura de la base de datos al servidor

Ei contamos con el gesor de bases de datos phpMyAdmin esta tarea sera mas sencilla. solo tendramos que crear la base de datos (la misma que configuramos anteriormente) para crear la estructura anterior.

Seleccionamos importar y cargamos el SQL que se encuentra en /BD/bdGenerica.sql luego de esto tendremos todo el esquema de la base de datos armada.

## Cargando los datos de Carreras, Materias, etc

Esta es la parte mas dificil explicare dos cosas como insertar datos (el formato SQL), y como recrear el generador de SQL que diseñe para esta tarea.

Formato SQL Carreras:

```sql
INSERT INTO 'carrera' ('idCarrera', 'nombre', 'plan', 'duracion') VALUES
(NULL, 'nombre carrera', 'plan-n0', 'duracion'),
....,
(NULL,'nombre carrera', 'plan-nn', 'duracion');
```

Tenemos que `NULL` permite que ese numero se auto incremente, el el resto de los valores son para el nombre, plan, y la duracion de la carrera.

Este mismo formato se realiza para la materias:

```sql
INSERT INTO 'materia'('idMateria', 'nombre', 'ano', 'cuatrimestre') VALUES
(NULL, 'nombre materia', 'año', '1/2'),
...,
(NULL, 'nombre materia', 'año', '1/2');
```

Tenemos que NULL permite que la variable se auto incremente, los siguientes datos son para el nombre, el año, y el cuatrimestre.

En el siguiente link podran encontrar una pagina cuyo objetivo es el de automatizar esta carga, usted podrá usar el formualario para armar las materias y carreras. Para poder cargar horarios, asociar correlativas, finales y materia con carrera tendrá que realizar algunas modificaciones.

[formularios](https://francozuniga32.github.io/sqlcefai.github.io/)

