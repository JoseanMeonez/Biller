/*  CREADO POR BYTES®
 *  Base de datos de Bytes Biller
 *  Demo/Beta de prueba para iniciar base de datos
 *  2021-actualidad
*/

CREATE TABLE constancias(
  id              int(255) auto_increment not null,
  genero          varchar(100) not null,
  nombre_completo varchar(255) not null,
  identidad_img   varchar(255),
  perfil_img      varchar(255),
  fecha           varchar(100) not null,
  cliente_id      int(255) not null,

  CONSTRAINT pk_constancias PRIMARY KEY(id),
  CONSTRAINT fk_cliente_id FOREIGN KEY(cliente_id) REFERENCES clientes(id)
) ENGINE = InnoDb;