DROP DATABASE if exists ifsp_lacif;

CREATE DATABASE ifsp_lacif;

USE ifsp_lacif;


create table consultas
(
    id          int auto_increment             primary key,
    title       varchar(90)                    not null,
    description text                           not null,
    start       date                           not null,
    end         date                           not null,
    convenio    varchar(50)                    not null,
    celular     varchar(40)                    not null,
    cpf         varchar(40)                    not null,
    tipo        varchar(50)                    not null,
    resultado   text                           null,
    status      varchar(50) default 'Pendente' not null
);

create table convenios
(
    idConvenio   int auto_increment     primary key,
    nomeConvenio varchar(50)            not null
);

create table exames
(
    idTipoExame int auto_increment      primary key,
    nomeExame   varchar(50)             not null
);

create table noticias
(
    idNoticia   int auto_increment      primary key,
    titulo      varchar(50)             not null,
    descricao   varchar(500)            not null,
    dataNoticia date                    not null,
    img_user    text                    not null
);

create table pagamento
(
    idpagamento      int auto_increment primary key,
    status           int                not null,
    metodo_pagamento varchar(45)        not null,
    valor            double             not null,
    valor_pago       double             not null,
    data_pagamento   date               not null
);

create table patrocinadores
(
    idCarrossel int auto_increment      primary key,
    titulo      varchar(50)             not null,
    descricao   varchar(50)             not null,
    ativo       int default 0           not null,
    img_nome    text                    not null
);

create table usuarios
(
    idusuario     int auto_increment             primary key,
    nome          varchar(50)                    not null,
    cpf           varchar(40)                    not null,
    email         varchar(200)                   not null,
    senha         varchar(250)                   not null,
    celular       varchar(40)                    not null,
    endereco      varchar(200)                   not null,
    tiposanguineo varchar(4)                     not null,
    sexo          varchar(15)                    not null,
    datanasc      date                           not null,
    tipo_acesso   varchar(45) default 'Paciente' not null
);

#################################################################################################################################################################################################################################

# PRESET DE INSERTS USUARIO ✔

# # Nivel de Acesso: Administrador
# $senha = "123";
# $senhaCript = password_hash($senha, PASSWORD_DEFAULT);
INSERT INTO ifsp_lacif.usuarios (nome, cpf, email, senha, celular, endereco, tiposanguineo, sexo, datanasc, tipo_acesso)
VALUES ('admin', '123', 'admin', '$senhaCript', '123', 'avenida', 'AB', 'Masculino', '2022-05-12', 'Administrador');

# # Nivel de Acesso: Laboratorista
# $senha = "123";
# $senhaCript = password_hash($senha, PASSWORD_DEFAULT);
INSERT INTO ifsp_lacif.usuarios (nome, cpf, email, senha, celular, endereco, tiposanguineo, sexo, datanasc, tipo_acesso)
VALUES ('laboratorista', '123', 'laboratorista', '$senhaCript', '123', 'avenida', 'AB', 'Masculino', '2022-05-12', 'Laboratorista');

# # Nivel de Acesso: Laboratorista
# $senha = "123";
# $senhaCript = password_hash($senha, PASSWORD_DEFAULT);
INSERT INTO ifsp_lacif.usuarios (nome, cpf, email, senha, celular, endereco, tiposanguineo, sexo, datanasc, tipo_acesso)
VALUES ('paciente', '123', 'paciente', '$senhaCript', '123', 'avenida', 'AB', 'Masculino', '2022-05-12', 'Paciente');

#################################################################################################################################################################################################################################

# PRESET DE INSERTS PATROCINADORES ✔

INSERT INTO ifsp_lacif.patrocinadores(idCarrossel, titulo, descricao, ativo, img_nome)
VALUE (8, 'Teste 1', 'Teste 1',0, 'd7d19b204796676b3ab11dd13ff77c93..png');

INSERT INTO ifsp_lacif.patrocinadores(idCarrossel, titulo, descricao, ativo, img_nome)
VALUE (9, 'Teste 2', 'Teste 2',0, 'b5da7d090b19fec976a289e64d927d23..png');

INSERT INTO ifsp_lacif.patrocinadores(idCarrossel, titulo, descricao, ativo, img_nome)
VALUE (10, 'Teste 3', 'Teste 3',0, 'b8b4d892c50e71964e4a795c87587a97..png');

#################################################################################################################################################################################################################################

# PRESET DE INSERTS NOTICIAS ✔
INSERT INTO ifsp_lacif.noticias(idNoticia, titulo, descricao, dataNoticia, img_user)
VALUE (100, 'Teste 1', 'Teste 1', '2022-10-29','0ff0a5af0081b7f0f759c02c4be15205..png');

INSERT INTO ifsp_lacif.noticias(idNoticia, titulo, descricao, dataNoticia, img_user)
VALUE (101, 'Teste 2', 'Teste 2', '2022-10-29','d0a2ad089b74860f9b219504bc3652e1..png');

INSERT INTO ifsp_lacif.noticias(idNoticia, titulo, descricao, dataNoticia, img_user)
VALUE (102, 'Teste 3', 'Teste 3', '2022-10-29','bc7bfb78aa6d618b6a38319a96d5a04d..png');

#################################################################################################################################################################################################################################

# PRESET DE INSERTS EXAMES ✔
INSERT INTO ifsp_lacif.exames(idTipoExame, nomeExame)
VALUE (8, 'Covid 19');

INSERT INTO ifsp_lacif.exames(idTipoExame, nomeExame)
VALUE (9, 'Check-Up');

INSERT INTO ifsp_lacif.exames(idTipoExame, nomeExame)
VALUE (10, 'Sangue');

INSERT INTO ifsp_lacif.exames(idTipoExame, nomeExame)
VALUE (11, 'Fezes');


#################################################################################################################################################################################################################################

# PRESET DE INSERTS CONVENIO ✔

INSERT INTO ifsp_lacif.convenios(idConvenio, nomeConvenio)
VALUE (7, 'UNIMED');

INSERT INTO ifsp_lacif.convenios(idConvenio, nomeConvenio)
VALUE (8, 'Allianz Saúde');

INSERT INTO ifsp_lacif.convenios(idConvenio, nomeConvenio)
VALUE (9, 'Bradesco Saúde');

INSERT INTO ifsp_lacif.convenios(idConvenio, nomeConvenio)
VALUE (10, 'Prevent Senior');

INSERT INTO ifsp_lacif.convenios(idConvenio, nomeConvenio)
VALUE (11, 'Santa Helena Saúde');

#################################################################################################################################################################################################################################

# PRESET DE INSERTS CONSULTAS ✔

INSERT INTO ifsp_lacif.consultas(id, title, description, start, end, convenio, celular, cpf, tipo, resultado, status)
VALUE (57, 'Admin', 'Dores na Lombar', '2022-10-08','2022-10-08', 'IFSP', '(00) 00000-0000','000.000.000-00', 'Sangue', '4c7f0516b95f9bc7836b1ca6611c1dc3..pdf', 'Finalizado');

INSERT INTO ifsp_lacif.consultas(id, title, description, start, end, convenio, celular, cpf, tipo, resultado, status)
VALUE (60, 'Alexandre Ferreira Pereira de Oliveira1', 'Exame de Sangue','2022-10-12','2022-10-13', 'IFSP', '(18) 98103-8758','111.111.111-11', 'Sangue', '', 'Pendente');

INSERT INTO ifsp_lacif.consultas(id, title, description, start, end, convenio, celular, cpf, tipo, resultado, status)
VALUE (61,'Everton Thomaz de Lima Silva', 'Desejo Realizar um CheckUp','2022-10-20','2022-10-22','IFSP', '(18) 98141-4149', '222.222.222-22','CheckuP', '97e5ac8f62bd686e9c9a667aa27cd59f..pdf', 'Pendente');








