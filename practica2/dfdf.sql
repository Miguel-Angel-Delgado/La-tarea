INSERT INTO alumno VALUES('11111','Enrique Tellez', '3AMPG');
INSERT INTO alumno VALUES('22222', 'Sandra Hernandez', '5AMPG');
INSERT INTO alumno VALUES('33333', 'Ricardo Gomez', '5AMPG');
INSERT INTO alumno VALUES('44444', 'Joseph Lira', '1BMPG');
INSERT INTO alumno VALUES('55555', 'Laura Perez', '3BMPG');
INSERT INTO alumno VALUES('66666', 'Cesar Sanchez', '1BVPG');
INSERT INTO alumno VALUES('77777', 'Naomi Saavedra', '5AMPG');
INSERT INTO alumno VALUES('88888', 'Ernesto Cruz', '3AMPG');
INSERT INTO alumno VALUES('99999', 'Diana Morales', '1BMPG');
INSERT INTO alumno VALUES('12121', 'Savador Sanchez', '5AMPG');

INSERT INTO practica VALUES('1', 'Practica 1', 'Media');
INSERT INTO practica VALUES('2', 'Practica 2', 'Facil');
INSERT INTO practica VALUES('3', 'Practica 3', 'Dificil');
INSERT INTO practica VALUES('4', 'Practica 4', 'Media');
INSERT INTO practica VALUES('5', 'Practica 5', 'Facil');
INSERT INTO practica VALUES('6', 'Practica 6', 'Dificil');
INSERT INTO practica VALUES('7', 'Practica 7', 'Facil');
INSERT INTO practica VALUES('8', 'Practica 8', 'Media');
INSERT INTO practica VALUES('9', 'Practica 9', 'Facil');
INSERT INTO practica VALUES('10', 'Practica 10', 'Dificil');



INSERT INTO profesor VALUES('12345', 'Ixchel García');
INSERT INTO profesor VALUES('23456', 'Rivelino');
INSERT INTO profesor VALUES('34567', 'Aydee');
INSERT INTO profesor VALUES('45678', 'Ponce');
INSERT INTO profesor VALUES('56789', 'Patricia');

INSERT INTO examen VALUES('6', '20', '2020-02-03');
INSERT INTO examen VALUES('7', '17', '2020-10-08');
INSERT INTO examen VALUES('8', '8', '2020-12-09');
INSERT INTO examen VALUES('9', '11', '2020-07-12');
INSERT INTO examen VALUES('10', '10', '2020-03-11');

INSERT INTO realiza VALUES ('11111', '1', '2020-02-08', '10');
INSERT INTO realiza VALUES ('22222', '2', '2020-02-09', '10');
INSERT INTO realiza VALUES ('33333', '3', '2020-05-03', '10');
INSERT INTO realiza VALUES ('44444', '4', '2020-04-02', '7');
INSERT INTO realiza VALUES ('55555', '5', '2020-05-03', '6');
INSERT INTO realiza VALUES ('66666', '6', '2020-02-12', '9');
INSERT INTO realiza VALUES ('77777', '7', '2020-02-04', '9');
INSERT INTO realiza VALUES ('88888', '8', '2020-02-03', '8');
INSERT INTO realiza VALUES ('99999', '9', '2020-07-14', '9');
INSERT INTO realiza VALUES ('12121', '10', '2020-01-25', '7');

INSERT INTO disena VALUES('1', '12345', '2020-03-11');
INSERT INTO disena VALUES('2', '12345', '2020-03-12');
INSERT INTO disena VALUES('3', '23456', '2020-05-16');
INSERT INTO disena VALUES('4', '23456', '2020-05-16');
INSERT INTO disena VALUES('5', '34567', '2020-08-21');
INSERT INTO disena VALUES('6', '34567', '2020-08-21');
INSERT INTO disena VALUES('7', '45678', '2020-09-19');
INSERT INTO disena VALUES('8', '45678', '2020-09-19');
INSERT INTO disena VALUES('9', '56789', '2020-04-10');
INSERT INTO disena VALUES('10', '56789', '2020-04-10');

delete from examen where numero > 0;