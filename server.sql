

/************************************************************************
                            TABLES TO CREATE
 ************************************************************************/
USE nba_;

CREATE TABLE Equipo(
  id int AUTO_INCREMENT,
  full_name varchar(30) NOT NULL,
  city varchar(20) not null,
  abrebiacion varchar(10) not null,
  state varchar(15) null,
  division varchar(20) not null,
  CONSTRAINT id_Equipo PRIMARY KEY (id)
);

CREATE TABLE Jugador(
  id int AUTO_INCREMENT,
  full_name varchar(30) not null,
  city varchar(20) not null,
  equipo int NOT NULL,
  CONSTRAINT id_Jugador PRIMARY KEY (id),
  FOREIGN KEY (equipo) REFERENCES Equipo(id)
);

CREATE TABLE Stats(
  rank int AUTO_INCREMENT,
  id int NOT NULL,
  CONSTRAINT rank_Stats PRIMARY KEY (rank),
  CONSTRAINT id_Jugador FOREIGN KEY (id) REFERENCES Jugador(id)
);

CREATE TABLE Partido(
  id int AUTO_INCREMENT not null,
  id_Equipo1 int NOT NULL,
  id_Equipo2 int NOT NULL,
  fecha DATE not null,
  jugado BOOL not null,
  resultado varchar(6) null,
  CONSTRAINT id_Partido PRIMARY KEY (id),
  FOREIGN KEY (id_Equipo1) REFERENCES Equipo(id),
  FOREIGN KEY (id_Equipo2) REFERENCES Equipo(id)
);
