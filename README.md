# ISST-G16

Somos el grupo 16 del trabajo de ISST, asignatura del cuarto curso de Ingeniería de Tecnologías y Servicios de Telecomunicación.
La misión de este trabajo es desarrolar un aplicación útil para cualquier perosna que quiera cuidar su salud.
Pondremos a su disposición dietas y ejercicios recomendados, retos mensuales y una IA que le ayudará en cualquier momento.


######  IMPORTANTE  ##############################################################
A la hora de iniciar Spring-boot con el comando "./mvnw clean install package spring-boot:run
-DskipTests=true", si busca "localhost:8080" en el navegador verá que le muesdtra un formulario. El usuario es "user" y la contraseña aparece en la terminal unas 10 lineas arriba. Por ejemplo: (Using generated security password: ce156601-900e-4cb8-8792-fdffae77c232)
######  IMPORTANTE  ##############################################################

###### IMPORTANTE PARA PRUEBAS #######################################################################################################

Será necsario instalar behave y selenium. Para ello escribiremos "pip install behave" y "pip install selenium" en la terminal.
Es muy importante cambiar las rutas del chromedriver, ya que sino no inicia. Para ello, cogeremos el Path completo y lo copiaremos en registro.py (linea 19).
Para arrancar la prueba, bastará con elegir el caso deseado en main, hacer click derecho en main.py y pulsar "Ejecutar archivo de python en Terminal".

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

####################### PRINCIPAL   #########################################

En ella aparecerá otro carrusel, esta vez con su información de pasos y una calculadora para ir llevando las cuentas de las calorias consumidas y quemadas.

####################### TUS DATOS ##################################################

Aquí se muestran todos los datos que tiene la BBDD sobre el usuario que se acaba de registrar/loguear. Por motivos obvios, no aparece la contraseña.

###########EL RESTO DE APARTADOS SE TERMINARÁN A LO LARGOS DE LOS PRÓXIMOS SPRINTS##################################






COSAS NUEVAS:


INTALACION MAVEN:

/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"

brew install maven

