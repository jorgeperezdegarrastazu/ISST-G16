package com.nutriapp.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

import com.nutriapp.model.User;
import com.nutriapp.repository.UserRepository;

@Controller
public class WebController {

    @Autowired
    private UserRepository userRepository;

    @GetMapping("/")
    public String index() {
        return "index";
    }

    @GetMapping("/suscripciones")
    public String suscripciones() {
        return "suscripciones";
    }

    @GetMapping("/about")
    public String about() {
        return "about";
    }

    @GetMapping("/contacto")
    public String contacto() {
        return "contacto";
    }


    @GetMapping("/index_usuario/{userId}")
    public String indexUsuario(@PathVariable String userId, Model model) {
        // Aquí podrías agregar la lógica para cargar los datos específicos del usuario con el userId proporcionado
        // Por ahora, solo pasamos el userId al modelo para que pueda ser utilizado en la página HTML
        model.addAttribute("userId", userId);
        return "index_usuario";
    }


    @GetMapping("/index_usuario/{userId}/datos")
    public String datosUsuario(@PathVariable String userId, Model model) {
        // Lógica para la página de datos del usuario
        return "datos_usuario";
    }
    
    @GetMapping("/index_usuario/{userId}/comidas")
    public String comidasUsuario(@PathVariable String userId, Model model) {
        // Lógica para la página de comidas del usuario
        return "comidas";
    }
    
    @GetMapping("/index_usuario/{userId}/ejercicios")
    public String ejerciciosUsuario(@PathVariable String userId, Model model) {
        // Lógica para la página de ejercicios del usuario
        return "ejercicios";
    }

    @GetMapping("/users")
    public String getUsers(Model model) {
        Iterable<User> users = userRepository.findAll();
        model.addAttribute("users", users);
        return "users";
    }

    @PostMapping("/users")
    public String createUser(User user) {
        userRepository.save(user);
        return "redirect:/users";
    }
}
