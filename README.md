# LATAM Rivals

## Pasos para iniciar el repositorio
* Descarga el proyecto con git clone o como zip
* En el directorio del proyecto abre una terminal y escribe npm install
* Una vez terminada la instalación escribe el comando gulp

## Subir cambios al repositorio
1. Primero debes tener un repositorio local, se hace con (solo se usa una vez)
```
git init
```
2. Después agregar los archivos para seguimiendo
```
git add .
```
3. Posteriormente hacer un commit (versión del proyecto)
```
git commit -m "Nombre del commit/version"
```
4. Y ahora tendrás que vincular el proyecto, para esto usa el siguiente comandos (Solo se usa una vez)
```
git remote add origin <link del repositorio>
```
5. Finalmente para poder subir los cambios al repositorio de github se usa:
```
git push -u origin master
```
Eso para subir la primera vez, a partir de ahora solo tendrás que usar los comandos del *2do*, *3er* y *5to* paso

## Estructura del proyecto
### SCSS
* BASE
Esta carpeta se usa para el diseño que tendrá en común todas las páginas, es la plantilla
* BLOCKS / BLOQUES
Esta carpeta es para el diseño de cada bloque de la página web, el header, el footer, contenido principal, el aside, etc.
* CONFIG
En esta carpeta se ponen las variables que usaremos, ejemplo: los colores, las fuentes.
* MIXINS
En esta carpeta se colocan las funciones que usaremos y el diseño que se repetirá, así reutilizamos código
* PAGES
En esta carpeta van los estilos de archivos HTML que requieren una configuración especial y no se repite en otras páginas

### VIEWS - PUG
* CONFIG
Lo mismo que en SCSS, se colocan variables que serán usadas a lo largo del proyecto
* INCLUDES
Vienen siendo los bloques en SCSS, son pedazos de código HTML que serán usados en varias páginas, header, menús, etc.
* MIXINS
Funciones para reutilizar código HTML y no escribir demasiadas veces lo mismo
* PAGES
Aquí van todos los archivos `.pug` que formarán el sitio web, es decir, todas las páginas que forman el sitio web
* TEMPLATES
Lo mismo que SCSS, aquí viene la estructura base de tu sitio web, es decir, su plantilla, que se repetirá en todas las páginas