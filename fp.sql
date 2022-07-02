create database dbFP;
use dbFP
create table users(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pw varchar (200) NOT NULL,
    email varchar (200) NOT NULL,
    username varchar (200),
    CONSTRAINT UC_user UNIQUE (id,username,email),
    INDEX(pw,email)
);
create table video(
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(200) NOT NULL,
    descr VARCHAR(200) NOT NULL,
    rate INT NOT NULL,
    watch int not null,
    path varchar(1000) not null,
    CoverLandscape varchar(1000),
    CoverPotrait varchar(1000),
    INDEX(name,CoverLandscape,CoverPotrait)
);

create table genre(
    movieID int not null,
    genre varchar(1000) not null,
    FOREIGN KEY (movieID) REFERENCES video(id)
);
create table favorite(
    users int not null,
    movieID int NOT NULL,
    FOREIGN KEY (users) REFERENCES users(id),
    FOREIGN KEY (movieID) REFERENCES video(id)
);

create table watchlist(
    users int not null,
    movieID int NOT NULL,
    FOREIGN KEY (users) REFERENCES users(id),
    FOREIGN KEY (movieID) REFERENCES video(id)
);

create table recent(
    users int not null,
    movieID int NOT NULL,
    lastTime datetime default now(),
    FOREIGN KEY (users) REFERENCES users(id),
    FOREIGN KEY (movieID) REFERENCES video(id)
);

create table theAdmin(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    pw VARCHAR (10)
);