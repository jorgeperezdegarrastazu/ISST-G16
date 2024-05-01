package com.nutriapp.repository;

import java.util.Optional;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.stereotype.Repository;

import com.nutriapp.model.User;

@Repository
public interface UserRepository extends JpaRepository<User, Long> {

    Optional<User> findByUsername(String username);

    // Método para verificar si un usuario con el nombre de usuario dado existe
    boolean existsByUsername(String username);

    // Método para verificar si un usuario con el correo electrónico dado existe
    boolean existsByEmail(String email);
}
