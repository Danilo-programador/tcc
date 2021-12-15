/*Insert Administrador*/
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