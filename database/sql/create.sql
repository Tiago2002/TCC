create database dbProjetoTCC;

use dbProjetoTCC;

/*Tabela de Clientes*/
create table Clientes (
	idCliente INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeCliente VARCHAR(100) NOT NULL,
    telCliente VARCHAR(11) NOT NULL,
    cpfCliente CHAR(11),
    emailCliente VARCHAR(100) NOT NULL,
    senhaCliente VARCHAR(100) NOT NULL,
    ativo INT(1) UNSIGNED DEFAULT '1',
    dtCadastro DATETIME NOT NULL,
    PRIMARY KEY (idCliente)
    );
    
/*Tabela de Bancos - conforme FEBRABAN*/
create table Bancos (
	idBanco INT(3) UNSIGNED NOT NULL,
    banco VARCHAR(100) NOT NULL,
    PRIMARY KEY (idBanco)
    );

/*Tabela de Prestadoras (dados bancarios serão usados para pagamento de serviços)*/
create table Prestadoras (
	idPrestadora INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomePrestadora VARCHAR(100) NOT NULL,
    telPrestadora VARCHAR(11) NOT NULL,
    cpfPrestadora CHAR(11),
    emailPrestadora VARCHAR(100) NOT NULL,
    senhaPrestadora VARCHAR(50) NOT NULL,
    idBanco INT(3) UNSIGNED NOT NULL,
    agenciaBanco INT(5) UNSIGNED NOT NULL,
    contaBanco VARCHAR(15) NOT NULL,
    ativo INT(1) UNSIGNED DEFAULT '1',
    dtCadastro DATETIME NOT NULL,
    PRIMARY KEY (idPrestadora),
    FOREIGN KEY (idBanco) REFERENCES Bancos (idBanco)
    );

/*Tabela Áreas (Ex.: Hidráulica, Pintura...)*/    
create table Areas (
	idArea INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeArea VARCHAR (50) NOT NULL,
    PRIMARY KEY (idArea)
    );

/* Tabela de Especialidades (Ex.: Instalação de Piso, Instalação de Chuveiro)*/
create table Especialidades (
	idEspecialidade INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeEspecialidade VARCHAR (200) NOT NULL,
    custoEspecialidade double(6,2) UNSIGNED NOT NULL,
    idArea INT(5) UNSIGNED NOT NULL,
    PRIMARY KEY (idEspecialidade),
    FOREIGN KEY (idArea) REFERENCES Areas (idArea)
    );
    
/* Tabela de status (Pendente, Aprovado, Realizado, Cancelado, etc.) */
create table TbStatus (
	idStatus INT(2) UNSIGNED NOT NULL AUTO_INCREMENT,
    descricaoStatus VARCHAR(50) NOT NULL,
	PRIMARY KEY (idStatus)
	);

/* Tabela de especialidades das Prestadoras - Relação N:N */
create table Espec_Prestadoras ( 
    idEspecialidade INT(5) UNSIGNED NOT NULL,
    idPrestadora INT(5) UNSIGNED NOT NULL,
    idStatus INT(2) UNSIGNED NOT NULL,
    FOREIGN KEY (idEspecialidade) REFERENCES Especialidades (idEspecialidade),
    FOREIGN KEY (idPrestadora) REFERENCES Prestadoras (idPrestadora),
    FOREIGN KEY (idStatus) REFERENCES TbStatus (idStatus)
    );

/* Tabela de endereço de Usuárias - Relação 1 - N */
create table End_Clientes (
	idEnd_Cliente INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    CEP INT(8) UNSIGNED,
    complemento VARCHAR (100),
    numero VARCHAR (15),
    idCliente INT(5) UNSIGNED NOT NULL,
    PRIMARY KEY (idEnd_Cliente),
    FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente)
    );

/* Tabela de endereço de Prestadoras - Relação 1 - N */
create table End_Prestadoras (
	idEnd_Prestadora INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    CEP INT(8) UNSIGNED,
    complemento VARCHAR (100),
    numero VARCHAR (15),
    idPrestadora INT(5) UNSIGNED NOT NULL,
    PRIMARY KEY (idEnd_Prestadora),
    FOREIGN KEY (idPrestadora) REFERENCES Prestadoras (idPrestadora)
    );

/* Tabela de serviços */    
create table Servicos (
	idServico INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    idCliente INT(5) UNSIGNED NOT NULL,
    idEnd_Cliente INT(5) UNSIGNED NOT NULL,
    idArea INT(5) UNSIGNED NOT NULL,
    idEspecialidade INT(5) UNSIGNED NOT NULL,
    descricaoServico VARCHAR(1000) NOT NULL,
    dataServico DATE NOT NULL,
    horaServico TIME NOT NULL,
    idStatus INT(2) UNSIGNED NOT NULL,
    idPrestadora INT(5) UNSIGNED,
    custoServico double(6,2) UNSIGNED NOT NULL,
    avaliaServico INT (2) UNSIGNED, /*será usado para o sistema de avaliação da Prestadora - de 0 a 10*/
    dataCriacao DATETIME NOT NULL,
    dataAlteracao DATETIME NOT NULL,
    PRIMARY KEY (idServico),
    FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente),
    FOREIGN KEY (idEnd_Cliente) REFERENCES End_Clientes (idEnd_Cliente),
    FOREIGN KEY (idArea) REFERENCES Areas (idArea),
    FOREIGN KEY (idEspecialidade) REFERENCES Especialidades (idEspecialidade),
    FOREIGN KEY (idStatus) REFERENCES TbStatus (idStatus),
    FOREIGN KEY (idPrestadora) REFERENCES Prestadoras (idPrestadora)
    );

/*drop database dbProjetoTCC;*/