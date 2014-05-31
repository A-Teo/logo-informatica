
CREATE TABLE bitacora (
                id_bitacora INTEGER NOT NULL AUTO_INCREMENT,
                username VARCHAR(64) NOT NULL,
                accion VARCHAR(64) NOT NULL,
                tabla VARCHAR(64) NOT NULL,
                dato_nuevo VARCHAR(64),
                dato_viejo VARCHAR(64),
                fech TIMESTAMP NOT NULL,
                CONSTRAINT bitacora_pk PRIMARY KEY (id_bitacora)
);


CREATE TABLE tipo_form (
                id_tipo_form INTEGER NOT NULL AUTO_INCREMENT,
                nombre_form VARCHAR(64) NOT NULL,
                CONSTRAINT tipo_form_pk PRIMARY KEY (id_tipo_form)
);


CREATE TABLE forms (
                id_form INTEGER NOT NULL AUTO_INCREMENT,
                nombre VARCHAR(64) NOT NULL,
                id_tipo_form INTEGER NOT NULL,
                CONSTRAINT forms_pl PRIMARY KEY (id_form)
);


CREATE TABLE rols (
                id_rol INTEGER NOT NULL AUTO_INCREMENT,
                nombre VARCHAR(64) NOT NULL,
                CONSTRAINT id_rol PRIMARY KEY (id_rol)
);


CREATE TABLE rol_form (
                id_form INTEGER NOT NULL,
                id_rol INTEGER NOT NULL,
                CONSTRAINT rol_form_pk PRIMARY KEY (id_form, id_rol)
);


CREATE TABLE users (
                cuenta VARCHAR(64) NOT NULL,
                password VARCHAR(64) NOT NULL,
                CONSTRAINT login PRIMARY KEY (cuenta)
);


CREATE TABLE strong_box (
                id_box VARCHAR(64) NOT NULL,
                cuenta VARCHAR(64) NOT NULL,
                titulo VARCHAR(64) NOT NULL,
                url VARCHAR(64) NOT NULL,
                username VARCHAR(64) NOT NULL,
                password VARCHAR(64) NOT NULL,
                CONSTRAINT id_box PRIMARY KEY (id_box, cuenta)
);


CREATE TABLE user_rol (
                id_rol_ur INTEGER NOT NULL,
                cuenta_ur VARCHAR(64) NOT NULL,
                CONSTRAINT user_rol_pk PRIMARY KEY (id_rol_ur, cuenta_ur)
);


CREATE TABLE sesion (
                id_sesion VARCHAR(64) NOT NULL,
                cuenta VARCHAR(64) NOT NULL,
                pid SMALLINT NOT NULL,
                CONSTRAINT id_sesion PRIMARY KEY (id_sesion, cuenta)
);


ALTER TABLE forms ADD CONSTRAINT tipo_form_forms_fk
FOREIGN KEY (id_tipo_form)
REFERENCES tipo_form (id_tipo_form)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE rol_form ADD CONSTRAINT forms_rol_form_fk
FOREIGN KEY (id_form)
REFERENCES forms (id_form)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE user_rol ADD CONSTRAINT rols_user_rol_fk
FOREIGN KEY (id_rol_ur)
REFERENCES rols (id_rol)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE rol_form ADD CONSTRAINT rols_rol_form_fk
FOREIGN KEY (id_rol)
REFERENCES rols (id_rol)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE sesion ADD CONSTRAINT users_sesion_fk
FOREIGN KEY (cuenta)
REFERENCES users (cuenta)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE user_rol ADD CONSTRAINT users_user_rol_fk
FOREIGN KEY (cuenta_ur)
REFERENCES users (cuenta)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE strong_box ADD CONSTRAINT users_blog_fk
FOREIGN KEY (cuenta)
REFERENCES users (cuenta)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
