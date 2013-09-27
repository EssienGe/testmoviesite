drop DATABASE  if exists moviesite;
create DATABASE moviesite;
use moviesite;

create Table movies(
movieid int primary key auto_increment not null,
moviename varchar(255) not null,
movieloc varchar(255) not null,
moviepic varchar(255) not null,
moviedescription varchar(255) not null,
movierate int not null,
moviecomments int not null,
movietype int not null
);

create Table user(
userid int primary key auto_increment not null,
username varchar(20) not null ,
password varchar(16) not null
);

insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('X-MAN','movies/movie1.jpg','images/movie1.jpg','deadbeef',4,111,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('SPIDER MAN 2','movies/movie2.jpg','images/movie2.jpg','deadbeef',5,29,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('SPIDER MAN 3','movies/movie3.jpg','images/movie3.jpg','deadbeef',3,0,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('VALKYRIE','movies/movie4.jpg','images/movie4.jpg','deadbeef',1,1,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('GLADIATOR','movies/movie5.jpg','images/movie5.jpg','deadbeef',2,12,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('ICE AGE','movies/movie6.jpg','images/movie6.jpg','deadbeef',3,78,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('TRANSFORMERS','movies/movie7.jpg','images/movie7.jpg','deadbeef',4,12,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('MAGNETO','movies/movie8.jpg','images/movie8.jpg','deadbeef',5,34,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('KUNG FU PANDA','movies/movie9.jpg','images/movie9.jpg','deadbeef',2,65,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('EAGLE EYE','movies/movie10.jpg','images/movie10.jpg','deadbeef',3,27,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('NARNIA','movies/movie11.jpg','images/movie11.jpg','deadbeef',5,34,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('ANGELS &amp; DEMONS','movies/movie12.jpg','images/movie12.jpg','deadbeef',4,90,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('HOUSE','movies/movie13.jpg','images/movie13.jpg','deadbeef',4,100,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('VACANCY','movies/movie14.jpg','images/movie14.jpg','deadbeef',3,1,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('MIRRORS','movies/movie15.jpg','images/movie15.jpg','deadbeef',5,13,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('THE KINGDOM','movies/movie16.jpg','images/movie16.jpg','deadbeef',5,15,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('MOTIVES','movies/movie17.jpg','images/movie17.jpg','deadbeef',1,17,0);
insert into movies (moviename,movieloc,moviepic,moviedescription,movierate,moviecomments,movietype)
VALUES('THE PRESTIGE','movies/movie18.jpg','images/movie18.jpg','deadbeef',4,8,0);
