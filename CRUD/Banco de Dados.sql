CREATE DATABASE agenda;

CREATE TABLE musicas(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(60) NOT NULL,
	album VARCHAR(60) NOT NULL,
	ano VARCHAR(4) NOT NULL,
	PRIMARY KEY(id)
);

INSERT INTO `agenda`.`musicas` (`id`, `nome`, `album`, `ano`) VALUES ('1', 'With You', 'Hybrid Theory', '2000');
INSERT INTO `agenda`.`musicas` (`id`, `nome`, `album`, `ano`) VALUES ('2', 'One Step Closer', 'Hybrid Theory', '2000');
INSERT INTO `agenda`.`musicas` (`id`, `nome`, `album`, `ano`) VALUES ('3', 'Numb', 'Meteora', '2004');
INSERT INTO `agenda`.`musicas` (`id`, `nome`, `album`, `ano`) VALUES ('4', 'New Divide', 'Music Video Transformers', '2009');
INSERT INTO `agenda`.`musicas` (`id`, `nome`, `album`, `ano`) VALUES ('5', 'In The End', 'Hybrid Theory', '2000');
INSERT INTO `agenda`.`musicas` (`id`, `nome`, `album`, `ano`) VALUES ('6', 'From the Inside', 'Meteora', '2003');
INSERT INTO `agenda`.`musicas` (`id`, `nome`, `album`, `ano`) VALUES ('7', "What I've Done", 'Minutes to Midnight', '2007');