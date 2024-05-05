Feature: pruebas

    Background:
        Given the entrance the web

    @Caso1
    Scenario: Login del usuario
    Given click on registrate
    When write on login
    Then write on password

    @Caso2
    Scenario: Registro de usuario
    Given click on registrate
    when write on 'nombre'
    then write on 'surname' 
    then write on 'peso'
    then write on 'altura' 
    then write on 'edad' 
    then write on 'mail' 
    then write on 'username' 
    then write on 'password'

    @Caso3
    Scenario: Conteo de calorias consumidas
    Given click on 'index'
    When write on 'caloriasconsumidas'
    then click on 'añadir'

    @Caso4
    Scenario: Ejercicio
    Given click on 'index'
    when write on  'caloriasquemadas'
    then click on 'añadir1'


    @CasoX
    Scenario: Introduccion a la página
    Given click on 'registrate'
    And write 'madreee' on 'caja_nombre'
    And write '75' on 'caja_peso'
    And write '180' on 'caja_altura'
    And write '24' on 'caja_edad'
    And write 'madreee@mail.com' on 'caja_mail'
    And write 'madreee' on 'caja_user'
    And write 'madree' on 'caja_password'
    And click on 'registrarse'
    


    @CasoY
    Scenario: Login más consumidas
    Given click on 'registrate'
    And write 'dani' on 'caja_user_login'
    And write 'dani' on 'caja_password_login'
    Then click on 'login'
    When click on 'pagina_siguiente'
    And write '123' on 'caloriasconsumidas'
    And click on 'añadir'
    And select '3' on 'selector_comida'
    And click on 'añadir2'
    Then click on 'pagina_siguiente'
    And write '123' on 'caloriasquemadas'
    And click on 'añadir1'
    And select '4' on 'selector_ejercicio'
    And write '130' on 'caja_tiempo'
    And click on 'añadir3'
    And click on 'resetear'