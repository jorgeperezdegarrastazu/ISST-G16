CREATE TABLE usuario (
    id BIGINT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    edad INT NOT NULL,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    peso INT,
    altura INT,
    premium BOOLEAN,
    calorias_consumidas INT,
    calorias_quemadas INT,
    calorias_totales INT,
    pasos INT
);
