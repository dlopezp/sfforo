CREATE TABLE mensaje (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje_privado (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, titulo VARCHAR(255) NOT NULL, id_destinatario BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), INDEX id_destinatario_idx (id_destinatario), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje_respuesta (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, id_tema BIGINT NOT NULL, id_seccion BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), INDEX id_tema_idx (id_tema), INDEX id_seccion_idx (id_seccion), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje_tema (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, titulo VARCHAR(255) NOT NULL, id_seccion BIGINT NOT NULL, fijo TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, slug VARCHAR(255), UNIQUE INDEX mensaje_tema_sluggable_idx (slug), INDEX id_autor_idx (id_autor), INDEX id_seccion_idx (id_seccion), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE rol (id BIGINT AUTO_INCREMENT, nombre VARCHAR(20) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE seccion (id BIGINT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, slug VARCHAR(255), UNIQUE INDEX seccion_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE usuario (id BIGINT AUTO_INCREMENT, nombre_completo VARCHAR(255) NOT NULL, username VARCHAR(20) NOT NULL, password VARCHAR(60) NOT NULL, id_rol BIGINT NOT NULL, INDEX id_rol_idx (id_rol), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), fecha_nacimiento DATE, email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE mensaje ADD CONSTRAINT mensaje_id_autor_sf_guard_user_id FOREIGN KEY (id_autor) REFERENCES sf_guard_user(id);
ALTER TABLE mensaje_privado ADD CONSTRAINT mensaje_privado_id_destinatario_usuario_id FOREIGN KEY (id_destinatario) REFERENCES usuario(id);
ALTER TABLE mensaje_privado ADD CONSTRAINT mensaje_privado_id_autor_sf_guard_user_id FOREIGN KEY (id_autor) REFERENCES sf_guard_user(id);
ALTER TABLE mensaje_respuesta ADD CONSTRAINT mensaje_respuesta_id_tema_mensaje_tema_id FOREIGN KEY (id_tema) REFERENCES mensaje_tema(id);
ALTER TABLE mensaje_respuesta ADD CONSTRAINT mensaje_respuesta_id_seccion_seccion_id FOREIGN KEY (id_seccion) REFERENCES seccion(id);
ALTER TABLE mensaje_respuesta ADD CONSTRAINT mensaje_respuesta_id_autor_sf_guard_user_id FOREIGN KEY (id_autor) REFERENCES sf_guard_user(id);
ALTER TABLE mensaje_tema ADD CONSTRAINT mensaje_tema_id_seccion_seccion_id FOREIGN KEY (id_seccion) REFERENCES seccion(id);
ALTER TABLE mensaje_tema ADD CONSTRAINT mensaje_tema_id_autor_sf_guard_user_id FOREIGN KEY (id_autor) REFERENCES sf_guard_user(id);
ALTER TABLE usuario ADD CONSTRAINT usuario_id_rol_rol_id FOREIGN KEY (id_rol) REFERENCES rol(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
