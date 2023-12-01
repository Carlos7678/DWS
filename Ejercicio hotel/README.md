# Sistema de Gestión de Hoteles

¡Bienvenido/a al sistema de gestión de hoteles! Aquí puedes añadir nuevos hoteles, visualizar la lista existente y explorar imágenes impresionantes de nuestros hoteles.

## Contenido

- Inicio `index.html`
- Añadir Hoteles `añadirHoteles.html`
- Ver Hoteles `verHoteles.php`
- Estilos Página de Inicio `index.css`
- Estilos Página de Añadir Hoteles `añadirHoteles.css`
- Estilos Página de Ver Hoteles `verHoteles.css`
- Fichero CSV `hoteles.csv`
- Script PHP `addHotel.php`

## Páginas Principales

### 1. Inicio `index.html`

La página principal te da la bienvenida con un diseño intuitivo. Puedes explorar imágenes de nuestros maravillosos hoteles a través de un elegante carrusel.

#### Funcionalidades Destacadas:

- **Carrusel de Imágenes:** Descubre nuestros hoteles con imágenes cautivadoras.

- **Botones:**
  - Volver al Inicio `index.html`: Regresa a la página principal.
  - Ver Hoteles `verHoteles.php`: Explora la lista completa de hoteles.

#### Archivo CSS: `index.css`

Este archivo CSS proporciona estilos específicos para la página de inicio.

### 2. Añadir Hoteles `añadirHoteles.html`

En esta página, puedes ingresar las características del hotel que deseas añadir. Al hacer clic en el botón "Añadir Hotel", la información se guardará en un fichero CSV llamado `hoteles.csv`.

#### Funcionalidades Destacadas:

- **Formulario de Añadir Hotel:** Completa los detalles del hotel que deseas agregar.
  
- **Botones:**
  - Volver al Inicio `index.html`: Regresa a la página principal.
  - Ver Hoteles `verHoteles.php`: Explora la lista completa de hoteles.

#### Archivo CSS: `añadirHoteles.css`

Este archivo CSS proporciona estilos específicos para la página de añadir hoteles.

### 3. Ver Hoteles `verHoteles.php`

Esta página muestra la lista completa de hoteles almacenados en el fichero CSV `hoteles.csv`. Aquí puedes visualizar todas las características de cada hotel.

#### Funcionalidades Destacadas:

- **Listado de Hoteles:** Visualiza todas las características de cada hotel almacenado.

- **Botones:**
  - Volver al Inicio `index.html`: Regresa a la página principal.
  - Añadir Hoteles `añadirHoteles.html`: Dirígete a la página para agregar nuevos hoteles.

#### Archivo CSS: `verHoteles.css`

Este archivo CSS proporciona estilos específicos para la página de visualización de hoteles.

### Script PHP `addHotel.php`

Este script PHP se encarga de recibir la información de un formulario enviado por el método POST. Verifica si el hotel ya existe en el archivo CSV `hoteles.csv`. Si el hotel no existe, agrega los detalles del nuevo hotel al archivo CSV. En caso contrario, redirige a la página de añadir hoteles con un mensaje de error correspondiente.

## Conclusión

¡Disfruta gestionando tus hoteles con facilidad! Siempre puedes volver a la página principal para explorar más hoteles o añadir nuevas propiedades a nuestro increíble catálogo. ¡Gracias por elegir nuestro sistema de gestión de hoteles! 🏨✨

