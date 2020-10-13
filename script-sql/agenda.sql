create database agenda;

use agenda;

create table if not exists tb_contato(
id int auto_increment not null primary key,
nome varchar(255),
telefone varchar(20),
email varchar(100)
)default character set utf8 default collate utf8_general_ci;


insert into tb_contato values(default, 'Leandro Luis', '(87)99715-1616', 'leandro@luis.com');
insert into tb_contato values(default, 'Maria Gabriela', '(85)98744-4418', 'maria@gabriela.com');
insert into tb_contato values(default, 'Bruno Gonçalves', '(87)91718-7727', 'bruno@goncalves.com');
insert into tb_contato values(default, 'Patrick Fernandes', '(84)98881-0001', 'patrick@fernandes.com');
insert into tb_contato values(default, 'Larissa Manuella', '(83)98118-8881', 'larissa@manuella.com');
insert into tb_contato values(default, 'Nonato Lima', '(84)99415-9898', 'nonato@lima.com');