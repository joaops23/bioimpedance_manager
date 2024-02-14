use bioimpedance;

CREATE TABLE IF NOT EXISTS enterprises (
    id smallint(7) primary key auto_increment,
    name varchar(100) not null,
    cep varchar(13),
    address varchar(100),
    number int(4),
    complements varchar(30),
    uf varchar(2),
    created_at TIMESTAMP default CURRENT_TIMESTAMP,
    updated_at timestamp default CURRENT_TIMESTAMP
) ENGINE = innodb;

CREATE TABLE if not exists enterprise_units (
    id smallint(4) primary key auto_increment,
    enterprise_id smallint(7) not null,
    description_unit varchar(40) not null,
    observation text
);

CREATE TABLE if not exists unit_sectors(
    id smallint(4) primary key auto_increment,
    unit_id smallint(4) not null references enterprise_units(`id`),
    sector varchar(40) not null,
    observation text
);

CREATE TABLE if not exists sector_functions(
    id smallint(4) primary key auto_increment,
    sector_id smallint(4) not null references unit_sectors(`id`),
    description varchar(30) not null,
    observation text
);

CREATE TABLE if not exists users (
    id smallint(7) unsigned primary key auto_increment,
    email varchar(100) unique not null,
    password varchar(30) not null,
    name varchar(100) not null,
    type ENUM('collaborator', 'dependent', 'third') default 'collaborator',
    status enum('active', 'disabled') default "active",
    enterprise_id smallint(7) REFERENCES enterprises(id),
    enterprise_sector smallint(4) references enterprise_sectors(id),
    enterprise_function smallint(4) references enterprise_functions(id),
    enterprise_unit smallint(4) references enterprise_units(id),
    sap_protocol varchar(20),
    created_at timestamp default CURRENT_TIMESTAMP,
    updated_at timestamp default CURRENT_TIMESTAMP
) ENGINE = innodb;