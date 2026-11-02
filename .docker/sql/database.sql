DELIMITER //
DROP TABLE IF EXISTS users_peliculas;
DROP TABLE IF EXISTS users;//
DROP TABLE IF EXISTS peliculas;//
CREATE table  users(
    id integer primary key AUTO_INCREMENT,
    name varchar(255),
    address varchar(255),
    phone varchar(16),
    birthdate date,
    password varchar(255),
    email varchar(255) UNIQUE
);
//
CREATE table peliculas(
  uuid varchar(32) primary key ,
  name varchar(255),
  length int,
  synopsis longtext,
  type varchar(10)
);
//
create table users_peliculas(
    id_user int references users(id) on delete cascade,
    uuid_pelicula varchar(32)references peliculas(uuid),
    constraint pk_users_peliculas primary key (id_user,uuid_pelicula)
);

//

insert into users(name,address,phone,birthdate,password,email)
values('Carlos Martinez','AV, Reina Sofia','965551515',STR_TO_DATE('26/05/2022','%d/%m/%Y'),'12345678','carlos@gmail.com');



//