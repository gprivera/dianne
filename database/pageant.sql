DROP DATABASE IF EXISTS `pageant`;
CREATE DATABASE `pageant`;
USE `pageant`;

CREATE TABLE `members`(
	`id` int unsigned not null auto_increment primary key,
	`username` varchar(45),
	`password` varchar(45)
);

CREATE TABLE `contestants`(
	`id` int unsigned not null auto_increment primary key,
	`firstname` varchar(100),
	`middlename` varchar(100),
	`surname` varchar(100),
	`gender` varchar(11),
	`assigned_number` varchar(3)
);

CREATE TABLE `votes`(
	`id` int unsigned not null auto_increment primary key,
	`member_id` int unsigned not null,
	`contestant_id` int unsigned not null,
	`casual_score` double,
	`c_status` varchar(20),
	`theme_score` double,
	`t_status` varchar(20),
	`formal_score` double,
	`f_status` varchar(20),
	`qna` double,
	`f_qna` varchar(20)
);

CREATE TABLE `results`(
	`id` int unsigned not null auto_increment primary key,
	`contestant_id` int unsigned not null,
	`facebook_votes` double,
	`piso_votes` double,
	`people_choice` double,
	`casual_wear` double,
	`cw_res` double,
	`formal_wear` double,
	`fw_res` double,
	`theme_wear` double,
	`tw_res` double,
	`qanda` double,
	`qna_res` double
	);
CREATE TABLE `final_result`(
	`id` int unsigned not null auto_increment primary key,
	`contestant_id` int unsigned not null,
	`result` double
);

CREATE TABLE `finals`(
	`id` int unsigned not null auto_increment primary key,
	`member_id` int unsigned not null,
	`contestant_id` int unsigned not null,
	`score` double
);

CREATE TABLE `preliminary_results`(
	`id` int unsigned not null auto_increment primary key,
	`contestant_id` int unsigned,
	`score` double
);
