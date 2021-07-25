/*  CREADO POR BYTES®
 *  Base de datos de Bytes Biller
 *  Demo/Beta de prueba para iniciar base de datos
 *  2021-actualidad
*/

CREATE TABLE usuarios(
  id            int(255) auto_increment not null,
  nombre        varchar(100) not null,
  apellidos     varchar(100) not null,
  email         varchar(255) not null,
  contraseña    varchar(255) not null,
  rol           varchar(20) not null,
  imagen        varchar(255),

  CONSTRAINT pk_usuarios PRIMARY KEY(id),
  CONSTRAINT uq_email UNIQUE(email)
) ENGINE = InnoDb;

INSERT INTO usuarios VALUES(
  NULL,
  'Admin',
  'Admin',
  'admin@admin.com',
  'contraseña',
  'admin',
  NULL
);