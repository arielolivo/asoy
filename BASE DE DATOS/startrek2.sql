ALTER TABLE NAVES
    ADD CONSTRAINT CK_NAVES CHECK (NTRIPULANTES BETWEEN 1 AND 500);

COMMIT;

ALTER TABLE PLANETAS
 add CONSTRAINT GALAXIA_PLANETA
 CHECK (GALAXIA IN  ('VIA LACTEA','ANDROMEDA','SOMBRERO'));
 COMMIT;