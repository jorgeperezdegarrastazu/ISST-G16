package com.nutriapp.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;

import com.nutriapp.repository.UserRepository;

import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpSession;

@Controller
public class WebController {

    @Autowired
    private UserRepository userRepository;

    @Autowired
    private UserController userController;


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


    // @GetMapping("/index_usuario")
    // public String indexUsuario(@PathVariable String id, Model model) {
    //     model.addAttribute("id", id);
    //     return "index_usuario";
    // }

     @GetMapping("/index_usuario")
     public String indexUsuario() {
         return "index_usuario";
     }

    // @GetMapping("/index_usuario")
    // public String indexUsuario(Model model, HttpSession session) {
    //     Long userId = (Long) session.getAttribute("userId");
    //     if (userId != null) {
    //         model.addAttribute("id", userId.toString());
    //         return "redirect:/index_usuario";
    //     } else {
    //         // Manejar el caso en que no se encuentra el ID del usuario en la sesión
    //         return "redirect:/"; // O redirigir a alguna otra página en caso de error
    //     }
    // }



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

    // @GetMapping("/login")
    // public String getUsers(Model model) {
    //     Iterable<User> users = userRepository.findAll();
    //     model.addAttribute("users", users);
    //     UserController.processForm(login)
    //     return "index_usuario";
    // }

    // @PostMapping("/register")
    // public String createUser(User user) {
    //     userRepository.save(user);
    //     return "index_usuario";
    // }

    @PostMapping("/login")
    public String getUsers(HttpServletRequest request, HttpSession session) {
        //UserController userController = new UserController();
        
        return userController.processForm(request, session);
        //userController.processForm(request, session);
        // return indexUsuario(null, session);
        //return indexUsuario();
    }

    @PostMapping("/register")
    public String createUser(HttpServletRequest request,  HttpSession session) {
        //userRepository.save(user);

        //UserController userController = new UserController();
        return userController.processForm(request, session);
        //userController.processForm(request, session);
        // return indexUsuario(null, session);
        //return indexUsuario();
    }
}
