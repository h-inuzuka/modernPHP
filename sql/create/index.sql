create index fk_reservation_user on reservation (user_id asc);
create index fk_reservation_type1 on reservation (car_class_id asc);
create index fk_reservation_location1 on reservation (departure_location_id asc);
create index fk_reservation_location2 on reservation (return_location_id asc);
