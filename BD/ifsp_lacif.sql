DROP DATABASE if exists ifsp_lacif;

CREATE DATABASE ifsp_lacif;

USE ifsp_lacif;

# ----------- ESTRUTURAS DO BANCO DE DADOS -----------

--
-- Estrutura da tabela `CONSULTAS`
--

CREATE TABLE `consultas` (
                             `id` int(11) NOT NULL,
                             `title` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
                             `description` text COLLATE utf8_unicode_ci NOT NULL,
                             `start` date NOT NULL,
                             `horario` time NOT NULL,
                             `idConvenio` int(11) NOT NULL,
                             `celular` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
                             `cpf` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
                             `idTipoExame` int(11) NOT NULL,
                             `resultado` text COLLATE utf8_unicode_ci,
                             `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Estrutura da tabela `USUARIOS`
--

CREATE TABLE `usuarios` (
                            `idusuario` int(11) NOT NULL,
                            `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                            `cpf` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
                            `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
                            `senha` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
                            `celular` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
                            `endereco` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
                            `tiposanguineo` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
                            `sexo` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
                            `datanasc` date NOT NULL,
                            `tipo_acesso` varchar(45) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Paciente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Estrutura da tabela `PATROCINADORES`
--

CREATE TABLE `patrocinadores` (
                                  `idPatrocinador` int(11) NOT NULL,
                                  `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                                  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                                  `ativo` int(11) NOT NULL DEFAULT '0',
                                  `img_nome` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Estrutura da tabela `NOTICIAS`
--

CREATE TABLE `noticias` (
                            `idNoticia` int(11) NOT NULL,
                            `titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                            `descricao` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
                            `dataNoticia` date NOT NULL,
                            `img_user` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Estrutura da tabela `EXAMES`
--

CREATE TABLE `exames` (
                          `idTipoExame` int(11) NOT NULL,
                          `nomeExame` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                          `valor` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


--
-- Estrutura da tabela `CONVENIOS`
--

CREATE TABLE `convenios` (
                             `idConvenio` int(11) NOT NULL,
                             `nomeConvenio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
                             `porcentagem` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


# ----------- INSERTS BANCO DE DADOS -----------

--
-- Inserts da tabela `CONSULTAS`
--

INSERT INTO `consultas` (`id`, `title`, `description`, `start`, `horario`, `idConvenio`, `celular`, `cpf`, `idTipoExame`, `resultado`, `status`) VALUES
                                                                                                                                                     (1, 'Isabella Isis', 'Gerando Descrição...', '2022-12-04', '07:00:00', 1, '(81) 98702-7112', '605.056.884-76', 1, NULL, 'Finalizado'),
                                                                                                                                                     (2, 'Mariana Sônia Nunes', 'Gerando Descrição...', '2022-12-06', '07:15:00', 2, '(95) 98883-9968', '186.620.024-04', 1, NULL, 'Pendente'),
                                                                                                                                                     (3, 'José Arthur Novaes', 'Gerando Descrição...', '2022-12-08', '07:45:00', 3, '(62) 98967-2365', '258.360.196-22', 1, NULL, 'Pendente'),
                                                                                                                                                     (4, 'Manoel Bento Martins', 'Gerando Descrição...', '2022-12-09', '08:00:00', 4, '(81) 99755-1414', '473.471.552-15', 2, NULL, 'Pendente'),
                                                                                                                                                     (5, 'Débora Lavínia Aparício', 'Gerando Descrição...', '2022-12-09', '08:00:00', 5, '(11) 98127-1046', '305.309.798-29', 3, NULL, 'Pendente'),
                                                                                                                                                     (6, 'Laís Sandra Aparício', 'Gerando Descrição...', '2022-12-10', '08:15:00', 5, '(11) 99578-5536', '384.361.278-11', 3, NULL, 'Pendente'),
                                                                                                                                                     (7, 'Leandro Gomes', 'Gerando Descrição...', '2022-12-11', '08:30:00', 4, '(11) 99298-3322', '864.802.478-17', 3, NULL, 'Pendente'),
                                                                                                                                                     (8, 'Henrique Levi Martins', 'Gerando Descrição...', '2022-12-12', '08:45:00', 3, '(14) 99279-5937', '643.347.458-65', 3, NULL, 'Pendente'),
                                                                                                                                                     (9, 'Milena Daniela da Costa', 'Gerando Descrição...', '2022-12-13', '09:00:00', 2, '(12) 98405-0998', '037.403.448-65', 4, NULL, 'Pendente'),
                                                                                                                                                     (10, 'Letícia Laura Almada', 'Gerando Descrição...', '2022-12-14', '09:15:00', 2, '(14) 99790-2685', '127.613.028-77', 2, NULL, 'Finalizado'),
                                                                                                                                                     (11, 'Admin', 'Gerando Descrição...', '2022-12-14', '09:30:00', 3, '(11) 11111-1111', '111.111.111-11', 3, NULL, 'Finalizado');

# -------

--
-- Inserts da tabela `USUARIOS`
--

INSERT INTO `usuarios` (`idusuario`, `nome`, `cpf`, `email`, `senha`, `celular`, `endereco`, `tiposanguineo`, `sexo`, `datanasc`, `tipo_acesso`) VALUES
                                                                                                                                                     (1, 'admin', '111.111.111-11', 'admin', '$2y$10$wcWwsuWfM4yIjb7NsWS/juyT4mZi74HFG2P3vDE9WR1r8amrFbfUi', '123', 'avenida', 'AB-', 'Masculino', '2022-05-12', 'Administrador'),
                                                                                                                                                     (2, 'laboratorista', '222.222.222-22', 'laboratorista', '$2y$10$wcWwsuWfM4yIjb7NsWS/juyT4mZi74HFG2P3vDE9WR1r8amrFbfUi', '123', 'avenida', 'AB+', 'Masculino', '2022-05-12', 'Laboratorista'),
                                                                                                                                                     (3, 'recepcionista', '333.333.333-33', 'recepcionista', '$2y$10$wcWwsuWfM4yIjb7NsWS/juyT4mZi74HFG2P3vDE9WR1r8amrFbfUi', '123', 'avenida', 'AB-', 'Masculino', '2022-05-12', 'Recepcionista'),
                                                                                                                                                     (4, 'paciente', '444.444.444-44', 'paciente', '$2y$10$wcWwsuWfM4yIjb7NsWS/juyT4mZi74HFG2P3vDE9WR1r8amrFbfUi', '123', 'avenida', 'AB+', 'Masculino', '2022-05-12', 'Paciente'),
                                                                                                                                                     (5, 'Isabella Isis', '605.056.884-76', 'IsabellaIsis@gmail.com', '$2y$10$UY8dglNfRRECp3ToVinSJOAw7WaoL9agZ2INQTqS.6MUowt0Fitme', '(21) 2501-4465', 'Rua do Meio 550 - Ramos - Rio de Janeiro', 'AB+', 'Feminino', '1980-02-22', 'Paciente'),
                                                                                                                                                     (6, 'Allana Carla Beatriz da Rosa', '213.540.184-60', 'allana.carla.darosa@gmail.com.br', '$2y$10$UTFAbWG6S0lmhXj2bcfh9Ok4apX.so8cG3XwxFm4ngxQ1vk3hWXk2', '(21) 3749-0144', 'Rua Francisca D. de Souza', 'A+', 'Feminino', '2022-11-18', 'Paciente'),
                                                                                                                                                     (7, 'Kawanygiovanna69@gmail.com ', '495.495.738-93', 'kawanygiovanna69@gmail.com', '$2y$10$rn0YKQaeK32n/JH0CDHWOuHFN5BjB2uriP9U4Ka7Zy.JL0Tri3.za', '(18) 98117-4052', 'Rua Paraná 18-64 ', 'A-', 'Feminino', '2022-11-10', 'Paciente'),
                                                                                                                                                     (8, 'Maria Eduarda Franco candia ', '432.619.748-00', 'Mariaeduardafrencocandia@gmail.com', '$2y$10$oa.gtB1nh9h3ncBfy1xyh.Y.WQ8XO4FMYc2C/Sbd8rQNvHLJjBww.', '(18) 98120-7201', '899888', 'O-', 'Feminino', '2022-11-11', 'Paciente'),
                                                                                                                                                     (9, 'Giovanna Maria', '111.111.111-12', 'paradparadscha@gmail.com', '$2y$10$SL5MHlDgHRcn02FdcPEOZe2RUhJPuhJgb0Di2z0Esq/xYcRMehIMy', '(11) 11111-1111', 'Aaaaaa', 'B-', 'Feminino', '2022-02-04', 'Paciente'),
                                                                                                                                                     (10, 'Ryan Costa de Brito ', '410.949.978-03', 'ryan@gmail.com', '$2y$10$azF9pzgO/Uzy.vzmTblG8e1iIfFCeZMxyml0nRywXTlReiAmNqvbu', '(18) 99698-0680', 'Rua vai Corinthians ', 'AB+', 'Feminino', '2022-11-09', 'Paciente'),
                                                                                                                                                     (11, 'Kevin Yuri Macera ', '123.456.789-13', 'kevinmacera12@gmail.com', '$2y$10$ivvO/gyebLkDv..jNMlp7.HP9zuYO8n6sHmPEGdKRfCJWjkYtAFRm', '(18) 99749-0996', 'Aaa', 'A-', 'Masculino', '2022-11-11', 'Paciente'),
                                                                                                                                                     (12, 'Victor Lucas Alves de Ataide', '666.666.666-66', 'victorlucas0602@gmail.com', '$2y$10$hYnhPLYBy.eThVBJPPjRk.lGtk/VqeDItXWPPito.c0qTn3UVNaZq', '(18) 99807-1940', 'Quebrada Bordon', 'O+', 'Feminino', '2022-11-11', 'Paciente'),
                                                                                                                                                     (13, 'jorg', '333.333.333-39', 'jorgg@gmail.com', '$2y$10$voeINO0I6lgqROVdHdpJOeCA3eJqBiyrYzXkrkog6zBxhNvwLgl7O', '(18', 'rua 11', 'A-', 'Masculino', '2005-01-18', 'Paciente'),
                                                                                                                                                     (14, 'Paolla Alexandre Costa da Silva ', '709.709.194-09', 'polappaola@gmail.com', '$2y$10$NfAKnzQcgOHpYiJ0YwBikuDbbl1m.0s6fojHUXn39SA1qwilFgZk.', '(18) 98112-0559', 'Rua Florianópolis 840', 'A+', 'Feminino', '2005-10-06', 'Paciente'),
                                                                                                                                                     (15, 'Mariana Sônia Nunes', '186.620.024-04', 'mariasonianunes@gmail.com', '$2y$10$A17Ff2mb/jWbGK4pLncn9e1zg6O1xmSWFaQriC6HwRNnG2Fuhb.xy', '(99) 99999-9999', 'Caminho 03-Quadra E', 'AB-', 'Feminino', '2022-11-27', 'Paciente'),
                                                                                                                                                     (16, 'Letícia Laura Almada', '127.613.028-77', 'leticialauraalmada@gmail.com', '$2y$10$ovyYdjkr7X58HQeq2qs/vejOofv1UqJsSodC.Mx1whieltPFERTIG', '(95) 98232-2204', 'Rua Telma Cavalcante', 'A+', 'Feminino', '2022-11-13', 'Paciente');
# -------

--
-- Inserts da tabela `PATROCINADORES`
--

INSERT INTO `patrocinadores` (`idPatrocinador`, `titulo`, `descricao`, `ativo`, `img_nome`) VALUES
                                                                                                (1, 'AstraZeneca', 'AstraZeneca PLC é um conglomerado farmacêutico', 0, '1ad090d944453f5095fbe85385c48edd..png'),
                                                                                                (2, 'Pfizer', 'Pfizer, Inc. é uma empresa farmacêutica multinacio', 0, '9b3f17a9f4bdea54c2520074cc9df91f..png'),
                                                                                                (3, 'unimed', 'unimed', 0, '5a3c93cd27820f25e02a88ea94b501db..png'),
                                                                                                (4, 'Allianz Saúde', 'Allianz Saúde', 0, '99560740ce020c0f3d104fb6b2a71ab3..png'),
                                                                                                (5, 'Bradesco Saúde', 'Bradesco Saúde', 0, '644048d5f6f761dacefaffe1a037af2e..png');
# -------

--
-- Inserts da tabela `NOTICIAS`
--

INSERT INTO `noticias` (`idNoticia`, `titulo`, `descricao`, `dataNoticia`, `img_user`) VALUES
                                                                                           (1, 'COVID 19', 'Butantan entrega 1 milhão de doses da CoronaVac ao Ministério da Saúde nesta quinta para vacinação de crianças de 3 e 4 anos', '2022-11-10', '03c23df12c63efa67a210b37571cfa88..jpg'),
                                                                                           (2, 'COVID 19', 'Brasil registra 45 mortes por Covid na média móvel. São 34.954.680 casos conhecidos de Covid-19 registrados desde o início da pandemia e 688.735 mortes pela doença.', '2022-11-12', '678aff14130cf48222bf2ad59e2b0533..jpg'),
                                                                                           (3, 'SAÚDE', 'Dia Mundial do Diabetes: Estima-se que quase 17 milhões de pessoas vivam com diabetes no Brasil, quinto país no ranking mundial da doença.', '2022-11-14', '1c06d1600b4133581f68dc30aeece352..jpg');
# -------

--
-- Inserts da tabela `EXAMES`
--


INSERT INTO `exames` (`idTipoExame`, `nomeExame`, `valor`) VALUES
                                                               (1, 'Covid 19', 'R$85,00'),
                                                               (2, 'Check-Up', 'R$350,00'),
                                                               (3, 'Sangue', 'R$15,00'),
                                                               (4, 'Fezes', 'R$45,00');

# -------

--
-- Inserts da tabela `CONVÊNIOS`
--
INSERT INTO `convenios` (`idConvenio`, `nomeConvenio`, `porcentagem`) VALUES
                                                                          (1, 'UNIMED', '12,00%'),
                                                                          (2, 'Allianz Saúde', '04,00%'),
                                                                          (3, 'Bradesco Saúde', '06,00%'),
                                                                          (4, 'Prevent Senior', '08,00%'),
                                                                          (5, 'Santa Helena Saúde', '05,00%');
