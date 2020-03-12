-- creamos la tabla de los feriados
CREATE TABLE `correlativas`.`feriadosa` ( `fecha` DATE NOT NULL , `motivo` VARCHAR(250) NOT NULL ) ENGINE = InnoDB;

-- insertamos los datos
INSERT INTO `feriados` (`fecha`, `motivo`) VALUES 
('2020-01-01', 'Año nuevo'),
('2020-02-24', 'Carnaval'),
('2020-02-25', 'Carnaval'),
('2020-03-23', 'Feriado Puente'),
('2020-03-24', 'Dia Nacional por la verdad y la justicia'),
('2020-04-02', 'Dia del veterano y de los caidos en la guerra de malvinas'),
('2020-')

[{"motivo":"Año Nuevo","tipo":"inamovible","dia":1,"mes":1,"id":"año-nuevo"},
{"motivo":"Carnaval","tipo":"inamovible","dia":24,"mes":2,"id":"carnaval"},
{"motivo":"Carnaval","tipo":"inamovible","dia":25,"mes":2,"id":"carnaval"},
{"motivo":"Feriado Puente Turístico","tipo":"puente","dia":23,"mes":3,"id":"puente-turistico"},
{"motivo":"Día Nacional de la Memoria por la Verdad y la Justicia","tipo":"inamovible","dia":24,"mes":3,"id":"memoria-verdad-justicia"},
{"motivo":"Día del Veterano y de los Caídos en la Guerra de Malvinas","tipo":"inamovible","dia":2,"mes":4,"id":"veteranos-malvinas"},
{"motivo":"Viernes Santo Festividad Cristiana","tipo":"inamovible","dia":10,"mes":4,"id":"viernes-santo"},
{"motivo":"Día del Trabajador","tipo":"inamovible","dia":1,"mes":5,"id":"trabajador"},
{"motivo":"Día de la Revolución de Mayo","tipo":"inamovible","dia":25,"mes":5,"id":"revolucion-mayo"},
{"motivo":"Paso a la Inmortalidad del Gral. Don Martín Güemes","tipo":"trasladable","original":"17-06","dia":15,"mes":6,"id":"martin-guemes"},
{"motivo":"Paso a la Inmortalidad del General Manuel Belgrano","tipo":"inamovible","dia":20,"mes":6,"id":"belgrano"},
{"motivo":"Día de la Independencia","tipo":"inamovible","dia":9,"mes":7,"id":"independencia"},
{"motivo":"Feriado Puente Turístico","tipo":"puente","dia":10,"mes":7,"id":"puente-turistico"},
{"motivo":"Paso a la Inmortalidad del General José de San Martín","tipo":"trasladable","original":"17-08","dia":17,"mes":8,"id":"san-martin"},
{"motivo":"Día del Respeto a la Diversidad Cultural","tipo":"trasladable","original":"12-10","dia":12,"mes":10,"id":"diversidad"},
{"motivo":"Día de la Soberanía Nacional","tipo":"trasladable","original":"20-11","dia":23,"mes":11,"id":"soberania-nacional"},
{"motivo":"Feriado Puente Turístico","tipo":"puente","dia":7,"mes":12,"id":"puente-turistico"},
{"motivo":"Inmaculada Concepción de María","tipo":"inamovible","dia":8,"mes":12,"id":"inmaculada-maria"},
{"motivo":"Navidad","tipo":"inamovible","dia":25,"mes":12,"id":"navidad"}]