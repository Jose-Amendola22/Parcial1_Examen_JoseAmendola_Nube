Parcial 1 José Améndola

Instrucciones de cómo levantar los dockers

ADVERTENCIA: Para la correcta funcionalidad de todos los dockers, se debe levantar primero el contenedor de base de datos.

A) Levantar el docker de la base de datos
    1. Abrir una terminal en la carpeta principal "Parcial1_JoseAmendola"
    2. Ejecutar el comando en la terminal "docker-compose up"
    3. Si se quiere entrar a la base de datos desde un gestor, el puerto y contraseña están en el "docker-compose.yml" en la carpeta  "Parcial1_JoseAmendola"

B) Levantar cont_hub (contenedor con imagen)
    1. Abrir una terminal en la carpeta "cont_hub"
    2. Ejecutar el comando en la terminal: "docker-compose up"
    3. Para entrar a la página escribir el siguiente link en un navegador web: "localhost:89"

C) Levantar cont_dockerfile (Contenedor sin imagen)
    1. Abrir una terminal en la carpeta "cont_dockerfile"
    2. Ejecutar el comando en la terminal: "docker-compose up servidorweb2"
    3. Para entrar a la página escribir el siguiente link en un navegador web: "localhost:90"
    