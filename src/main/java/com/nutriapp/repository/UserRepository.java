package com.nutriapp.repository;

import org.springframework.stereotype.Repository;

import com.nutriapp.model.User;

@Repository
public interface UserRepository extends JpaRepository<User, Long> {

    // Método para buscar un usuario por su nombre de usuario
    User findByUsername(String username);

    // Método para verificar si un usuario con el nombre de usuario dado existe
    boolean existsByUsername(String username);

    // Método para verificar si un usuario con el correo electrónico dado existe
    boolean existsByEmail(String email);
}
