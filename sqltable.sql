Creando la Base de datos:

CREATE DATABASE loginphp;

Creando la tabla usuarios para el login:
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

Insertando usuarios:
INSERT INTO `loginphp`.`users`
(`id`,
`username`,
`password`,
`created_at`)
VALUES
(<{id: }>,
<{username: }>,
<{password: }>,
<{created_at: current_timestamp()}>);


id	username	password	created_at
1	hpatel	$2y$10$nU9YLRvj93EpMqVt.HH.I.3y3CB98Zqv7ol5IeJ3Zx1yEuqzybzwm	12/19/2019 13:01
2	racheligc	$2y$10$BCw5VBq40u5iy.zPIbx9uussMfYtjQ2yXQMwf6l3chrCZObBr80Aa	12/19/2019 13:10
3	Idzumi	$2y$10$xKvlTOZ8/5LPrh8PcSDw7.EL0tL9krSab6WhG01QtbAzgtp9ukUyK	2/17/2020 20:17
4	DanielCruz	$2y$10$eUQ6rilay2IwCXMqSc6NKO.ptZmNDrk4Hgm.0Sjfpac0JREqoFIuO	4/19/2020 8:55
