CREATE VIEW movment AS 
SELECT * FROM `trip_info`,
`arrivals`.`wakeel_name` AS `arrival_wakeel`,
`arrivals`.`pilgram_count` AS `arrival_pilgram`,
`arrivals`.`hotel` AS `arrival_hotel`,
`arrivals`.`arrival_time` ,
`arrivals`.`arrival_date`,
`arrival_dirction`.`name`
`arrivals`.`advance_standby` AS `arrival_advanced_standby`,
`arrivals`.`day` AS `arrival_day`
INNER JOIN `arrivals` ON `trip_info`.id = `arrivals`.`trip_info_id`
INNER JOIN `directions` AS `arrival_dirction` ON `directions`.`id` = `arrivals`.`direction_id`
INNER JOIN `mazarat` ON `trip_info`.id = `mazarat`.`trip_info_id`
INNER JOIN `departures` ON `trip_info`.id = `departures`.`trip_info_id`
INNER JOIN `between_cities` ON `trip_info`.id = `between_cities`.`trip_info_id`
