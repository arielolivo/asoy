CREATE TABLE LANZADERAS
(
    CODIGONAVE      NUMBER(10),
    NUMERO          NUMBER(10),
    PERSONAS        NUMBER(10),
CONSTRAINT PK_CODIGONAVE_NUMERO PRIMARY KEY (CODIGONAVE, NUMERO),
CONSTRAINT FK_CODIGONAVE FOREIGN KEY (CODIGONAVE) REFERENCES NAVES(CODIGO_NAVES)
);