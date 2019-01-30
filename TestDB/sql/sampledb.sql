drop database if exists sampledb_kobayashi;
create database sampledb_kobayashi;
use sampledb_kobayashi;

create table sample_table(
	No int,
	name varchar(50),
	age int,
	mail varchar(50)
);

insert into sample_table values(1, "Yamada", 21, "xxx@yahoo.co.jp");
insert into sample_table values(2, "Sato", 39, "yyy@google.com");
insert into sample_table values(3, "Harada", 44, "zzz@yahoo.co.jp");
