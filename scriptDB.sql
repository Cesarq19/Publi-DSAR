DROP TABLE IF EXISTS usuario CASCADE;
DROP TABLE IF EXISTS texto CASCADE;
DROP TABLE IF EXISTS publicacion CASCADE;

CREATE TABLE usuario (
  id_usuario serial,
  nickname varchar(100) not null,
  correo varchar(100) unique not null,
  clave varchar(100) not null,
  roles json,
  CONSTRAINT PK_id_usuario PRIMARY KEY (id_usuario)
);

CREATE TABLE "publicacion" (
  id_publicacion serial,
  id_usuario integer,
  id_texto integer,
  multimedia blob,
  CONSTRAINT PK_id_publicacion PRIMARY KEY (id_publicacion),
  CONSTRAINT FK_publicacion_id_usuario
    FOREIGN KEY (id_usuario) REFERENCES usuario(id_usuario)
);

CREATE TABLE texto (
  id_texto serial,
  descripcion varchar(255) not null,
  hashtag json,
  CONSTRAINT PK_id_texto PRIMARY KEY(id_texto)
);