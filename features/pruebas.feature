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
