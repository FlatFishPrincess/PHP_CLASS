-- drop the database CSIS3280WEEK8 if it exists
-- my mindless commnets here
drop database  if exists CSIS3280WEEK8;

-- create the database
create database CSIS3280WEEK8;

-- show databases; 
-- select the database for use
use CSIS3280WEEK8;

-- columnName datatype constraints

create table USER(
    UserID int AUTO_INCREMENT not null,
    fName varchar(50),
    lName varchar(50),
    email varchar(255),
    PRIMARY key (UserID)
);

desc USER;

create table ALBUM(
    AlbumID int AUTO_INCREMENT not null,
    name varchar(255),
    userID int not null,
    primary key (AlbumID),
    foreign key (UserID) references USER(UserID)
);

desc ALBUM;

create table PHOTO(
    PhotoID int AUTO_INCREMENT not null,
    AlbumID int not null,
    height int(4) not null,
    width int(4) not null,
    size int(7) not null,
    type varchar(4) not null,
    file varchar(255) not null,
    primary key (PhotoID),
    foreign key (AlbumID) references Album(AlbumID)
);

desc PHOTO;

-- insert data
INSERT INTO USER (fName, lName, email)
VALUES ("Builder", "Bob", "builder.bob@gmail.com"),
        ("Tom", "Hill", "tom.hill@gmail.com"),
        ("Samantha", "Student", "samantha.student@gmail.com");

-- update user        
update USER set fName = "Sam"
    where UserID = 2;

-- read 
select * from USER;

-- delete
DELETE FROM USER WHERE UserID=3;
select * from USER;

-- on commandline, type (sql file name) | mysql -u root -p
-- ex) CREATE_DATABASE.sql | mysql -u root -p
-- on mac, not  type, but cat
