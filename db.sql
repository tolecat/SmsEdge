create table users
(
  usr_id      int primary key auto_increment,
  usr_name    varchar(100),
  usr_active  tinyint(1) not null default 0,
  usr_created datetime            default current_timestamp
);

create table countries
(
  cnt_id      int primary key auto_increment,
  cnt_code    varchar(2)   not null,
  cnt_title   varchar(100) not null,
  cnt_created datetime default current_timestamp
);

create table numbers
(
  num_id int primary key auto_increment,
  cnt_id int not null,
  num_number varchar(9) not null,
  num_created datetime default current_timestamp
);

create table send_log
  (
    log_id int primary key auto_increment,
    usr_id int not null,
    num_id int not null,
    log_message varchar(255),
    log_success tinyint(1) default 0,
    log_created datetime default current_timestamp
  );