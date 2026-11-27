drop table if exists usuarios;
drop table if exists peliculas;
drop table if exists usuarios_peliculas;

CREATE TABLE usuarios (
                          id INT AUTO_INCREMENT PRIMARY KEY,
                          nombre VARCHAR(100) NOT NULL,
                          email VARCHAR(150) UNIQUE NOT NULL,
                          password VARCHAR(255) NOT NULL,
                          fecha_nacimiento date
);
create table peliculas (
                           id int AUTO_INCREMENT primary key,
                           nombre VARCHAR(100) NOT NULL,
                           descripcion VARCHAR(100) NOT NULL
);

CREATE TABLE usuarios_peliculas (
                                    usuario_id INT NOT NULL,
                                    pelicula_id INT NOT NULL,


                                    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
                                    FOREIGN KEY (pelicula_id) REFERENCES peliculas(id) ON DELETE CASCADE,
                                    PRIMARY KEY (usuario_id, pelicula_id)
);