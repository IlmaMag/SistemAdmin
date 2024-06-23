CREATE TABLE Atizapani.TipoUser(Id_Tuser INT AUTO_INCREMENT NOT NULL, NomTUser VARCHAR(55) NOT NULL,
PRIMARY KEY(Id_Tuser)) ENGINE = INNODB;


INSERT INTO Atizapani.TipoUser(Id_Tuser, NomTuser) VALUES (NULL, 'Sistemas') , (NULL, 'Adminidtrativos'),(NULL, 'Finales'); 



SELECT * FROM Atizapani.TipoUser;



INSERT INTO Atizapani.Usuarios(Id_Usuario, NomUser, ApUser, AmUser, TelefonoUser, EmailUser,Password, Id_Tuser)VALUES
(NULL, 'Jose','Luis','Chavez','951962458456','contacto@iscjoseluischavezg.mx','827ccb0eea8a706c4c34a16891f84e7b', '1');



ALTER TABLE Atizapani.Usuarios ADD FOREIGN KEY(Id_Tuser) REFERENCES TipoUser(Id_Tuser); 