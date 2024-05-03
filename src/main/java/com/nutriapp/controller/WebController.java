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

    // @GetMapping("/")
    // public String index() {
    //     return "index";
    // }

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


    @GetMapping("/index_usuario")
    public String indexUsuario(@PathVariable String id, Model model) {
        model.addAttribute("id", id);
        return "index_usuario";
    }


    @GetMapping("/index_usuario/{id}/datos")
    public String datosUsuario(@PathVariable String id, Model model) {
        // Lógica para la página de datos del usuario
        return "datos_usuario";
    }
    
    @GetMapping("/index_usuario/{id}/comidas")
    public String comidasUsuario(@PathVariable String id, Model model) {
        // Lógica para la página de comidas del usuario
        return "comidas";
    }
    
    @GetMapping("/index_usuario/{id}/ejercicios")
    public String ejerciciosUsuario(@PathVariable String id, Model model) {
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
