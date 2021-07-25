/*  CREADO POR BYTES®
 *  Base de datos de Bytes Biller
 *  Demo/Beta de prueba para iniciar base de datos
 *  2021-actualidad
*/

CREATE TABLE clientes(
  id                int(255) auto_increment not null,
  nombre            varchar(100) not null,
  razon_social      varchar(255) not null,
  rtn               varchar(255) not null,
  email1            varchar(255) not null,
  email2            varchar(255),
  email3            varchar(255),
  celular1          varchar(9) not null,
  celular2          varchar(9),
  telefono1         varchar(9),
  telefono2         varchar(9),
  r_legal           varchar(100) not null,
  r_legal_identidad varchar(100) not null,
  r_legal_celular1  varchar(9) not null,
  r_legal_celular2  varchar(9),
  r_legal_email1    varchar(255) not null,
  r_legal_email2    varchar(255),

  CONSTRAINT pk_clientes PRIMARY KEY(id),
  CONSTRAINT uq_razon_social UNIQUE(razon_social),
  CONSTRAINT uq_rtn UNIQUE(rtn)
) ENGINE = InnoDb;