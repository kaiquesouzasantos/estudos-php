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
(12, 'teste', '01', '0000-00-00', 'teste_01', 'opa', '1131231231'),
(13, 'Cicera Raquel de Souza Santos', '01', '0000-00-00', 'kelssantos07@gmail.com', '12164', '1131231231'),
(19, 'Cicera Raquel de Souza Santos', '01', '0000-00-00', 'kelssantos072@gmail.com', '', '1131231231'),
(31, 'Cicera Raquel de Souza Santos', '01', '0000-00-00', 'kelssantos072@1gmail.com', '', '1131231231'),
(33, 'Cicera Raquel de Souza Santos', '01', '0000-00-00', 'kelssantos071323@gmail.com', '21312321', '1131231231'),
(34, 'Cicera Raquel de Souza Santos', '01', '0000-00-00', 'kelssantos0171323@gmail.com', 'ewq', '1131231231');

ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailUsuario` (`EmailUsuario`);

ALTER TABLE `tbl_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

