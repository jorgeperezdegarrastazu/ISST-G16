 package com.nutriapp.config;
 import javax.sql.DataSource;

import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.config.annotation.web.configurers.HeadersConfigurer.FrameOptionsConfig;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.provisioning.JdbcUserDetailsManager;
import org.springframework.security.web.SecurityFilterChain;


 @Configuration
 @EnableWebSecurity
 public class SecurityConfig3{

    private CustomAuthenticationSuccessHandler customAuthenticationSuccessHandler;

     @Bean
     public SecurityFilterChain securityFilterChain5(HttpSecurity http) throws Exception {
         http
         //Deshabilitamos protección CSRF (distinto puerto)
         .csrf(csrf -> {csrf.disable();})
         .authorizeHttpRequests(auth -> {
         auth.requestMatchers("/").permitAll();
         auth.requestMatchers("/about").permitAll();
         auth.requestMatchers("/contacto").permitAll();
         auth.requestMatchers("/suscripciones").permitAll();
         auth.requestMatchers("/suscripciones", "/css/**", "/js/**", "/img/**").permitAll();
         auth.requestMatchers("/index_usuario").hasRole("USU");
         auth.requestMatchers("/comidas/{id}").hasRole("USU");
         auth.requestMatchers("/ejercicios/{id}").hasRole("USU");
         auth.requestMatchers("/datos_usuario/{id}").hasRole("USU");
         
         });
     //Deshabilitamos protección X-Frame-Options (habilitada por defecto)
     http.headers(headers -> headers.frameOptions(FrameOptionsConfig::disable));
     return http.build();
     } 

     @Bean
     public UserDetailsService jdbcUserDetailsService5(DataSource dataSource) {
         String usersByUsernameQuery = "select username, password from usuario where username = 'dani'";
         String authsByUserQuery = "select username, 'USU' as rol from usuario where username = 'dani'";
         JdbcUserDetailsManager users =  new JdbcUserDetailsManager(dataSource);
         users.setUsersByUsernameQuery(usersByUsernameQuery);
         users.setAuthoritiesByUsernameQuery(authsByUserQuery);
         return users;
     }
 }

