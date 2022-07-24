SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `tbl_usuario` (
  `id` int(11) NOT NULL,
  `NomeUsuario` char(50) NOT NULL,
  `SobrenomeUsuario` char(150) NOT NULL,
  `DataNascUsuario` date NOT NULL,
  `EmailUsuario` varchar(150) NOT NULL,
  `SenhaUsuario` char(50) NOT NULL,
  `CelularUsuario` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `tbl_usuario` (`id`, `NomeUsuario`, `SobrenomeUsuario`, `DataNascUsuario`, `EmailUsuario`, `SenhaUsuario`, `CelularUsuario`) VALUES
(11, 'Kaique', 'Souza Santos', '2006-02-12', 'kaique.tudojoia_3@gmail.com', 'kaique.opa', '11-1234-5678'),
(12, 'teste', '01', '0000-00-00', 'teste_01', 'opa', '1131231231')

ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailUsuario` (`EmailUsuario`);

ALTER TABLE `tbl_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

