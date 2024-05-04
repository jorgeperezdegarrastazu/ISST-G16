package com.nutriapp.service;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import com.nutriapp.model.User;
import com.nutriapp.repository.UserRepository;

@Service
public class UserService {

    @Autowired
    private UserRepository userRepository; // Suponiendo que tienes un repositorio UserRepository para interactuar con la base de datos

    @Autowired
    public UserService(UserRepository userRepository) {
        this.userRepository = userRepository;
    }

    public User getUserById(Long id) {
        return userRepository.findById(id).orElse(null);
    }


    @Transactional
    public void actualizarCaloriasConsumidas(User user, int cantidad) {
        int caloriasConsumidasActuales = user.getCaloriasConsumidas();
        user.setCaloriasConsumidas(caloriasConsumidasActuales + cantidad);
        user.setCaloriasTotales(user.getCaloriasConsumidas() - user.getCaloriasQuemadas());
        userRepository.save(user);
    }
    
    @Transactional
    public void actualizarCaloriasQuemadas(User user, int cantidad) {
        int caloriasQuemadasActuales = user.getCaloriasQuemadas();
        user.setCaloriasQuemadas(caloriasQuemadasActuales + cantidad);
        user.setCaloriasTotales(user.getCaloriasConsumidas() - user.getCaloriasQuemadas());
        userRepository.save(user);
    }

}
