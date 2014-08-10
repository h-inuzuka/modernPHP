create table if not exists rentacar.reservation (
  id int not null auto_increment ,
  user_id int not null ,
  car_class_id int not null ,
  departure_location_id int not null ,
  return_location_id int not null ,
  return_at datetime not null ,
  user_insurance tinyint not null ,
  car_subtotal decimal(9,3) null ,
  option_subtotal decimal(9,3) null ,
  total_amount decimal(9,3) null ,
  note text null ,
  created_at datetime not null ,
  updated_at datetime not null ,
  primary key (id)
)
ENGINE = InnoDB;
