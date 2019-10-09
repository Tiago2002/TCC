/*INSERT - Tabela ESTADOS*/
INSERT INTO Estados (nomeEstado, siglaEstado) values ('São Paulo', 'SP');

/*INSERT - Tabela MUNICIPIOS*/
INSERT INTO Municipios (nomeMunicipio, idEstado) values ('São Paulo', 1);

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

/*INSERT - Tabela Áreas*/
INSERT INTO Areas (nomeArea) value ('Manutenção Elétrica');
INSERT INTO Areas (nomeArea) value ('Manutenção Hidráulica');
INSERT INTO Areas (nomeArea) value ('Pintura');
INSERT INTO Areas (nomeArea) value ('Instalações');
INSERT INTO Areas (nomeArea) value ('Montagem de Móveis');

/*INSERT - Tabela Especialidades*/
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Chuveiro Elétrico - troca de 1 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Chuveiro Elétrico - troca de 2 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Disjuntores - troca de 1 a 2 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Disjuntores - troca de 3 a 4 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Instalação de canaleta',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Interruptores embutidos - substituição / reparo 1 a 3 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Interruptores embutidos - substituição / reparo 4 a 6 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Luminária plafon - instalação / troca de 1 a 3 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Luminária pendente - instalação / troca de 1 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Resistência de chuveiro elétrico - instalação / troca',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ventilador de teto - instalação / substituição de 1 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ventilador de teto - instalação / substituição de 2 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ventilador de teto - instalação / substituição de 3 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomadas embutidas - substituição / reparo 1 a 4 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomadas embutidas - substituição / reparo 5 a 10 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomada externa com calha - instalação / troca de 1 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomada externa com calha - instalação / troca de 2 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomada externa com calha - instalação / troca de 3 unid.',0,1);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Chuveirinho higiênico - substituição / reparo',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Descarga acoplada - substituição / reparo',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Desentupimento de pia',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ralo / Box entupido ',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Fixação de cuba de pia ',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Registro de pia pingando',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Sifão - substituição / reparo',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Torneira - substituição / reparo',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Vaso Sanitário - substituição / reparo',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Vazamento de descarga embutida - substituição / reparo',0,2);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura epóxi - pintura de chão',0,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura Nova',0,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura de Fachadas',0,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura decorativa - revestimento / textura',0,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Pintura com desenho',0,3);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Chuveiro',0,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Tomadas ',0,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Luminárias / lustres',0,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Ventilador de teto',0,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Prateleiras',0,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Nichos',0,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Antenas de TV',0,4);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Armário - cozinha/banheiro',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Beliche',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cadeira',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cama de casal',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cama de solteiro',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Cômoda',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Escrivaninha',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Guarda-roupa',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Guarda-roupa - portas de correr',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Mesa',0,5);
INSERT INTO Especialidades (nomeEspecialidade, custoEspecialidade, idArea) values ('Prateleira',0,5);

/*INSERT - Tabela Status_Servicos*/
INSERT INTO Status_Servicos (descricaoStatus) value ('Aguardando Pagamento');
INSERT INTO Status_Servicos (descricaoStatus) value ('Pago - Aguardando Prestadora');
INSERT INTO Status_Servicos (descricaoStatus) value ('Agendado');
INSERT INTO Status_Servicos (descricaoStatus) value ('Em andamento');
INSERT INTO Status_Servicos (descricaoStatus) value ('Finalizado');
INSERT INTO Status_Servicos (descricaoStatus) value ('Cancelado');