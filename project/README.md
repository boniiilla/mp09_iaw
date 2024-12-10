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
- **Nombre del equipo** (string): El nombre del equipo, por ejemplo, "FC Barcelona".
- **Número de títulos ganados** (integer): La cantidad de títulos ganados por el equipo, por ejemplo, 26.
- **Valor del equipo en millones** (float): El valor aproximado del equipo en millones de euros, por ejemplo, 700.5.
- **Ciudad de origen** (string): La ciudad donde está ubicado el equipo, por ejemplo, "Madrid".
- **Año de fundación** (integer): El año en que se fundó el equipo, por ejemplo, 1902.

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