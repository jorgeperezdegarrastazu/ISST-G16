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