drop database if exists gacha;
create database gacha default character set utf8 collate utf8_general_ci;
grant all on gacha.* to 'kuma'@'localhost' identified by 'asdf1234';
use gacha;

create table product (
	id int auto_increment primary key, 
	name varchar(100) not null
);

create table customer (
	id int auto_increment primary key, 
	name varchar(20) not null,  
	login varchar(20) not null unique, 
	password varchar(20) not null
);

insert into product values(null, 'nintendo switch');
insert into product values(null, 'play station5');
insert into product values(null, 'play station4');
insert into product values(null, 'ipad');
insert into product values(null, 'mac book');
insert into product values(null, 'スマブラ');
insert into product values(null, 'モンハン');
insert into product values(null, 'ポケカ');
insert into product values(null, '遊戯王カード');
insert into product values(null, 'ブラックロータス');

insert into customer values(null, '石津久宇真', 'kuma', 'ki0503');
insert into customer values(null, '大原太郎', 'ohara', 'ohara2022');