create table episode(
    movieID int NOT NULL PRIMARY KEY,
    movieName VARCHAR (200) NOT NULL,
    movieDesc VARCHAR (200) NOT NULL,
    movieRate INT NOT NULL,
    movieWatch int not null,
    movieGenre varchar (200),
    movieCoverLandscape varchar(MAX),
    movieCoverPotrait varchar(MAX),
    thumbnail varchar(MAX)
);