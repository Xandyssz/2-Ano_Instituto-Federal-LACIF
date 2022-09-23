create table consultas
(
    idconsulta    int auto_increment
        primary key,
    nome          varchar(50)                    not null,
    cpf           char(11)                       not null,
    celular       char(11)                       not null,
    convenio      varchar(50)                    not null,
    data_cons     date                           not null,
    horario_cons  time                           not null,
    tiposanguineo varchar(4)                     not null,
    sexo          varchar(15)                    not null,
    tipo          varchar(50)                    not null,
    status        varchar(50) default 'Pendente' not null
);

create table usuarios
(
    idusuario   int auto_increment
        primary key,
    nome        varchar(50)                    not null,
    cpf         char(11)                       not null,
    email       varchar(200)                   not null,
    senha       varchar(35)                    not null,
    celular     char(11)                       not null,
    endereco    varchar(200)                   not null,
    datanasc    date                           not null,
    nivelAcesso varchar(35) default 'Paciente' not null
);

a