package com.nutriapp.controller;

import java.util.List;
import java.util.Optional;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestParam;
import org.springframework.web.bind.annotation.RestController;

import com.nutriapp.model.User;
import com.nutriapp.repository.UserRepository;

@RestController
@RequestMapping("/users")
public class UserController {

    @Autowired
    private UserRepository userRepository;

    // Endpoint para obtener todos los usuarios
    @GetMapping("/")
    public List<User> getAllUsers() {
        return userRepository.findAll();
    }

    @PostMapping("/")
    public ResponseEntity<String> createUser(@RequestBody User user) {
        // Verificar si el usuario ya existe
        if (userRepository.existsByUsername(user.getUsername())) {
            return ResponseEntity.badRequest().body("El nombre de usuario ya está en uso");
        }
        if (userRepository.existsByEmail(user.getEmail())) {
            return ResponseEntity.badRequest().body("El correo electrónico ya está en uso");
        }

        // Guardar el usuario en la base de datos
        userRepository.save(user);

        return ResponseEntity.ok("Usuario registrado exitosamente");
    }

    @PostMapping("/login")
    public ResponseEntity<String> loginUser(@RequestParam String username, @RequestParam String password) {
        // Buscar al usuario por nombre de usuario
        Optional<User> userOptional = userRepository.findByUsername(username);
        if (userOptional.isEmpty()) {
            return ResponseEntity.badRequest().body("Nombre de usuario no válido");
        }

        User user = userOptional.get();
        // Verificar la contraseña
        if (!user.getPassword().equals(password)) {
            return ResponseEntity.badRequest().body("Contraseña incorrecta");
        }

        // Autenticación exitosa
        // Puedes agregar lógica aquí para iniciar sesión, como establecer una sesión de usuario

        return ResponseEntity.ok("Inicio de sesión exitoso");
    }
}
