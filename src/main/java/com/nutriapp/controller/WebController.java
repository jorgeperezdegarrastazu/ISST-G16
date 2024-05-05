package com.nutriapp.controller;

import java.util.HashMap;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.http.HttpStatus;
import org.springframework.http.ResponseEntity;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestBody;

import com.nutriapp.model.User;
import com.nutriapp.repository.UserRepository;
import com.nutriapp.request.CaloriasRequest;
import com.nutriapp.service.UserService;

import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpSession;

@Controller
public class WebController {

    @Autowired
    private UserRepository userRepository;

    @Autowired
    private UserController userController;

    @Autowired
    private UserService userService;


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

    @GetMapping("/ejercicios")
    public String ejercicios() {
        return "ejercicios";
    }

    @GetMapping("/comidas")
    public String comidas() {
        return "comidas";
    }

    @GetMapping("/datos_usuario")
    public String datos_usuario() {
        return "datos_usuario";
    }


    // @GetMapping("/index_usuario")
    // public String indexUsuario(@PathVariable String id, Model model) {
    //     model.addAttribute("id", id);
    //     return "index_usuario";
    // }

    //  @GetMapping("/index_usuario")
    //  public String indexUsuario() {
    //      return "index_usuario";
    //  }

    @GetMapping("/index_usuario")
    public String indexUsuario(Model model,HttpSession session) {
        Long id = (Long) session.getAttribute("id");
        Integer calorias_quemadas = (Integer) session.getAttribute("calorias_quemadas");
        Integer calorias_consumidas = (Integer) session.getAttribute("calorias_consumidas");
        Integer calorias_totales = (Integer) session.getAttribute("calorias_totales");

        if (id != null) {
            model.addAttribute("id", id);
            // model.addAttribute("calorias_consumidas", user.getCaloriasConsumidas());
            // model.addAttribute("calorias_quemadas", user.getCaloriasQuemadas());
             model.addAttribute("calorias_consumidas", calorias_consumidas);
             model.addAttribute("calorias_quemadas", calorias_quemadas);
             model.addAttribute("calorias_totales", calorias_totales);
            //return "redirect:/index_usuario/" + id;
            return "index_usuario";
        } else {
            // Manejar el caso en que no se encuentra el ID del usuario en la sesión
            return "redirect:/"; // O redirigir a alguna otra página en caso de error
        }
    }

    


    // @GetMapping("/index_usuario")
    // public String indexUsuario(Model model, HttpSession session) {
    //     Long id = (Long) session.getAttribute("id");
    //     if (id != null) {
    //         model.addAttribute("id", id.toString());
    //         return "redirect:/index_usuario";
    //     } else {
    //         // Manejar el caso en que no se encuentra el ID del usuario en la sesión
    //         return "redirect:/"; // O redirigir a alguna otra página en caso de error
    //     }
    // }



    @GetMapping("/index_usuario/{id}/datos")
    public String datosUsuario(@PathVariable String id, Model model, HttpSession session) {
        Long userId = (Long) session.getAttribute("id");
        if (userId != null) {
            model.addAttribute("id", userId);
            // Lógica para la página de datos del usuario
            return "datos_usuario";
        } else {
            // Manejar el caso en que no se encuentra el ID del usuario en la sesión
            return "redirect:/"; // O redirigir a alguna otra página en caso de error
        }
    }
    
    @GetMapping("/index_usuario/{id}/comidas")
    public String comidasUsuario(@PathVariable String id, Model model, HttpSession session) {
        Long userId = (Long) session.getAttribute("id");
        if (userId != null) {
            model.addAttribute("id", userId);
            // Lógica para la página de comidas del usuario
            return "comidas";
        } else {
            // Manejar el caso en que no se encuentra el ID del usuario en la sesión
            return "redirect:/"; // O redirigir a alguna otra página en caso de error
        }
    }
    
    @GetMapping("/index_usuario/ejercicios")
    public String ejerciciosUsuario(@PathVariable String id, Model model, HttpSession session) {
        Long userId = (Long) session.getAttribute("id");
        if (userId != null) {
            model.addAttribute("id", userId);
            // Lógica para la página de ejercicios del usuario
            return "ejercicios";
        } else {
            // Manejar el caso en que no se encuentra el ID del usuario en la sesión
            return "redirect:/"; // O redirigir a alguna otra página en caso de error
        }
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


@PostMapping("/actualizar_calorias")
public ResponseEntity<?> actualizarCaloriasEnBD(@RequestBody CaloriasRequest request, HttpSession session) {
    Long userId = (Long) session.getAttribute("id");
    if (userId != null) {
        User user = userService.getUserById(userId);
        if (user != null) {
            switch (request.getTipo()) {
                case 0: // Consumidas
                    userService.actualizarCaloriasConsumidas(user, request.getCantidad());
                    break;
                case 1: // Quemadas
                    userService.actualizarCaloriasQuemadas(user, request.getCantidad());
                    break;
                default:
                    return ResponseEntity.badRequest().build();
            }
            return ResponseEntity.ok().build();
        } else {
            return ResponseEntity.notFound().build();
        }
    } else {
        return ResponseEntity.status(HttpStatus.UNAUTHORIZED).build();
    }
}

@GetMapping("/calorias")
public ResponseEntity<?> obtenerCaloriasUsuario(HttpSession session) {
    Long userId = (Long) session.getAttribute("id");
    if (userId != null) {
        User user = userService.getUserById(userId);
        // Obtener los datos de calorías del usuario
        int totalCaloriasConsumidas = user.getCaloriasConsumidas();
        int totalCaloriasQuemadas = user.getCaloriasQuemadas();
        int totalCalorias = totalCaloriasConsumidas - totalCaloriasQuemadas;

        // Construir el objeto JSON de respuesta
        Map<String, Integer> caloriasData = new HashMap<>();
        caloriasData.put("totalCaloriasConsumidas", totalCaloriasConsumidas);
        caloriasData.put("totalCaloriasQuemadas", totalCaloriasQuemadas);
        caloriasData.put("totalCalorias", totalCalorias);

        return ResponseEntity.ok(caloriasData);
    } else {
        return ResponseEntity.notFound().build();
    }
}

@GetMapping("/reseteo_calorias")
    public ResponseEntity<?> reseteoCaloriasUsuario(HttpSession session) {
        Long userId = (Long) session.getAttribute("id");
        if (userId != null) {
            User user = userService.getUserById(userId);
            // Obtener los datos de calorías del usuario
            int totalCaloriasConsumidas = user.getCaloriasConsumidas();
            int totalCaloriasQuemadas = user.getCaloriasQuemadas();
            int totalCalorias = totalCaloriasConsumidas - totalCaloriasQuemadas;

            // Resetear las calorías del usuario
            user.setCaloriasConsumidas(0);
            user.setCaloriasQuemadas(0);
            userRepository.save(user);

            // Construir el objeto JSON de respuesta con los datos reseteados
            Map<String, Integer> caloriasData = new HashMap<>();
            caloriasData.put("totalCaloriasConsumidas", 0);
            caloriasData.put("totalCaloriasQuemadas", 0);
            caloriasData.put("totalCalorias", 0);

            return ResponseEntity.ok(caloriasData);
        } else {
            return ResponseEntity.notFound().build();
        }
}


    
}
