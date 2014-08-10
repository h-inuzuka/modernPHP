CREATE TABLE user (
  id int not null auto_increment ,
  name varchar(100) not null ,
  email varchar(100) not null ,
  password varchar(100) not null ,
  tel varchar(20) null ,
  birthday date null,
  activation_key varchar(100) null ,
  created_at datetime not null ,
  updated_at datetime not null,
  primary key (id)
)
ENGINE InnoDB;
