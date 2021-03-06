CREATE TABLE    ACTORES
(
    CODIGO   NUMBER(10),
    NOMBRE   VARCHAR2(50) CONSTRAINT NOMBRE_OBLIGATORIO NOT NULL,
    FECHA    DATE,
    NACIONALIDAD  VARCHAR2(20),
CONSTRAINT PK_CODIGO PRIMARY KEY(CODIGO)
);

COMMIT;

CREATE TABLE  PERSONAJES
(
    CODIGO    NUMBER(10),
    NOMBRE    VARCHAR2(50) CONSTRAINT NOMBRE__PERSONAJES_OBLIGATORIO NOT NULL,
    RAZA      VARCHAR2(20) CONSTRAINT RAZA_OBLIGATORIO NOT NULL,
    GRADO     VARCHAR2(20) CONSTRAINT GRADO_OBLIGATORIO NOT NULL,
    CODIGO_ACTOR  NUMBER(10),
    CODIGO_SUPERIOR  NUMBER(10),
CONSTRAINT PK_CODIGO_PERSONAJES PRIMARY KEY(CODIGO),
CONSTRAINT FK_ACTOR FOREIGN KEY(CODIGO_ACTOR) REFERENCES ACTORES (CODIGO),
CONSTRAINT FK_SUPERIOR FOREIGN KEY(CODIGO_SUPERIOR) REFERENCES PERSONAJES (CODIGO)
);

COMMIT;

CREATE TABLE PLANETAS
(
    CODIGO      NUMBER(10),
    GALAXIA     VARCHAR2(50) CONSTRAINT GALAXIA_OBLIGATORIO NOT NULL,
    NOMBRE      VARCHAR2(50) CONSTRAINT NOMBRE_PLANETAS_OBLIGATORIO  NOT NULL,
CONSTRAINT PK_CODIGO_PLANETAS PRIMARY KEY(CODIGO)
);

COMMIT;

CREATE TABLE CAPITULOS
(
    TEMPORADA   NUMBER(10),
    ORDEN       NUMBER(10),
    TITULO      VARCHAR2(50) CONSTRAINT TITULO_OBLIGATORIO NOT NULL,
    FECHA       DATE CONSTRAINT FECHA_OBLIGATORIA NOT NULL,
CONSTRAINT PK_TEMPORADA_ORDEN PRIMARY KEY (TEMPORADA, ORDEN)
);

COMMIT;

CREATE TABLE PELICULAS
(
    CODIGO      NUMBER(10),
    TITULO      VARCHAR2(50) CONSTRAINT TITULO_PELICULAS_OBLIGATORIO NOT NULL,
    DIRECTOR    VARCHAR2(30) CONSTRAINT DIRECTOR_PELICULAS_OBLIGATORIA NOT NULL,
    YEAR        DATE,
CONSTRAINT PK_CODIGO_PELICULAS PRIMARY KEY (CODIGO)
);

COMMIT;

CREATE TABLE PersonajesCapitulos
(
    CodigoPersonaje number(10),
    Temporada       number(10),
    Orden           number(10),
CONSTRAINT PK_CODIGOS_PERSONAJE PRIMARY KEY (CodigoPersonaje, Temporada, Orden),
CONSTRAINT FK_TEMPORADA FOREIGN KEY(Temporada, Orden) REFERENCES CAPITULOS (TEMPORADA, ORDEN),
CONSTRAINT FK_CODIGO_PERSONAJE FOREIGN KEY(CodigoPersonaje) REFERENCES PERSONAJES (CODIGO)
);

COMMIT;

CREATE TABLE PERSONAJESPELICULAS
(
CODIGOPERSONAJE number(10),
CODIGOPELICULAS number(10),
CONSTRAINT PK_CODIGOS_PERSONAJESPE PRIMARY KEY (CODIGOPERSONAJE, CODIGOPELICULAS),
CONSTRAINT FK_CODIGO_PERSONAJES FOREIGN KEY (CODIGOPERSONAJE) REFERENCES PERSONAJES (CODIGO),
CONSTRAINT FK_CODIGO_PELICU FOREIGN KEY (CODIGOPELICULAS) REFERENCES PELICULAS (CODIGO)
);
COMMIT;

CREATE TABLE NAVES
(
   CODIGO_NAVES      NUMBER(10),
   NTRIPULANTES      NUMBER(10) CONSTRAINT NTRIPULANTES_OBLIGATORIO NOT NULL,
   NOMBRE_NAVES      VARCHAR2(50) CONSTRAINT NOMBRE_NAVES_OBLIGATORIO NOT NULL,
CONSTRAINT PK_CODIGO_NAVES PRIMARY KEY (CODIGO_NAVES)
);
COMMIT;

CREATE TABLE VISITAS
(
    CODIGO_NAVE     NUMBER(10),
    CODIGO_PLANETAS  NUMBER(10),
    TEMPORADA_VISITAS NUMBER(10),
    ORDEN_VISITAS    NUMBER(10),
CONSTRAINT PK_VISITAS PRIMARY KEY (CODIGO_NAVE, CODIGO_PLANETAS, TEMPORADA_VISITAS, ORDEN_VISITAS),
CONSTRAINT FK_CODIGO_NAVE FOREIGN KEY (CODIGO_NAVE) REFERENCES NAVES (CODIGO_NAVES),
CONSTRAINT FK_CODIGO_PLANETA FOREIGN KEY (CODIGO_PLANETAS) REFERENCES PLANETAS(CODIGO),
CONSTRAINT FK_TEMPORADA_VISITAS FOREIGN KEY (TEMPORADA_VISITAS, ORDEN_VISITAS) REFERENCES CAPITULOS(TEMPORADA, ORDEN)
);
COMMIT;