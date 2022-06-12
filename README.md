## ENUNCIADO
___


Para la realización de la prueba debes descargar los ficheros asociados. Se trata de una prueba individual y bajo ningún concepto se permite la copia.

Puedes hacer uso de cuantos recursos necesites, excepto comunicarte con tus compañeros. 

Añade todos los comentarios que consideres oportunos para explicar tu código, y usa la notación camelCase para los identificadores.

Comprime en un fichero zip los ficheros resultantes y envíalo a la plataforma.

<br><br>

**Ejercicio 1.-** (*0.5 puntos*) Crea la estructura necesaria para la aplicación en php, según muestra la imagen:


Habilita un mecanismo de autoloading. 

Guarda los ficheros de clase en un directorio llamado "clases". 

El resto de ficheros php se ubicarán sobre la raíz.

Existe un directorio "config" auxiliar con el fichero db.json, que debe contener las credenciales de BD.

Crea una clase "Connetion" que contenga toda la lógica de conexión a la base de datos "people". Toda clase que tenga uso con la base de datos debe heredar de esta clase. 

Debes importar la base de datos desde el fichero sql proporcionado con esta prueba evaluativa.

<br>

**Ejercicio 2.-** (*0.5 puntos*) La base de datos contiene información sobre los empleados de una compañía de desarrollo de software. Se pretende modelar cada trabajador:


Crea una clase "Worker", cuyos atributos deben ser almacenar todos los campos de la tabla worker de la base de datos.

Crea los getter, setter y/o constructor solo en caso de necesitarlos.

<br>

**Ejercicio 3.-** Se pretende valorar alos trabajadores en función de su desempeño, en una escala de 0 a 5, y para ello debes crear una clase "Rating", con los siguientes métodos:


(*0.5 puntos*) getAllWorkers() -> que devolverá todas las filas de la tabla "worker" en un array, encapsulando cada fila en un objeto de tipo "Worker".

(*0.5 puntos*) getWorker($id)-> que devolverá un objeto de tipo Worker con la información de un trabajador.

(*1 punto*) drawWorkersList() -> que mostrará, según el fichero index.html de muestra proporcionado, el listado de Trabajadores que proporciona getAllWorkers(). Debes crear el script index.php capaz de hacer uso de este método.

<br>

**Ejercicio 4.-** El listado creado con anterioridad necesita poder cambiar la valoración de cada trabajador. Para ello crea:


(*1 punto*) el método drawRating($id, $rating)-> que mostrará por pantalla para cada trabajador, su valoración representada por estrallas amarillas, completando con estrellas grises hasta las 5 estrellas.

(*1 punto*) el método ratingUpdate($id, $rating) -> que debe ser capaz de recibir un identificador y una valoración, y actualizar el campo adecuado de la tabla.

<br>

**Ejercicio 5.-** Para completar la funcionalidad, se debe crear una página para proporcionar la información completa del trabajador. En este caso, se trata del script card.php, del que se incluye una muestra. Para ello necesitas añadir a la clase Worker:


(*1 punto*) el método getSkillsList()-> que devolverá una array con los nombres de las habilidades del trabajador.

(*1 punto*) el método getLanguageList()-> que devolverá un array con los idiomas que domina el trabajador, tanto el nombre del idioma, como su icono.

(*1 punto*) el método getCountryName()-> que resolverá el nombre del país del trabajador.

<br>

**Ejercicio 6.-** Finalmente, dado que los anteriores métodos deben devolver arrays, se pide que se creen los siguientes métodos para dar formato a la salida de los mismos:
_________________________________________________________________________________________________________________

(*1 punto*) el método drawLanguageList($worker)-> que acepta a su entrada un objeto de tipo worker, y retorna a su salida el formato HTML sugerido para el script card.php respecto al lstado de idiomas.

(*1 punto*) elmétodo drawSkillsList($worker)-> que acepta a su entrada un objeto de tipo worker, y retorna a su salida el formato HTML sugerido para el script card.php respecto a las habilidades del trabajador.







