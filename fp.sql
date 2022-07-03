create database dbFP;
use dbFP;
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
    descr VARCHAR(2000) NOT NULL,
    rate INT NOT NULL,
    watch int not null,
    path varchar(1000) not null,
    CoverLandscape varchar(1000),
    CoverPotrait varchar(1000),
    upload datetime default now(),
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

insert into video(name,descr,rate,path,coverlandscape,coverpotrait) VALUES
('Kimi No Nawa','Menceritakan kedua anak SMA bernama Mitsuha dan Taki yang tidak mengenal satu sama lainnya. Tapi suatu malam, mereka tiba-tiba bertukar tempat. Mitsuha terbangun di tubuh Taki, dan dia di dalam tubuhnya. Kejadian aneh ini terus terjadi secara acak, dan keduanya harus menyesuaikan hidup mereka di sekitar satu sama lain.',9.12,'assets/movie/kiminonawa.mkv','assets/img/kiminonawaland.jpg','assets/img/kiminonawapotr.jpg')
