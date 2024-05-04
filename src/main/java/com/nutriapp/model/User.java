package com.nutriapp.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class User {
    @Id 
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private Long id;
    private String nombre;
    private int edad;
    private String username;
    private String password;
    private String email;
    private int peso;
    private int altura;
    private boolean premium;
    private int calorias_consumidas;
    private int calorias_quemadas;
    private int calorias_totales;


    //  // Constructor
    //  public User() {
    //      // Generar manualmente el ID al momento de crear una nueva instancia
    //      this.id = generateid();
    //  }
    
    //   // Método para generar manualmente el ID
    //   private Long generateid() {
    //       Random random = new Random();
    //       return random.nextLong();
    //   }


    // Getters
    public Long getId() {
        return id;
    }

    public String getNombre() {
        return nombre;
    }

    public int getEdad() {
        return edad;
    }

    public String getUsername() {
        return username;
    }

    public String getPassword() {
        return password;
    }

    public String getEmail() {
        return email;
    }

    public int getPeso() {
        return peso;
    }

    public int getAltura() {
        return altura;
    }

    public boolean isPremium() {
        return premium;
    }

    // Setters
    public void setId(Long id) {
        this.id = id;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public void setEdad(int edad) {
        this.edad = edad;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setPeso(int peso) {
        this.peso = peso;
    }

    public void setAltura(int altura) {
        this.altura = altura;
    }

    public void setPremium(boolean premium) {
        this.premium = premium;
    }


    // Getters y setters para las calorías consumidas
    public int getCaloriasConsumidas() {
        return calorias_consumidas;
    }

    public void setCaloriasConsumidas(int caloriasConsumidas) {
        this.calorias_consumidas = caloriasConsumidas;
    }

    // Getters y setters para las calorías quemadas
    public int getCaloriasQuemadas() {
        return calorias_quemadas;
    }

    public void setCaloriasQuemadas(int caloriasQuemadas) {
        this.calorias_quemadas = caloriasQuemadas;
    }

    // Getters y setters para las calorías totales
    public int getCaloriasTotales() {
        return calorias_totales;
    }

    public void setCaloriasTotales(int caloriasTotales) {
        this.calorias_totales = caloriasTotales;
    }

    // Los demás getters y setters para las propiedades restantes...

}

