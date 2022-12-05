
# ----------- SELECT'S COM JUNÇÕES NO BANCO DE DADOS -----------

-- EXERCICIO 1) Listar ID, start, horario e status da consulta.
-- Com seus respectivos Pacientes
SELECT id, usuarios.cpf, consultas.cpf, start, horario, status
FROM ifsp_lacif.consultas, ifsp_lacif.usuarios
WHERE ifsp_lacif.usuarios.cpf = ifsp_lacif.consultas.cpf;

-- EXERCICIO 2) Listar ID, start, horario, status
-- Com seus respectivos Pacientes e convênio
SELECT id, usuarios.cpf, consultas.cpf, start, horario, consultas.idConvenio, convenios.idConvenio, status
FROM ifsp_lacif.consultas, ifsp_lacif.usuarios, ifsp_lacif.convenios
WHERE ifsp_lacif.usuarios.cpf = ifsp_lacif.consultas.cpf
  AND ifsp_lacif.convenios.idConvenio = ifsp_lacif.consultas.idConvenio;

-- EXERCICIO 3) Listar ID, start, horario, status
-- Com seus respectivos Pacientes, convênios e que o status da consulta esteja "Finalizado"
SELECT id, usuarios.cpf, consultas.cpf, start, horario, consultas.idConvenio, convenios.idConvenio, status
FROM ifsp_lacif.consultas, ifsp_lacif.usuarios, ifsp_lacif.convenios
WHERE ifsp_lacif.usuarios.cpf = ifsp_lacif.consultas.cpf
  AND ifsp_lacif.convenios.idConvenio = ifsp_lacif.consultas.idConvenio
  AND ifsp_lacif.consultas.status like 'Finalizado';