package com.nutriapp.config;
import java.io.IOException;

import org.springframework.security.core.Authentication;
import org.springframework.security.web.authentication.AuthenticationSuccessHandler;
import org.springframework.stereotype.Component;

import jakarta.servlet.ServletException;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;

@Component
public class CustomAuthenticationSuccessHandler implements AuthenticationSuccessHandler {

    @Override
    public void onAuthenticationSuccess(HttpServletRequest request, HttpServletResponse response, Authentication authentication) throws IOException, ServletException {
        // Obtener ID del usuario autenticado (supongamos que lo obtienes de UserDetails)
        //int idLong = ((User) authentication.getPrincipal()).getId(); // Obtener el ID como Long
        //int id = idLong.toString(); // Convertir el Long a String


        // Redirigir al usuario a la página con su ID
        // response.sendRedirect(request.getContextPath() + "/index_usuario/" + id);
        response.sendRedirect(request.getContextPath() + "/index_usuario");
    }
}
