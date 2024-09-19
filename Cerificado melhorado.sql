create database gestaocertificado;

use gestaocertificado;

create table estudante(
id int primary key auto_increment,
nome varchar(50) not null,
nascimento date not null,
ano_conclusao year not null,
numpauta int,
id_certificado int not null,
id_grupo int not null
)default charset=utf8;

alter table estudante modify id_certificado int unique;

create table instituicao(
id int primary key auto_increment,
nome varchar(50) not null,
localizacao varchar(30) not null
)default charset=utf8;

alter table instituicao modify nome varchar(50) unique;

create table certificado(
id int primary key auto_increment,
numpauta int not null,
ano year not null,
id_estudante int,
id_instituicao int,
id_notas int
)default charset=utf8;

create table notas(
id int primary key auto_increment,

portugues tinyint not null,
matematica tinyint not null,
quimica tinyint not null,
biologia tinyint not null,
fisica tinyint not null,
geografia tinyint not null,
ingles tinyint not null,
historia tinyint not null,
frances tinyint not null,
dgd tinyint not null,
filosofia tinyint not null
) default charset=utf8;

create table grupo(
id_grupo int primary key auto_increment,
grupo char not null unique,
id_notas int
)default charset=utf8;

insert into estudante(nome, nascimento, ano_conclusao, numpauta,id_certificado) values
 ('Ana Silva', '2006-01-15', 2024, 12345, 1),
  ('João Santos', '2005-08-07', 2023, 54321, 2),
  ('Maria Oliveira', '2004-12-29', 2022, 67890, 3),
  ('Pedro Souza', '2005-03-11', 2023, 21435, 4),
  ('Mariana Costa', '2006-07-22', 2024, 45678, 5),
  ('Carlos Ribeiro', '2005-05-05', 2023, 78901, 6),
  ('Joana Fernandes', '2004-10-10', 2022, 32145, 7),
  ('Bruno Martins', '2006-02-02', 2024, 65432, 8),
  ('Carolina Pereira', '2005-09-09', 2023, 98765, 9),
  ('Eduardo Silva', '2004-11-11', 2022, 43210, 10),
  ('Rafael Oliveira', '2006-04-04', 2024, 87654, 11),
  ('Ana Costa', '2005-06-06', 2023, 23456, 12),
  ('João Fernandes', '2004-09-09', 2022, 56789, 13),
  ('Maria Martins', '2006-03-03', 2024, 12543, 14),
  ('Pedro Pereira', '2005-07-07', 2023, 45679, 15),
  ('Mariana Silva', '2004-11-11', 2022, 78902, 16),
  ('Carlos Oliveira', '2006-05-05', 2024, 32154, 17),
  ('Joana Costa', '2005-08-08', 2023, 65438, 18),
  ('Bruno Fernandes', '2004-12-12', 2022, 98760, 19),
  ('Carolina Martins', '2006-06-06', 2024, 43215, 20),
  ('Eduardo Pereira', '2005-10-10', 2023, 87659, 21),
  ('Rafael Silva', '2004-08-08', 2022, 23459, 22);
  
  select * from estudante;
  
insert into certificado(numpauta,ano,id_estudante,id_instituicao,id_notas) values
  (12345, 2024, 1, 2, 3),
  (54321, 2023, 2, 3, 4),
  (67890, 2022, 3, 4, 5),
  (21435, 2024, 4, 5, 6),
  (45678, 2023, 5, 6, 7),
  (78901, 2022, 6, 7, 8),
  (32145, 2024, 7, 8, 9),
  (65432, 2023, 8, 9, 10),
  (98765, 2022, 9, 10, 11),
  (43210, 2024, 10, 1, 2),
  (87654, 2023, 11, 2, 3),
  (23456, 2022, 12, 3, 4),
  (56789, 2024, 13, 4, 5),
  (12543, 2023, 14, 5, 6),
  (45679, 2022, 15, 6, 7),
  (78902, 2024, 16, 7, 8),
  (32154, 2023, 17, 8, 9),
  (65438, 2022, 18, 9, 10),
  (98760, 2024, 19, 10, 11),
  (43215, 2023, 20, 1, 12),
  (87659, 2022, 21, 2, 13),
  (23459, 2024, 22, 3, 14);
  

  
   insert into notas(portugues,matematica,quimica,biologia,fisica,geografia,ingles,historia,frances,filosofia) values
     (10, 13, 12, 8, 6, 7, 12, 14, 7, 10),
  (12, 15, 16, 6, 7, 12, 15, 16, 18, 10, 12),
  (14, 16, 18, 15, 12, 14, 16, 10, 10, 12, 14),
  (16, 12, 10, 12, 9, 16, 13, 7, 12, 14, 16),
  (18, 10, 15, 7, 9, 18, 6, 12, 14, 6, 5),
  (10, 12, 7, 16, 9, 13, 7, 14, 6, 8, 10),
  (5, 14, 16, 8, 10, 12, 14, 13, 12, 10, 12),
  (14, 16, 6, 10, 5, 14, 6, 12, 10, 12, 14),
  (16, 7, 9, 12, 14, 16, 8, 10, 7, 15, 16),
  (18,15, 12, 4, 16, 18, 10, 12, 14, 16, 18),
    (10, 9, 14, 16, 18, 10, 12, 14, 16, 18, 10),
  (12, 7, 16, 7, 10, 12, 8, 16, 18, 15, 12),
  (14, 13, 18, 7, 12, 14, 16, 18, 8, 12, 14),
  (16, 18, 8, 12, 14, 16, 15, 15, 12, 14, 16),
  (6, 10, 12, 15, 16, 8, 9, 12, 14, 16, 18),
  (10, 12, 15, 16, 18, 10, 9, 14, 7, 8, 10),
  (12, 14, 16, 7, 10, 12, 7, 9, 7, 10, 12),
  (14, 16, 18, 10, 12, 14, 15, 11, 13, 12, 14),
  (13, 18, 10, 10, 7, 15, 7, 10, 12, 7, 16),
  (18, 10, 12, 14, 13, 8, 10, 7, 14, 7, 18);
  alter table grupo drop column id_notas;
  insert into grupo values('1','A'),('2','B'),('3','C');
  
  insert into instituicao(nome, localizacao) values
  -- 1
  ('Escola Secundária Francisco Manyanga', 'Maputo'),

  -- 2
  ('Escola Secundária Josina Machel', 'Maputo'),

  -- 3
  ('Escola Secundária Samora Machel', 'Matola'),

  -- 4
  ('Escola Secundária 25 de Setembro', 'Beira'),

  -- 5
  ('Escola Secundária Eduardo Mondlane', 'Nampula'),

  -- 6
  ('Escola Secundária 1º de Maio', 'Quelimane'),

  -- 7
  ('Escola Secundária Domingos Ornelas', 'Tete'),

  -- 8
  ('Escola Secundária Amílcar Cabral', 'Chimoio'),

  -- 9
  ('Escola Secundária 3 de Fevereiro', 'Lichinga'),

  -- 10
  ('Escola Secundária 7 de Abril', 'Pemba');
  
  insert into instituicao(nome, localizacao) values
  -- 11
  ('Escola Secundária da Matola', 'Maputo');
  drop table instituicao;
  select * from instituicao;
  
  show tables;
  alter table certificado add foreign key(id_estudante) references estudante(id);
  alter table certificado add foreign key(id_instituicao) references instituicao(id);
alter table estudante add foreign key(id_certificado) references certificado(id);
alter table certificado add foreign key(id_notas) references notas(id);
alter table estudante add foreign key(id_grupo) references grupo(id_grupo);

insert into estudante(nome, nascimento, ano_conclusao, numpauta) values
 ('Hercio Emerson', '2005-06-11', 2021, 147);
 
 select * from estudante 
 left join certificado on estudante.id_certificado = certificado.id 
 join notas on certificado.id_notas = notas.id order by estudante.nome;
 
alter table estudante add column id_instituicao int;
alter table estudante add foreign key(id_instituicao) references instituicao(id);
alter table instituicao drop column id_estudante;

select i.nome, e.nome,e.numpauta from instituicao as i left join estudante e on i.id = e.id_instituicao order by i.nome;

ALTER TABLE certificado modify numpauta int unique;

select * from notas;

describe estudante;

show tables;

create table login(
id int primary key auto_increment,
idInstituicao int,
foreign key (idInstituicao) references instituicao(id),
password varchar(20)
);

