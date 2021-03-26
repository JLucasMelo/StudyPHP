create table pessoa (
	pessoa_id int generated always as identity,
	nome_completo varchar(250) not null,
	pessoa_cpf varchar(11) unique not null,
	pessoa_idade int not null,
	primary key(pessoa_id)
);

create table email (
	email_id INT generated always as identity,
	pessoa_id int,
	email_pessoa varchar(255) not null,
	primary key(email_id), 
	CONSTRAINT fk_pessoa
		foreign key(pessoa_id)
			references pessoa(pessoa_id)

);

create table telefone (
	telefone_id int generated always as identity,
	pessoa_id int,
	telefone_pessoa int not null,
	primary key(telefone_id),
	constraint fk_pessoa
		foreign key(pessoa_id)
			references pessoa(pessoa_id)
);

create table estado (
	estado_id int generated always as identity,
	estado varchar(10) not null,
	primary key(estado_id)
);

create table cidade (
	cidade_id int generated always as identity,
	estado_id int,
	cidade varchar(20) not null,
	primary key(cidade_id),
	constraint fk_estado
		foreign key(estado_id)
			references estado(estado_id)
);

create table endereco (
	endereco_id int generated always as identity,
	estado_id int,
	cidade_id int,
	pessoa_id int,
	logradouro varchar(255) not null,
	CEP int not null,
	numero int not null,
	bairro varchar(100) not null,
	primary key(endereco_id),
	constraint fk_estado
		foreign key(estado_id)
			references estado(estado_id),
	constraint fk_cidade
		foreign key(cidade_id)
			references cidade(cidade_id),
	constraint fk_pessoa
		foreign key(pessoa_id)
			references pessoa(pessoa_id)
			
);