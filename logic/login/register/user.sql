create table user (
	id int(8) not null auto_increment,
	name  varchar(8) not null,
	passwd varchar(16) not null,
	age int(3) default 0,
	primary key(id)
)engine=innodb  charset=utf8;
