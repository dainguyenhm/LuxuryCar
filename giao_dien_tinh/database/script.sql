CREATE DATABASE LuxurycarDB;


CREATE TABLE Categorycars(
	categorycarid int(11) auto_increment PRIMARY KEY,
	name varchar(200)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Cars(
	carid int(11) NOT NULL  PRIMARY KEY auto_increment,
	name varchar(200),
	brandcar varchar(50),
	price int(13),
	yearcar int(4),
	statuscar text,
	fromcar varchar(50),
	model varchar(20),
	color varchar(20),
	transmission varchar(100),
	size varchar(50),
	baselength varchar(20),
	engine varchar(20),
	maxpower varchar(20),
	drive varchar(100),
	speedup varchar(50),
	maxspeed varchar(50),
	description text,
	image text,
	categorycarid int(11),
	FOREIGN KEY (categorycarid) REFERENCES Categorycars(categorycarid)	
) CHARACTER SET utf8 COLLATE utf8_general_ci; 

CREATE TABLE Customers(
	customersid int(11) NOT NULL  PRIMARY KEY auto_increment,
	contactname varchar(50),
	username varchar(50),
    password varchar(50),
	phone varchar(12),
	email varchar(50),
	address varchar(100),
	city varchar(20),
	country varchar(20),
	type int(1) -- 1: tự đăng ký, 2:facebook, 3:google
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Services(
	serviceid int(11) NOT NULL  PRIMARY KEY auto_increment,
	name varchar(200),
	title varchar(255),
	image text,
	content  text		
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Ordercars(
	ordercarid int(11) NOT NULL  PRIMARY KEY auto_increment,
	customersid int(11),
	carid int(11),
	note text,
	FOREIGN KEY (customersid) REFERENCES Customers(customersid),
	FOREIGN KEY (carid) REFERENCES Cars(carid)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Orderservices(
	orderserviceid int(11) NOT NULL  PRIMARY KEY auto_increment,
	customersid int(11),
	namecar varchar(200),
	yearcar int(4),
	brandcar varchar(50),
	statuscar text,
	booktime date,
	FOREIGN KEY (customersid) REFERENCES Customers(customersid)
) CHARACTER SET utf8 COLLATE utf8_general_ci;


CREATE TABLE Orderservicedetail(
	orderservicedetailid int(11) NOT NULL PRIMARY KEY auto_increment,
	orderserviceid int(11),
	serviceid int(11),
	discount int(2),
	FOREIGN KEY (orderserviceid) REFERENCES Orderservices(orderserviceid),
	FOREIGN KEY (serviceid) REFERENCES Services(serviceid)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Comments(
	commentid int(11) NOT NULL  PRIMARY KEY auto_increment,
	customersid int(11),
	serviceid int(11),
	content text,
	FOREIGN KEY (customersid) REFERENCES Customers(customersid),
	FOREIGN KEY (serviceid) REFERENCES Services(serviceid)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE News(
	newsid int(11) NOT NULL  PRIMARY KEY auto_increment,
	title text,
	content text,
	newsdate date,
	image text
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Contact(
	contactid int(11) NOT NULL  PRIMARY KEY auto_increment,
	fullname varchar(100),
	phone varchar(12) ,
	email varchar(50) ,
	address varchar(100),
	content text
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Users(
	username varchar(50) NOT NULL  PRIMARY KEY ,
	password varchar(50),
	displayname varchar(100)
) CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE Introduces(
	introduceid int(11) NOT NULL  PRIMARY KEY auto_increment,
	content text,
	image text
)CHARACTER SET utf8 COLLATE utf8_general_ci;