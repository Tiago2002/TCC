create database dbProjetoTCC;

use dbProjetoTCC;

/*Tabela de Usuários*/
create table Clientes (
	idCliente INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeCliente VARCHAR(100) NOT NULL,
    telCliente VARCHAR(11) NOT NULL,
    cpfCliente CHAR(11),
    emailCliente VARCHAR(100) NOT NULL,
    senhaCliente VARCHAR(50) NOT NULL,
    ativo INT(1) UNSIGNED DEFAULT '1',
    dtCadastro DATETIME NOT NULL,
    PRIMARY KEY (idCliente)
    );
    
/*Tabela de Bancos - conforme FEBRABAN*/
create table Bancos (
	idBanco int(3) UNSIGNED NOT NULL,
    banco VARCHAR(100) NOT NULL,
    PRIMARY KEY (idBanco)
    );

/*Tabela de Prestadoras (dados bancarios serão usados para pagamento de serviços)*/
create table Prestadoras (
	idPrestadora int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomePrestadora VARCHAR(100) NOT NULL,
    telPrestadora VARCHAR(11) NOT NULL,
    cpfPrestadora CHAR(11),
    emailPrestadora VARCHAR(100) NOT NULL,
    senhaPrestadora VARCHAR(50) NOT NULL,
    idBanco int(3) UNSIGNED NOT NULL,
    agenciaBanco int(5) UNSIGNED NOT NULL,
    contaBanco varchar(15) NOT NULL,
    ativo INT(1) UNSIGNED DEFAULT '1',
    dtCadastro DATETIME NOT NULL,
    PRIMARY KEY (idPrestadora),
    FOREIGN KEY (idBanco) REFERENCES Bancos (idBanco)
    );

/*Tabela Áreas (Ex.: Hidráulica, Pintura...)*/    
create table Areas (
	idArea int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeArea varchar (50) NOT NULL,
    PRIMARY KEY (idArea)
    );

/* Tabela de Especialidades (Ex.: Instalação de Piso, Instalação de Chuveiro)*/
create table Especialidades (
	idEspecialidade int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeEspecialidade varchar (200) NOT NULL,
    custoEspecialidade double(6,2) UNSIGNED NOT NULL,
    idArea int(5) UNSIGNED NOT NULL,
    PRIMARY KEY (idEspecialidade),
    FOREIGN KEY (idArea) REFERENCES Areas (idArea)
    );

/* Tabela de especialidades dos Prestadoraes - Relação N:N */
create table Espec_Prestadoras ( 
    idEspecialidade int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    idPrestadora int(5) UNSIGNED NOT NULL,
    FOREIGN KEY (idEspecialidade) REFERENCES Especialidades (idEspecialidade),
    FOREIGN KEY (idPrestadora) REFERENCES Prestadoras (idPrestadora)
    );
    
/* Tabela de Estados */
create table Estados (
	idEstado int (2) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeEstado varchar (50) NOT NULL,
    siglaEstado char (2) NOT NULL,
    PRIMARY KEY (idEstado)
    );
    
/* Tabela de Municipios */
create table Municipios (
	idMunicipio int (5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeMunicipio varchar (50) NOT NULL,
    idEstado int (2) UNSIGNED NOT NULL,
    PRIMARY KEY (idMunicipio),
    FOREIGN KEY (idEstado) REFERENCES Estados (idEstado)
    );
    
/* Tabela de Bairros */
create table Bairros (
	idBairro int (5) UNSIGNED NOT NULL AUTO_INCREMENT,
    nomeBairro varchar (100) NOT NULL,
    idMunicipio int (5) UNSIGNED NOT NULL,
    PRIMARY KEY (idBairro),
    FOREIGN KEY (idMunicipio) REFERENCES Municipios (idMunicipio)
    );
    
/* Tabela de endereços */
create table Enderecos (
	idEndereco int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    CEP varchar (11) NOT NULL,
	tipoLogradouro varchar (50) NOT NULL,
	descricao varchar (100) NOT NULL,
    idBairro int (5) UNSIGNED NOT NULL,
    PRIMARY KEY (idEndereco),
    FOREIGN KEY (idBairro) REFERENCES Bairros (idBairro)
    );

/* Tabela de endereço de Usuário - Relação 1 - N */
create table End_Clientes (
	idEnd_Cliente int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    numero varchar (15) NOT NULL,
    complemento varchar (100),
    idCliente int(5) UNSIGNED NOT NULL,
    idEndereco int UNSIGNED NOT NULL,
    PRIMARY KEY (idEnd_Cliente),
    FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente),
    FOREIGN KEY (idEndereco) REFERENCES Enderecos (idEndereco)
    );

/* Tabela de endereço de Prestadoraes - Relação 1 - N */
create table End_Prestadoras (
	idEnd_Prestadora int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    numero varchar (15) NOT NULL,
    complemento varchar (100),
    idPrestadora int(5) UNSIGNED NOT NULL,
    idEndereco int UNSIGNED NOT NULL,
    PRIMARY KEY (idEnd_Prestadora),
    FOREIGN KEY (idPrestadora) REFERENCES Prestadoras (idPrestadora),
    FOREIGN KEY (idEndereco) REFERENCES Enderecos (idEndereco)
    );
    
/* Tabela de status de serviços (Pendente, Realizado, Cancelado, etc.) */
create table Status_Servicos (
	idStatus_Servico int(2) UNSIGNED NOT NULL AUTO_INCREMENT,
    descricaoStatus varchar(50) NOT NULL,
	PRIMARY KEY (idStatus_Servico)
	);

/* Tabela de serviços */    
create table Servicos (
	idServico int(5) UNSIGNED NOT NULL AUTO_INCREMENT,
    idCliente int(5) UNSIGNED NOT NULL,
    idEnd_Cliente int(5) UNSIGNED NOT NULL,
    idArea int(5) UNSIGNED NOT NULL,
    idEspecialidade int(5) UNSIGNED NOT NULL,
    descricaoServico varchar(500) NOT NULL,
    dataServico date NOT NULL,
    horaServico time NOT NULL,
    idStatus_Servico int(2) UNSIGNED NOT NULL,
    idPrestadora int(5) UNSIGNED,
    custoServico double(6,2) UNSIGNED NOT NULL,
    avaliaServico int (2) UNSIGNED, /*será usado para o sistema de avaliação da Prestadora - de 0 a 10*/
    PRIMARY KEY (idServico),
    FOREIGN KEY (idCliente) REFERENCES Clientes (idCliente),
    FOREIGN KEY (idEnd_Cliente) REFERENCES End_Clientes (idEnd_Cliente),
    FOREIGN KEY (idArea) REFERENCES Areas (idArea),
    FOREIGN KEY (idEspecialidade) REFERENCES Especialidades (idEspecialidade),
    FOREIGN KEY (idStatus_Servico) REFERENCES Status_Servicos (idStatus_Servico),
    FOREIGN KEY (idPrestadora) REFERENCES Prestadoras (idPrestadora)
    );

/*drop database dbProjetoTCC;*/