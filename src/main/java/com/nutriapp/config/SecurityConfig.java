package com.nutriapp.config;

import javax.sql.DataSource;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.context.annotation.Configuration;
import org.springframework.security.config.annotation.web.builders.HttpSecurity;
import org.springframework.security.config.annotation.web.configuration.EnableWebSecurity;
import org.springframework.security.core.userdetails.UserDetailsService;
import org.springframework.security.provisioning.JdbcUserDetailsManager;
import org.springframework.security.web.SecurityFilterChain;

@Configuration
@EnableWebSecurity
public class SecurityConfig {

    @Autowired
    private CustomAuthenticationSuccessHandler customAuthenticationSuccessHandler;

    @SuppressWarnings("removal")
    @Bean
    public SecurityFilterChain securityFilterChain(HttpSecurity http) throws Exception {
        http
                // Deshabilitamos protección CSRF (distinto puerto)
                .csrf(csrf -> csrf.disable())
                .authorizeHttpRequests(authorize -> authorize
                                .requestMatchers("/index_usuario/**").hasRole("USU") // Permite acceso a todas las rutas que comiencen con "/index_usuario" para usuarios con el rol "USU"
                                .anyRequest().permitAll() // Permitir acceso a cualquier otra ruta
                )
                /// Configurar el manejador de autenticación exitosa
                .formLogin(login -> login
                .successHandler(customAuthenticationSuccessHandler)
                .loginPage("/") // Ruta de la página de inicio de sesión
                .permitAll())
                // Deshabilitamos protección X-Frame-Options (habilitada por defecto)
                .headers(headers -> headers
                .frameOptions().disable());
        
        return http.build();
    } 

    @Bean
    public UserDetailsService jdbcUserDetailsService(DataSource dataSource) {
        String usersByUsernameQuery = "select username, password, 1 as enabled from usuario where username = ?";
        String authsByUserQuery = "select username, 'USU' as authority from usuario where username = ?";
        JdbcUserDetailsManager users =  new JdbcUserDetailsManager(dataSource);
        users.setUsersByUsernameQuery(usersByUsernameQuery);
        users.setAuthoritiesByUsernameQuery(authsByUserQuery);
        return users;
    }
}
