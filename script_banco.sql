create table clientes(
	id_cliente int not null auto_increment,
    nome_cliente varchar(20) not null,
	email_cliente varchar(40) not null,
    telefone_cliente varchar(15) not null,
    primary key(id_cliente)
);
INSERT INTO clientes (nome_cliente, email_cliente, telefone_cliente)
VALUES
('Cesar Augusto', 'cesar.augusto@email.com', '18 9876543'),
('Joao Pedro', 'joao.pedro@email.com', '18 9983488'),
('Isabela Souza', 'isabela.souza@email.com', '18 99783482'),
('Maria Clara Ferreira', 'maria.clara.ferreira@email.com', '18 996532213'),
('Arthur Mendes', 'arthur.mendes@email.com', '18 99777590'),
('Enzo Nunes', 'enzo.nunes@email.com', '61 932109876'),
('Carlos Batista', 'carlos.batista@email.com', '18 94339865 '),
('Roberto Gomes', 'roberto.gomes@email.com', '81 910987654'),
('Bianca Rocha', 'bianca.rocha@email.com', '18 99534563'),
('Felipe Barros', 'felipe.barros@email.com', '18 34324245'),
('Gustavo Lima', 'gustavo.lima@email.com', '18 991323'),
('Gabriel Martins', 'gabriel.martins@email.com', '18 992324'),
('Gabriela Almeida', 'gabriela.almeida@email.com', '18 9232122');

INSERT INTO clientes (nome_cliente, email_cliente, telefone_cliente)
VALUES('Gabriel Martins', 'gabriel.martins@email.com', '18 992324'),
('Gabriela Almeida', 'gabriela.almeida@email.com', '18 9232122');
select * from  clientes;
