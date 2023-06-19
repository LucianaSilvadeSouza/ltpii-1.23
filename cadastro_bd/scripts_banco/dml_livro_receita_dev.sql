use livro_receita_dev;

create table Receita (
nome varchar(45) not null,
cozinheiro smallint not null,
idrec int unsigned not  null unique,
dt_criacao date not null,
idcateg smallint not null,
degustador smallint,
dt_degustador date,
nota_degus decimal(3,1),
ind_inedita char(1) not null,
modo_preparo varchar(1000),
num_porcoes smallint,
primary key (nome,cozinheiro),
foreign key (idcateg) references Categoria (idcategoria),
foreign key (cozinheiro) references funcionario (idfunc),
foreign key (degustador) references funcionario (idfunc)
)
engine = innodb;

INSERT INTO `livro_receita_dev`.`receita`
(`nome`,
`cozinheiro`,
`idrec`,
`dt_criacao`,
`idcateg`,
`degustador`,
`dt_degustador`,
`nota_degus`,
`ind_inedita`,
`modo_preparo`,
`num_porcoes`)
values
("Ovo frito",
"Luciana",
"1",
"2023-06-07"
"2",
"Joao",
"2023-06-08",
10,
null,
"Unte uma panela em fogo baixo com manteiga, quebre 2 ovos e os deixe fritar até que fiquem dourados, após desligue o fogo e sirva",
"2"
);
