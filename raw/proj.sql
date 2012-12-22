create database project_db;
use project_db;
create table users (name varchar(20), password varchar(20));
load data local infile 'users.cvs' 
into table users 
fields terminated by ' ' 
lines terminated by '\n' 
(name,password); 
create table tags (tagname varchar(20), obj_id int);
load data local infile 'tags.cvs' 
into table tags 
fields terminated by ' ' 
lines terminated by '\n' 
(tagname,obj_id); 
