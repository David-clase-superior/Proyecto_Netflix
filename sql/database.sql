DELIMITER //
DROP TABLE IF EXISTS users_peliculas; //
DROP TABLE IF EXISTS users; //
DROP TABLE IF EXISTS peliculas; //

CREATE TABLE users(
    id int AUTO_INCREMENT primary key,
    name varchar(255),
    address varchar(255),
    phone varchar(16),
    birthdate date,
    password varchar(255),
    email varchar(255) UNIQUE

);
//
CREATE TABLE peliculas(
    uuid varchar(32) primary key,
    name varchar(255),
    lenght int,
    synopsis longtext,
    type varchar(10)
);
//
CREATE TABLE users_peliculas(
    id_user int references users(id),
    uuid_pelicula varchar(32) references peliculas(uuid) on delete cascade,
    constraint pk_users_peliculas primary key (id_user, uuid_pelicula)

);
//

insert into users(name, address, phone, birthdate, password, email)
    values ('Carlos Martinez', 'Av Reina Sofia',
            '123456789', STR_TO_DATE('26/05/2022', '%d/%c/%Y'),
            '12345678','carlos@email.com');
//

