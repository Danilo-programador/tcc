CREATE DATABASE carteira_vacina;

USE carteira_vacina;

/*Tabela usuário fará o cadastro da usuario,clinica,funcionário, administrador.
  O unico usuário que receberá o atributo idClinica e coren será o funcionário. */
CREATE TABLE usuario(
       id INT AUTO_INCREMENT,
       email VARCHAR(100) NOT NULL,
       senha VARCHAR(220) NOT NULL,
       telefone VARCHAR(30) NULL,
       cpf CHAR(11) NULL,
       tipo varchar(1) NOT null, -- A- adiministrador, F- funcionario, U - usuario, C - clinica
       nome VARCHAR(40) NULL,
       dt_nascimento DATE NULL,
       rua VARCHAR(100)  NULL,
       numero VARCHAR(5)  NULL,
       compl VARCHAR(150)  NULL,
       bairro VARCHAR(100)  NULL,
       cidade VARCHAR(40)  NULL,
       cep INT(8)  NULL,
       uf CHAR(2) NULL,
       coren INT(6) NULL,
       idClinica int null,     
       PRIMARY KEY(id),
       FOREIGN KEY(idClinica) REFERENCES usuario(id)
);

/*Tabela que ficara o segundo número de telefone caso o usuário tenha mais de 1 número*/
CREATE TABLE telefone(
       id INT AUTO_INCREMENT,
       ddd INT(3) NOT NULL,
       numero INT(9) NOT NULL,
       tipo VARCHAR(15),
       id_usuario INT,
       PRIMARY KEY(id),
       FOREIGN KEY(id_usuario) REFERENCES usuario(id)
);

/*Tabela tipo_vacina terá todos os cadastros de nomes de vacinas */
CREATE TABLE tipo_vacina(
       id int AUTO_INCREMENT,
       nome VARCHAR(40),
       descricao VARCHAR(800),
       PRIMARY KEY(id)
);

/*Tabela vacina cadastra o valor,lote,validade,laboratório,id_tipo_vacina,id_clinica. 
  id_tipo_vacina será uma chave estrangeira da tabela tipo_vacina onde estára o nome
  descrição da vacina, id_clinica será uma chave estrangeira da tabela usuario a função
  do id_clinica é para indentificar quais vacinas aquela clinica tem cadastrada
  */
CREATE TABLE vacina(
       id INT AUTO_INCREMENT,
       valor DECIMAL(6,2) NOT NULL,
       lote VARCHAR(20) NOT NULL,
       validade DATE NOT NULL,
       laboratorio VARCHAR(20) NOT NULL,
       id_tipo_vacina INT NOT NULL,
       id_clinica INT NOT NULL,
       PRIMARY KEY(id),
       FOREIGN KEY(id_clinica) REFERENCES usuario(id),
       FOREIGN KEY(id_tipo_vacina) REFERENCES tipo_vacina(id)
);

/*Tabela vacinacoa será a tabela onde ficará o registro se o usuario
  tomou a vacina e quem foi o funcionário que aplicou a vacina e guarda
  a data que foi dado a vacina*/ 
CREATE TABLE vacinacao(
        id INT AUTO_INCREMENT,
        id_vacina INT NOT NULL,
        id_funcionario INT NOT NULL,
        id_usuario INT NOT NULL,
        id_clinica INT NOT NULL,
        data_reserva DATE NOT NULL,
        PRIMARY KEY(id),
        FOREIGN KEY(id_vacina) REFERENCES tipo_vacina(id),
        FOREIGN KEY(id_clinica) REFERENCES usuario(id),
        FOREIGN KEY(id_funcionario) REFERENCES  usuario(id),
        FOREIGN KEY(id_usuario) REFERENCES  usuario(id)
);

/*Tabela reserva fará a reserva da vacina do usuario
guardará a data, horario,id_usuaria,id_clinica
*/
CREATE TABLE reserva(
       id INT AUTO_INCREMENT,
       data_nascimento DATE NOT NULL,
       horario varchar(40) NOT NULL,
       id_usuario INT NOT NULL,
       id_clinica INT NOT null,
       PRIMARY KEY(id),
       FOREIGN KEY(id_usuario) REFERENCES usuario(id),
       FOREIGN KEY(id_clinica) REFERENCES usuario(id)
);

CREATE TABLE tipo_vac_reserva(
       id INT AUTO_INCREMENT,
       id_tipo_vacina INT NOT NULL,
       id_reserva INT NOT NULL,
       id_clinica INT NOT NULL,
       PRIMARY KEY(id),
       FOREIGN KEY(id_clinica) REFERENCES usuario(id),
       FOREIGN KEY(id_tipo_vacina) REFERENCES tipo_vacina(id),
       FOREIGN KEY(id_reserva) REFERENCES reserva(id)
);


INSERT INTO usuario (email,senha,tipo) 
VALUES ('adm@gmail.com',MD5('123'),'A');

insert into tipo_vacina(nome, descricao) values 
    ('BCG (Bacilo Calmette-Guerin)', 'Previne as formas graves de tuberculose, principalmente miliar e meníngea'),
    ('Hepatite B', 'Previne a hepatite do tipo B'),
    ('Pentavalente (DTP/HB/Hib)', 'Previne difteria, tétano, coqueluche, hepatite B e meningite e infecções por HiB'),
    ('VIP (Poliomielite inativada)', 'Previne poliomielite ou paralisia infantil'),
    ('Pneumocócica 10V', 'Previne pneumonia, otite, meningite e outras doenças causadas pelo Pneumococo'),
    ('Vacina rotavírus humano G1P1', 'Previne diarreia por rotavírus'),
    ('Meningocócica C', 'conjugada Previne a doença meningocócica C'),
    ('Tríplice Viral', 'Previne sarampo, caxumba e rubéola');