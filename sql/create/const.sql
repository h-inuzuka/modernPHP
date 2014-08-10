constraint fk_reservation_user
    foreign key (user_id)
    references user (id)
    on delete no action 
    on update no action;
constraint fk_reservation_car_type1 
    forign key (car_class_id)
    references car_class (id)
    on delete no action
    on update no action;
constraint fk_reservation_location1
    foreign key (departure_location_id)
    references location (id)
    on delete no action
    on update no action;
constraint fk_reservation_location2
    foreign key (return_location_id)
    references location (id)
    on delete no action
    on update no action;
