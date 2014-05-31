
CREATE SEQUENCE public.bitacora_id_bitacora_seq;

CREATE TABLE public.bitacora (
                id_bitacora INTEGER NOT NULL DEFAULT nextval('public.bitacora_id_bitacora_seq'),
                username VARCHAR NOT NULL,
                accion VARCHAR NOT NULL,
                tabla VARCHAR NOT NULL,
                dato_nuevo VARCHAR,
                dato_viejo VARCHAR,
                fech TIMESTAMP NOT NULL,
                CONSTRAINT bitacora_pk PRIMARY KEY (id_bitacora)
);


ALTER SEQUENCE public.bitacora_id_bitacora_seq OWNED BY public.bitacora.id_bitacora;

CREATE SEQUENCE public.tipo_form_id_tipo_form_seq_1;

CREATE TABLE public.tipo_form (
                id_tipo_form INTEGER NOT NULL DEFAULT nextval('public.tipo_form_id_tipo_form_seq_1'),
                nombre_form VARCHAR NOT NULL,
                CONSTRAINT tipo_form_pk PRIMARY KEY (id_tipo_form)
);


ALTER SEQUENCE public.tipo_form_id_tipo_form_seq_1 OWNED BY public.tipo_form.id_tipo_form;

CREATE SEQUENCE public.forms_id_form_seq;

CREATE TABLE public.forms (
                id_form INTEGER NOT NULL DEFAULT nextval('public.forms_id_form_seq'),
                nombre VARCHAR NOT NULL,
                id_tipo_form INTEGER NOT NULL,
                CONSTRAINT forms_pl PRIMARY KEY (id_form)
);


ALTER SEQUENCE public.forms_id_form_seq OWNED BY public.forms.id_form;

CREATE SEQUENCE public.rols_id_rol_seq;

CREATE TABLE public.rols (
                id_rol INTEGER NOT NULL DEFAULT nextval('public.rols_id_rol_seq'),
                nombre VARCHAR NOT NULL,
                CONSTRAINT id_rol PRIMARY KEY (id_rol)
);


ALTER SEQUENCE public.rols_id_rol_seq OWNED BY public.rols.id_rol;

CREATE TABLE public.rol_form (
                id_form INTEGER NOT NULL,
                id_rol INTEGER NOT NULL,
                CONSTRAINT rol_form_pk PRIMARY KEY (id_form, id_rol)
);


CREATE TABLE public.users (
                cuenta VARCHAR NOT NULL,
                password VARCHAR NOT NULL,
                CONSTRAINT login PRIMARY KEY (cuenta)
);


CREATE SEQUENCE public.strong_box_id_box_seq;

CREATE TABLE public.strong_box (
                id_box VARCHAR NOT NULL DEFAULT nextval('public.strong_box_id_box_seq'),
                cuenta VARCHAR NOT NULL,
                titulo VARCHAR NOT NULL,
                url VARCHAR NOT NULL,
                username VARCHAR NOT NULL,
                password VARCHAR NOT NULL,
                CONSTRAINT id_box PRIMARY KEY (id_box, cuenta)
);


ALTER SEQUENCE public.strong_box_id_box_seq OWNED BY public.strong_box.id_box;

CREATE TABLE public.user_rol (
                id_rol_ur INTEGER NOT NULL,
                cuenta_ur VARCHAR NOT NULL,
                CONSTRAINT user_rol_pk PRIMARY KEY (id_rol_ur, cuenta_ur)
);


CREATE SEQUENCE public.sesion_id_sesion_seq;

CREATE TABLE public.sesion (
                id_sesion VARCHAR NOT NULL DEFAULT nextval('public.sesion_id_sesion_seq'),
                cuenta VARCHAR NOT NULL,
                pid SMALLINT NOT NULL,
                CONSTRAINT id_sesion PRIMARY KEY (id_sesion, cuenta)
);


ALTER SEQUENCE public.sesion_id_sesion_seq OWNED BY public.sesion.id_sesion;

ALTER TABLE public.forms ADD CONSTRAINT tipo_form_forms_fk
FOREIGN KEY (id_tipo_form)
REFERENCES public.tipo_form (id_tipo_form)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.rol_form ADD CONSTRAINT forms_rol_form_fk
FOREIGN KEY (id_form)
REFERENCES public.forms (id_form)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.user_rol ADD CONSTRAINT rols_user_rol_fk
FOREIGN KEY (id_rol_ur)
REFERENCES public.rols (id_rol)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.rol_form ADD CONSTRAINT rols_rol_form_fk
FOREIGN KEY (id_rol)
REFERENCES public.rols (id_rol)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.sesion ADD CONSTRAINT users_sesion_fk
FOREIGN KEY (cuenta)
REFERENCES public.users (cuenta)
ON DELETE NO ACTION
ON UPDATE NO ACTION
DEFERRABLE INITIALLY IMMEDIATE;

ALTER TABLE public.user_rol ADD CONSTRAINT users_user_rol_fk
FOREIGN KEY (cuenta_ur)
REFERENCES public.users (cuenta)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;

ALTER TABLE public.strong_box ADD CONSTRAINT users_blog_fk
FOREIGN KEY (cuenta)
REFERENCES public.users (cuenta)
ON DELETE NO ACTION
ON UPDATE NO ACTION
NOT DEFERRABLE;
