create table if not exists rentacar.car_class (
  id int not null ,
  name varchar(20) not null ,
  car_types varchar(100) not null ,
  seats varchar(20) not null ,
  image varchar(255) null ,
  price3 decimal(9,3) not null ,
  price6 decimal(9,3) not null ,
  price12 decimal(9,3) not null ,
  price24 decimal(9,3) not null ,
  insurance_price decimal(9,3) not null ,
  created_at datetime not null ,
  updated_at datetime not null ,
  primary key (id)
)
ENGINE = InnoDB;
