### EJERCICIO 1

**Crear dos ficheros, `ejercicio1a.html` y `ejercicio1b.php`. En el primero, habrá un formulario donde el usuario introducirá dos números, y cuando pulse al botón calcular, abrirá `ejercicio1b.php` donde saldrá el resultado de multiplicar los dos números introducidos.**

### EJERCICIO 2

**Crear una calculadora sencilla con PHP. Deberá haber un solo archivo (`ejercicio2.php`), donde habrá un formulario con dos inputs para introducir los números, y cuatro radiobuttons con las diferentes opciones (sumar, restar, multiplicar y dividir). Cuando el usuario le dé al botón calcular, la aplicación deberá recargar la página mostrando, además de la calculadora, el resultado (el resultado solo se debe mostrar si ha habido alguna operación).**

### EJERCICIO 3

**Teniendo en cuenta el ejercicio anterior, comprobar a la hora de dividir si el usuario ha introducido el valor cero en el segundo número mediante una excepción. Para ello, consultar la página de control de excepciones de PHP ([Control de Errores en PHP](https://www.php.net/manual/es/language.errors.php7.php)).**

### EJERCICIO 4

**Teniendo en cuenta el ejercicio anterior, cambiar la calculadora para que nos envíe a una página de error (`ejercicio4error.php`) cuando capture la excepción de dividir por 0. Usar la función `header()`.**

### EJERCICIO 5

**Crear un formulario para calcular la factorial de un número introducido por el usuario. El cálculo deberá hacerse mediante una función sencilla, y el resultado se deberá mostrar en la misma página (solo hay que crear un archivo `ejercicio5.php`).**

### EJERCICIO 6

**Modificar la función del ejercicio anterior para hacer el cálculo de forma recursiva.**

### EJERCICIO 7

**Realiza un formulario y llámalo `ejercicio7a.html` utilizar el método get que recoja los datos como el que se muestra a continuación para mostrar el texto en otra página llamada `ejercicio7b.php`. Leer el valor de cada campo y mostrarlo en otra página llamada `ejercicio7b.php` que deberá comprobar si tiene valor, y si está vacío, además usar una función `recoge()` que permite recoger el nombre y convertir caracteres especiales en entidades HTML, eliminar blancos y eliminar etiquetas HTML.**

### EJERCICIO 8

**Crea un formulario que, dado un dato de texto introducido, determine qué es (email, solo números, nif o solo texto). Para ello, el formulario debe contener: 1. Caja de texto donde introduciremos el texto del que queremos comprobar el tipo o formato. 2. Grupo de botones radio o una lista de selección que nos permitirá seleccionar qué filtro es el que queremos comprobar (email, solo números, nif...). Guárdalo el formulario con el nombre `ejercicio8a.html` y el fichero que valida el resultado `ejercicio8b.php`. Para la validación debes consultar las siguientes páginas: [filter_var](https://www.php.net/manual/es/function.filter-var.php), [filter.filters.validate](https://www.php.net/manual/es/filter.filters.validate.php), [preg_match](https://www.php.net/manual/es/function.preg-match.php), [Expresiones Regulares](https://eldesvandejose.com/2017/08/18/expresiones-regulares-general/)**

### EJERCICIO 9

**Crea una página que contenga un formulario de alta de usuario con los controles que aparecen a continuación. 1. Al menos tres cajas de texto, nombre, e-mail y nombre de usuario. 2. Cajas para contraseña y confirmación contraseña. 3. Al menos uno o dos check. 4. Control file que permitirá al usuario subir una foto. Debéis tener en cuenta lo siguiente: Todos los campos son obligatorios. 2. Controlar cuestiones de seguridad. 3. Controlar tamaño y tipo permitido para el fichero adjunto, foto. 4. Informa al usuario de los errores que ha cometido Guárdalo el formulario con el nombre `ejercicio03.html` y el fichero que valida el resultado con el mismo nombre y extensión php.**

```css
input[type=text], input[type=password], input[type=checkbox] select {
 width: 50%;
 padding: 12px 20px;
 margin: 8px 0;
 display: inline-block;
 border: 1px solid #ccc;
 border-radius: 4px;
 box-sizing: border-box;
 }
 label{
 width: 20%;
 font-weight: 800;
 display: inline-block;
 }

 input[type=submit] {
 width: 50%;
 background-color: #4CAF50;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
 }

 input[type=submit]:hover {
 background-color: #45a049;
 }
 input[type=reset] {
 width: 50%;
 background-color: #4c8baf;
 color: white;
 padding: 14px 20px;
 margin: 8px 0;
 border: none;
 border-radius: 4px;
 cursor: pointer;
 }

 input[type=reset]:hover {
 background-color: #4546a0;
 }

 form {
 width: 800px;
 border-radius: 5px;
 background-color: #f2f2f2;
 padding: 20px;
 margin: 0 auto;
 }
 .panelButtons{
 display: flex;
 flex-direction: row;
 }
```
### EJERCICIO 10

**Hacer una aplicación web que permita subir una foto a la carpeta `uploads`. Una vez subida la imagen, deberá mostrarla. Guárdalo el formulario con el nombre `ejercicio05.html` y el fichero que valida el resultado con el mismo nombre y extensión php.**
