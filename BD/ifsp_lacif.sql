create table consultas
(
    id            int auto_increment
        primary key,
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
    idNoticia   int auto_increment
        primary key,
    titulo      varchar(50)  not null,
    descricao   varchar(500) not null,
    dataNoticia date         not null,
    img_user    text         not null
);

create table pagamento
(
    idpagamento      int auto_increment
        primary key,
    status           int         not null,
    metodo_pagamento varchar(45) not null,
    valor            double      not null,
    valor_pago       double      not null,
    data_pagamento   date        not null
);

create table usuarios
(
    idusuario   int auto_increment
        primary key,
    nome        varchar(50)                    not null,
    cpf         varchar(40)                    not null,
    email       varchar(200)                   not null,
    senha       varchar(250)                   not null,
    celular     varchar(40)                    not null,
    endereco    varchar(200)                   not null,
    datanasc    date                           not null,
    tipo_acesso varchar(45) default 'Paciente' not null
);

# # # -------------------------------------------- POVOAMENTO DAS TABELAS -------------------------------------------- # # #
# Povoamento da Tabela de Consultas(Exames);
insert into ifsp_lacif.consultas(id, title, description, start, end, convenio, celular, cpf, tiposanguineo, tipo, sexo, status)
VALUES
    (57,'admin','Dores na Lombar',2022-10-08,2022-10-08,'IFSP','(00) 00000-0000','000.000.000-00','AB','Covid19','Masculino','Pendente'),
    (58,'admin','Falta de AR',2022-10-18,2022-10-19,'IFSP','(11) 11111-1111','111.111.111-11','AB','Covid19','Masculino','Pendente'),
    (59,'Laboratorista 01','Dor Estomago',2022-10-08,2022-10-08,'IFSP','(22) 22222-2222','222.222.222-22','AB','Covid19','Masculino','Pendente'),
    (60,'Alexandre Ferreira Pereira de Oliveira','Exame de Sangue',2022-10-12,2022-10-22,'IFSP','(33) 33333-0000','333.333.333-33','AB','Covid19','Masculino','Pendente'),
    (61,'Everton Thomaz de Lima Silva','Desejo Realizar um CheckUp',2022-10-26,2022-10-27,'IFSP','(44) 44444-0000','444.444.444-44','AB','Covid19','Masculino','Pendente'),
    (62,'Usuario 01','Não Consigo sentir cheiro das coisas',2022-10-27,2022-10-29,'IFSP','(55) 55555-0000','000.000.000-00','AB','Covid19','Masculino','Pendente'),
    (63,'Usuario 02','Gostaria de Realizar um Exame de Sangue',2022-10-08,2022-10-09,'IFSP','(66) 66666-0000','000.000.000-00','AB','Covid19','Masculino','Pendente'),
    (64,'Teste Calendario','Teste Calendario',2022-10-10,2022-11-11,'IFSP','(77) 77777-0000','000.000.000-00','AB','Covid19','Masculino','Pendente');



# Povoamento da Tabela de Noticias;
insert into ifsp_lacif.noticias(idNoticia, titulo, descricao, dataNoticia, img_user)
VALUES
(73, 'Noticia 01', 'Noticia 01',2022-10-10, 'bde4d35357139dae4f039ba0923bf530..jpg'),
(74, 'Noticia 02', 'Noticia 02',2022-10-12, '56e2b72f41b4406d7fa612a0562b648f..jpg'),
(75, 'Noticia 03', 'Noticia 03',2022-10-11, 'e5b8c8288256aa1a4886c1c1a2a43b9b..jpg'),
(78, 'Noticia 04', 'Noticia 04',2022-10-15, '4057d35f3040925c0dd358cdf8d2b803..jpg');



# Povoamento da Tabela de Usuarios;
insert into ifsp_lacif.usuarios(idusuario, nome, cpf, email, senha, celular, endereco, datanasc, tipo_acesso)
VALUES
(116, 'admin','000.000.000-00','admin','$2y$10$jHBvqSBhmEs4a8CtxzX24.noUzyjXMesHudzElRkDeDfR60zCSy/u','(00) 00000-0000','avenida',2022-05-12,'Administrador'),
(121,'Alexandre Ferreira Pereira de Oliveira','111.111.111-11','xandyofcff@gmail.com','$2y$10$5/8jVpWXSZfSGMtMZlDDGOB5UfNSgek/xnlK0hA7GLH37cLTBXPaK','(18) 98103-8758','AV PRESIDENTE EPITACIO,2005-04-15','Administrador'),
(122,'Everton Thomaz de Lima Silva','222.222.222-22','everton.t@aluno.ifsp.edu.br','$2y$10$gyI.EXj8WjSnXJ0zLxn0I.94t61aeiwEKg0wPv4g03E.3SdKP2o3S','(18) 98141-4149','presidente Epitácio',2006-10-05,'Administrador'),
(123,'Usuario 01','333.333.333-33','Usuario01@gmail.com','$2y$10$bcQwW/pB0KYTwcdSdZfz9enW.aNWs4Gqx.KvAmdHTnqZDODc4Wxdu','(33) 33333-3333','PRESIDENTE PRUDENTE',2005-04-15,'Paciente'),
(125,'Usuario 02','444.444.444-44','usuario02@gmail.com','$2y$10$knWLQn9GFjsLtiIQfYkLJ.jJ1ZNstiamvBgOj1baUTs2Wm1n3FtmG','(44) 44444-4444','AV PRESIDENTE EPITACIO',2005-02-05,'Paciente'),
(126,'Laboratorista 01','555.555.555-55','laboratorista01@gmail.com','$2y$10$hxYJLcd5RQ53/7zlVlYdxO9v0XpCKVd/5fdaL7qRuFXLuUzBy4uQK','(55) 55555-5555','AV PRESIDENTE EPITACIO',2010-06-12,'Laboratorista'),
(127,'Laboratorista 02','666.666.666-66','laboratorista02@gmail.com','$2y$10$tq6EmTj.wpRsP.1K48IIROKrOYHi.aIoyvU4zq5SbJD1YizEVALOC','(66) 66666-6666','AV PRESIDENTE EPITACIO',2009-03-12,'Laboratorista');


# Povoamento da Tabela de Pagamentos
#     Não fiz
