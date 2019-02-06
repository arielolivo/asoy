ALTER TABLE PERSONAJES
ADD
(
    CIUDAD    VARCHAR2(50),
    FNACIM    DATE,
    PLANETA   NUMBER(20),
    FULTCOMBATE  DATE,
    MENTOR    VARCHAR2(50),
    FECHAGRADO DATE,
CONSTRAINT FK_PLANETA_PERSONAJES FOREIGN KEY PLANETA REFERENCES PLANETAS (CODIGO)
);
COMMIT;
