package com.nutriapp.controller;

import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

import com.nutriapp.model.User;
import com.nutriapp.repository.UserRepository;

import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpSession;

@Controller
@RequestMapping("")
public class UserController {

    @Autowired
    private UserRepository userRepository;

    
    public UserController(UserRepository userRepository) {
        this.userRepository = userRepository;
    }

    // Endpoint para obtener todos los usuarios
    // @GetMapping("/")
    // public List<User> getAllUsers() {
    //     return userRepository.findAll();
    // }

    //@PostMapping("/login")
    public String processForm(HttpServletRequest request, HttpSession session) {
    String action = request.getParameter("action");
    
        if ("register".equals(action)) {
            return registerUser(request);
        } else if ("login".equals(action)) {
            return loginUser(request, session);
        }
        return "";        
    }

    

    private String registerUser(HttpServletRequest request) {
        // Lógica para manejar la solicitud de registro
        String nombre = request.getParameter("nombre");
        String username = request.getParameter("username");
        String password = request.getParameter("password");
        String email = request.getParameter("email");
        int peso = Integer.parseInt(request.getParameter("peso"));
        int altura = Integer.parseInt(request.getParameter("altura"));
        int edad = Integer.parseInt(request.getParameter("edad"));
        
        // Verificar si el usuario ya existe
        if (userRepository.existsByUsername(username)) {
            // Si el nombre de usuario ya está en uso, redirigir de vuelta a la página de inicio con un mensaje de error
            return "redirect:/?error=El nombre de usuario ya está en uso";
        }
        if (userRepository.existsByEmail(email)) {
            // Si el correo electrónico ya está en uso, redirigir de vuelta a la página de inicio con un mensaje de error
            return "redirect:/?error=El correo electrónico ya está en uso";
        }
    
        // Crear un nuevo objeto User
        User user = new User();
        user.setNombre(nombre);
        user.setUsername(username);
        user.setPassword(password);
        user.setEmail(email);
        user.setPeso(peso);
        user.setAltura(altura);
        user.setEdad(edad);
    
        // Guardar el usuario en la base de datos
        userRepository.save(user);
    
        // Redirigir al usuario a la página de inicio de sesión
        //return "redirect:/index_usuario/" + user.getId();
        return "redirect:/index_usuario";
    }

private String loginUser(HttpServletRequest request, HttpSession session) {
    // Lógica para manejar la solicitud de inicio de sesión
    String username = request.getParameter("username");
    String password = request.getParameter("password");
   
    // Buscar al usuario por nombre de usuario
    Optional<User> userOptional = userRepository.findByUsername(username);
    if (userOptional.isEmpty()) {
        // Si el nombre de usuario no es válido, redirigir de vuelta a la página de inicio con un mensaje de error
        return "redirect:/?error=Nombre de usuario no válido";
    }

    User user = userOptional.get();
    // Verificar la contraseña
    if (!user.getPassword().equals(password)) {
        // Si la contraseña es incorrecta, redirigir de vuelta a la página de inicio con un mensaje de error
        return "redirect:/?error=Contraseña incorrecta";
    }

    // Autenticación exitosa
    // Puedes agregar lógica aquí para iniciar sesión, como establecer una sesión de usuario
    //session.setAttribute("userId", user.getId());
    // Redirigir al usuario a la página de inicio del usuario con su ID
    //return "redirect:/index_usuario/" + user.getId();
    //int userId =  session.getId();
    session.setAttribute("id", user.getId());
    return "redirect:/index_usuario/" + user.getId();
}

}
