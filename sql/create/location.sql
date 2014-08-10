create table if not exists rentacar.location (
  id int not null ,
  name varchar(255) not null ,
  created_at datetime not null ,
  updated_at datetime not null ,
  primary key (id)
)
ENGINE = InnoDB;
