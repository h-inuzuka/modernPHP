reservation | CREATE TABLE `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `car_class_id` int(11) NOT NULL,
  `departure_location_id` int(11) NOT NULL,
  `return_location_id` int(11) NOT NULL,
  `return_at` datetime NOT NULL,
  `user_insurance` tinyint(4) NOT NULL,
  `car_subtotal` decimal(9,3) DEFAULT NULL,
  `option_subtotal` decimal(9,3) DEFAULT NULL,
  `total_amount` decimal(9,3) DEFAULT NULL,
  `note` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reservation_user` (`user_id`),
  KEY `fk_reservation_type1` (`car_class_id`),
  KEY `fk_reservation_location1` (`departure_location_id`),
  KEY `fk_reservation_location2` (`return_location_id`),
  CONSTRAINT `fk_reservation_car_type1` FOREIGN KEY (`car_class_id`) REFERENCES `car_class` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reservation_location1` FOREIGN KEY (`departure_location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reservation_location2` FOREIGN KEY (`return_location_id`) REFERENCES `location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reservation_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 |