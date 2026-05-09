-- tabla usuarios
ALTER TABLE appsalon_mvc.usuarios ADD nombre varchar(60) NULL;
ALTER TABLE appsalon_mvc.usuarios ADD apellido varchar(60) NULL;
ALTER TABLE appsalon_mvc.usuarios ADD email varchar(40) NULL;
ALTER TABLE appsalon_mvc.usuarios ADD telefono varchar(10) NULL;
ALTER TABLE appsalon_mvc.usuarios ADD admin TINYINT(1) NULL;
ALTER TABLE appsalon_mvc.usuarios ADD confirmado TINYINT(1) NULL;
ALTER TABLE appsalon_mvc.usuarios ADD token varchar(15) NULL;

-- tabla servicios
