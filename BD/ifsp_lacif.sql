create table consultas
(
    id            int auto_increment             primary key,
    title         varchar(90)                    not null,
    description   text                           not null,
    start         date                           not null,
    end           date                           not null,
    convenio      varchar(50)                    not null,
    celular       varchar(40)                    not null,
    cpf           varchar(40)                    not null,
    tiposanguineo varchar(4)                     not null,
    tipo          varchar(50)                    not null,
    sexo          varchar(15)                    not null,
    status        varchar(50) default 'Pendente' not null
);

create table noticias
(
    idNoticia   int auto_increment      primary key,
    titulo      varchar(50)             not null,
    descricao   varchar(500)            not null,
    dataNoticia date                    not null,
    imagem      text                    not null
);

create table pagamento
(
    idpagamento      int auto_increment     primary key,
    status           int                    not null,
    metodo_pagamento varchar(45)            not null,
    valor            double                 not null,
    valor_pago       double                 not null,
    data_pagamento   date                   not null
);

create table usuarios
(
    idusuario   int auto_increment             primary key,
    nome        varchar(50)                    not null,
    cpf         varchar(40)                    not null,
    email       varchar(200)                   not null,
    senha       varchar(250)                   not null,
    celular     varchar(40)                    not null,
    endereco    varchar(200)                   not null,
    datanasc    date                           not null,
    tipo_acesso varchar(45) default 'Paciente' not null
);

