# ISST-G16

Somos el grupo 16 del trabajo de ISST, asignatura del cuarto curso de Ingeniería de Tecnologías y Servicios de Telecomunicación.
La misión de este trabajo es desarrolar un aplicación útil para cualquier perosna que quiera cuidar su salud.
Pondremos a su disposición dietas y ejercicios recomendados, retos mensuales y una IA que le ayudará en cualquier momento.


######  IMPORTANTE  ##############################################################
Es necesario instalar XAMPP 8.2.4-0 (https://sourceforge.net/projects/xampp/files/). Basta con seguir los pasos e instalarlo como una aplicación común. 

1)  Al abrirla, nos vamos a "Manage Servers" e iniciamos todo.
2)  Movemos nuestra carpeta del proyecto a XAMPP/htdocs. En mac, XAMPP se encuentra en la carpeta de Aplicaciones.
3)  Abrimos el navegador y escribimos localhost/phpmyadmin, ahí deberás crear una BBDD de nombre "usuarios" y nombre de la tabla "usuarios_db". ***Se explica más abajo
4)  Ya podrás acceder a la página mediante un servidor local escribiendo en el buscador http://localhost/ISST-G16

CREACIÓN DE BBDD Y TABLAS
Necesitaremos crear una BBDD con los datos del los usuarios. Para ello:

1)  Nos iremos a localhost/phpmyadmin y en la parte de la izquierda le damos a añadir. Es necesario llamarla "usuarios".
2)  Necesitamos crear 2 tablas. Una con los datos del usuario y otra enlazada a la primeras con sus calorias y pasos. Para ello habrá que meter estas dos querys en la parte de arriba donde pone "SQL" (primero una y luego otra, no a la vez). Despues de meter la query hay que puylsar en "continuar".

CREATE TABLE usuarios_db (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  peso DECIMAL(5,2) NOT NULL,
  altura INT(11) NOT NULL,
  edad INT(11) NOT NULL,
  email VARCHAR(100) NOT NULL,
  username VARCHAR(50) NOT NULL,
  contrasena VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE calorias_pasos (
  id INT(11) NOT NULL AUTO_INCREMENT,
  calorias_quemadas INT(11) NOT NULL,
  calorias_consumidas INT(11) NOT NULL,
  calorias_totales INT(11) NOT NULL,
  pasos INT(11) NOT NULL,
  FOREIGN KEY (id) REFERENCES usuarios_db(id)
);

3)  En principio ya debería estar todo bien creado. De ser así, podrías registrar tu primer usuario.

######  IMPORTANTE  ##############################################################

###### IMPORTANTE PARA PRUEBAS #######################################################################################################

Será necsario instalar behave y selenium. Para ello escribiremos "pip install behave" y "pip install selenium" en la terminal.

###### IMPORTANTE PARA PRUEBAS #######################################################################################################



La PÁGINA ANTES DEL REGISTRO DEL USUARIO, MOSTRARÁ:

################ HOME ################################################

En ella muestra un carrusel con información sobre la app.

################ SOBRE NOSOTROS ######################################

En ella explica quiénes somos y las ideas que tenemos con la app.

################ SUSCRIPCIÓN #########################################

En ella mostrará los tipos de suscripción y dejará poder comprarla direvtamente desde ahi.

################ CONTACTO #########################################

En ella muestra la página de contacto, donde el usuario podrá mandar un correo para pedir ayuda. Muestra un mapa con la ubicación de las oficinas









LA PÁGINA UNA VEZ EL USUARIO ESTÁ REGISTRADO:

####################### Principal   #########################################

En ella aparecerá otro carrusel, esta vez con su información de pasos y una calculadora para ir llevando las cuentas de las calorias consumidas y quemadas.

###########EL RESTO DE APARTADOS SE TERMINARÁN A LO LARGOS DE LOS PRÓXIMOS SPRINTS##################################