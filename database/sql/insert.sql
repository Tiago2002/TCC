/*INSERT - Tabela Clientes*/
INSERT INTO Clientes (nomeCliente, telCliente, cpfCliente, dtNascCliente, emailCliente, senhaCliente, dtCadastro) 
    values ('cliente', '95132945872', '11998761234', '1990-01-01','cliente@email.com', MD5('cliente1234'), NOW());

/*INSERT - Tabela TbStatus*/
INSERT INTO TbStatus (descricaoStatus) VALUE ('Pendente');
INSERT INTO TbStatus (descricaoStatus) VALUE ('Aprovado');
INSERT INTO TbStatus (descricaoStatus) VALUE ('Agendado');
INSERT INTO TbStatus (descricaoStatus) VALUE ('Realizado');
INSERT INTO TbStatus (descricaoStatus) VALUE ('Cancelado');

/*INSERT - Tabela Bancos*/
INSERT INTO Bancos (idbanco, banco) values (001,'001 - BANCO DO BRASIL');
INSERT INTO Bancos (idbanco, banco) values (104,'104 - CAIXA ECONOMICA FEDERAL');
INSERT INTO Bancos (idbanco, banco) values (237,'237 - BRADESCO');
INSERT INTO Bancos (idbanco, banco) values (318,'318 - B.M.G.');
INSERT INTO Bancos (idbanco, banco) values (341,'341 - ITAU');
INSERT INTO Bancos (idbanco, banco) values (748,'748 - SICREDI');
INSERT INTO Bancos (idbanco, banco) values (756,'756 - BANCOOB');
INSERT INTO Bancos (idbanco, banco) values (033,'033 - SANTANDER');
INSERT INTO Bancos (idbanco, banco) values (399,'399 - HSBC');
INSERT INTO Bancos (idbanco, banco) values (260,'260 - NUBANK');
INSERT INTO Bancos (idbanco, banco) values (212,'212 - ORIGINAL');
INSERT INTO Bancos (idbanco, banco) values (077,'077 - BANCO INTER');
INSERT INTO Bancos (idbanco, banco) values (218,'218 - BANCO BS2');
INSERT INTO Bancos (idbanco, banco) values (735,'735 - NEON');
INSERT INTO Bancos (idbanco, banco) values (323,'323 - MERCADO PAGO');
INSERT INTO Bancos (idbanco, banco) values (336,'336 - BANCO C6');

/*INSERT - Tabela Prestadoras*/
INSERT INTO Prestadoras (nomePrestadora, cpfPrestadora, dtNascPrestadora, telPrestadora, emailPrestadora, senhaPrestadora, idBanco, agenciaBanco, contaBanco, dtCadastro)
    values ('prestadora', '48281625856', '1998-12-31', '11987651234', 'prestadora@email.com', MD5('prestadora1234'), 
    001, 0123, '123456-7', NOW());

/*INSERT - Tabela Áreas*/
INSERT INTO Areas (nomeArea) value ('Manutenção Elétrica'); /* idArea = 1 */
INSERT INTO Areas (nomeArea) value ('Manutenção Hidráulica'); /* idArea = 2 */
INSERT INTO Areas (nomeArea) value ('Pintura'); /* idArea = 3 */
INSERT INTO Areas (nomeArea) value ('Instalações'); /* idArea = 4 */
INSERT INTO Areas (nomeArea) value ('Montagem de Móveis'); /* idArea = 5 */

/*INSERT - Tabela Especialidades*/
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Chuveiro Elétrico - instalação / troca',50,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Disjuntor - Troca',40,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Instalação de canaleta',35,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Interruptores embutidos - substituição / reparo',30,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Luminária plafon - instalação / troca',25,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Luminária pendente - instalação / troca',35,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Resistência de chuveiro elétrico - instalação / troca',20,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ventilador de teto - instalação / substituição',140,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomadas embutidas - substituição / reparo',35,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomada externa com calha - instalação / troca',35,1);

INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Chuveirinho higiênico - substituição / reparo',180,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Descarga acoplada - substituição / reparo',90,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Desentupimento de pia',150,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ralo / Box entupido ',160,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Fixação de cuba de pia ',180,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Registro de pia pingando',55,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Sifão - substituição / reparo',50,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Torneira - substituição / reparo',55,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Vaso Sanitário - substituição / reparo',190,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Vazamento de descarga embutida - substituição / reparo',90,2);

INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura epóxi - pintura de chão',29,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura Nova',25,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura de Fachadas',28,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura decorativa - revestimento / textura',35,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura com desenho',40,3);

INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Chuveiro',50,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomadas ',35,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Luminárias / lustres',35,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ventilador de teto',140,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Prateleiras',27,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Nichos',25,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Antenas de TV',50,4);

INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Armário - cozinha/banheiro',90,5); -- por módulo 
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Beliche',130,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cadeira',60,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cama de casal',100,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cama de solteiro',100,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cômoda',85,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Escrivaninha',120,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Guarda-roupa',85,5); -- por módulo 
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Guarda-roupa - portas de correr',80,5); -- por módulo 
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Mesa',100,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Prateleira',27,5);

/*INSERT - Tabela Endereços das Prestadoras*/
INSERT INTO End_Prestadoras (CEP, logradouro, complemento, numero, bairro, localidade, uf, idPrestadora) VALUES ('03254200', 'Rua Torre Azul', '', 72, 'Vila Industrial', 'São Paulo', 'SP', 1);
