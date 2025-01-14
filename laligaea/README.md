# Gestión de Equipos en la Liga EA Sports

## Descripción

Esta aplicación web desarrollada en PHP permite gestionar los datos de equipos de fútbol de la Liga EA Sports (LaLiga española). Los datos de los equipos se almacenan en arrays asociativos, que a su vez son guardados dentro de un array numérico utilizando una variable de sesión. 

La aplicación permite realizar las siguientes operaciones sobre los equipos almacenados:
- **Crear**: Agregar un nuevo equipo.
- **Leer**: Mostrar todos los equipos almacenados.
- **Editar**: Modificar los datos de un equipo existente.
- **Borrar**: Eliminar un equipo de la lista.

## Datos a almacenar

Cada equipo está representado como un array asociativo con los siguientes atributos:
- **Nombre del Club** (string): El nombre del club, por ejemplo, "FC Barcelona".
- **Ciudad** (string): La ciudad donde está ubicado el club, por ejemplo, "Madrid".
- **Estadio** (string): El nombre del estadio del club, por ejemplo, "Santiago Bernabéu".
- **Año de Fundación** (integer): El año en que se fundó el club, por ejemplo, 1902.
- **Presidente** (string): El nombre del presidente del club, por ejemplo, "Florentino Pérez".
- **Entrenador** (string): El nombre del entrenador actual del club, por ejemplo, "Carlo Ancelotti".
- **Escudo** (string): Una URL o ruta al archivo de la imagen del escudo del club.

Estos datos serán almacenados en una variable de sesión para garantizar la persistencia durante la navegación.

## Estructura del Proyecto

El proyecto consta de las siguientes páginas principales:
1. **Crear Equipo**:
   - Un formulario que permite introducir los datos de un nuevo equipo.
   - Los datos se guardan en la variable de sesión.
   
2. **Ver Equipos**:
   - Muestra una tabla con todos los equipos almacenados.
   
3. **Editar Equipo**:
   - Permite modificar los datos de un equipo existente.
   - Se selecciona el equipo por su índice en el array numérico.
   
4. **Borrar Equipo**:
   - Permite eliminar un equipo seleccionado de la lista.

   