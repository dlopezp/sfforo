CREATE TABLE mensaje (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje_privado (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, titulo VARCHAR(255) NOT NULL, id_destinatario BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_destinatario_idx (id_destinatario), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje_respuesta (contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, id_tema BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), PRIMARY KEY(id_tema)) ENGINE = INNODB;
CREATE TABLE mensaje_tema (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, titulo VARCHAR(255) NOT NULL, id_seccion BIGINT NOT NULL, fijo TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), INDEX id_seccion_idx (id_seccion), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE rol (id BIGINT AUTO_INCREMENT, nombre VARCHAR(20) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE seccion (id BIGINT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE usuario (id BIGINT AUTO_INCREMENT, nombre_completo VARCHAR(255) NOT NULL, username VARCHAR(20) NOT NULL, password VARCHAR(60) NOT NULL, id_rol BIGINT NOT NULL, INDEX id_rol_idx (id_rol), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE mensaje ADD CONSTRAINT mensaje_id_autor_usuario_id FOREIGN KEY (id_autor) REFERENCES usuario(id);
ALTER TABLE mensaje_privado ADD CONSTRAINT mensaje_privado_id_destinatario_usuario_id FOREIGN KEY (id_destinatario) REFERENCES usuario(id);
ALTER TABLE mensaje_respuesta ADD CONSTRAINT mensaje_respuesta_id_autor_usuario_id FOREIGN KEY (id_autor) REFERENCES usuario(id);
ALTER TABLE mensaje_tema ADD CONSTRAINT mensaje_tema_id_seccion_seccion_id FOREIGN KEY (id_seccion) REFERENCES seccion(id);
ALTER TABLE mensaje_tema ADD CONSTRAINT mensaje_tema_id_autor_usuario_id FOREIGN KEY (id_autor) REFERENCES usuario(id);
ALTER TABLE usuario ADD CONSTRAINT usuario_id_rol_rol_id FOREIGN KEY (id_rol) REFERENCES rol(id);