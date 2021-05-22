-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 02:21:24
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsolgas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codcli` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `direccion` varchar(1000) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `pas` varchar(30) NOT NULL,
  `acepto_politicas` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codcli`, `nombre`, `direccion`, `distrito`, `correo`, `pas`, `acepto_politicas`) VALUES
(1, 'Gean Carlos Romero', 'Mz 40 Lt 20 AVC', 'Los Olivos', 'gean@gmail.com', 'gean123', ''),
(2, 'Giovanna Tanta', 'Av tomas valle #69', 'Callao', 'giotaro@gmail.com', 'giotaro', ''),
(3, 'Marco Perez', 'Jr Ardiles 32', 'Puente Piedra', 'utp46305743@gmail.com', 'UTP46305743', ''),
(4, 'Liliana Ramirez', 'Av Los girasoles 123', 'Comas', 'liliana@gmail.com', 'liliana123', ''),
(5, 'Nelida Perez', 'Jr Miguel Aljovin 105', 'San Martin De Porres', 'nelidaperez@gmail.com', 'nelida321', ''),
(6, 'Mayra Chavez', 'Jr Globo Terraqueo 666', 'Los Olivos', 'mayrachavez@gmail.com', 'mayracha567', ''),
(7, 'Renzo Apaza', 'Av Huandoy 60', 'Los Olivos', 'renzoapaza@gmail.com', 'renzo000', ''),
(8, 'Leslie Ramirez', 'Av San Carlos 1345', 'Puente Piedra', 'leslieramirez@hotmail.com', 'leslie246', ''),
(9, 'Antonio Merino', 'Av Santa Rosa 9900', 'Independencia', 'antoniomerino@hotmail.com', 'merinoantonio', ''),
(10, 'Victor Garcia', 'Av Cordialidad 333', 'Los Olivos De Pro', 'victorgarcia@gmail.com', 'victor123456', ''),
(11, 'Javier Padilla', 'Calle Inti Raymi 183', 'Ancon', 'javierpadilla@hotmail.com', 'xavi2020', ''),
(12, 'Angelo Olazabal', 'Av san Luis 11', 'Puente Piedra', 'angeloolazabal@gmail.com', 'angelo987', ''),
(13, 'Jose Luis Mendoza', 'Av Metropolitano 33', 'Comas', 'pepelucho@hotmail.com', 'pepelucho123456', ''),
(14, 'Eva Ramirez', 'Av. Santa Luis 234', 'Los Olivos', 'evaramirez@gmail.com', 'evaramirez666', ''),
(15, 'Javier Estrella', 'Av Globo Terraqueo 123', 'Los Olivos', 'xavistar@hotmail.com', 'xaviestrella00', ''),
(16, 'Jose Morales', 'Av Pro 33', 'Pro', 'josemorales@hotmail.com', 'josemora432', ''),
(17, 'Nelly Perez', 'Av Alisos 22', 'Los Olivos', 'nellyperez@hotmail.com', 'nellyperez', ''),
(18, 'Nayeli Romero', 'Av Mariategui 11', 'Comas', 'nayeliromero@hotmail.com', '789456123', ''),
(19, 'Evelyn Mora', 'Jr San Antonio 22', 'Puente Piedra', 'evymora@gmail.com', 'evymora2020', ''),
(20, 'William De La Cruz', 'Av San Carlos 77', 'Puente Piedra', 'willdelacruz@gmail.com', 'willxx', ''),
(21, 'Jorge Neyra', 'Mz 40 Lt 8 AVC ', 'Los Olivos', 'jorgeney@hotmail.com', 'georgeney', ''),
(22, 'Milagros Gonzales', 'Jr. Callao 56', 'Comas', 'milagrosgonzales@gmail.com', '12345', ''),
(23, 'Sonia Morales', 'Av Huandoy 502', 'Pro', 'soniamorales@hotmail.com', 'sonia321', ''),
(24, 'Emily Diaz', 'Av San Miguel 123', 'Los Olivos', 'emilydiaz@gmail.com', '123456', ''),
(25, 'Irene Massiel Humani Romero', 'calle Real Madrid etapa1 mz 23', 'San Martin de Porres', 'ronaldcueva778@gmail.com', 'gato123456', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `numpedido` int(11) NOT NULL,
  `codpro` int(11) NOT NULL,
  `can` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`numpedido`, `codpro`, `can`) VALUES
(1, 5, 1),
(2, 5, 1),
(3, 6, 1),
(4, 5, 2),
(4, 6, 1),
(5, 5, 1),
(6, 6, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `numpedido` int(11) NOT NULL,
  `codcli` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`numpedido`, `codcli`, `fecha`) VALUES
(1, 3, '2021-04-01'),
(2, 3, '2020-06-17'),
(3, 3, '2020-07-22'),
(4, 3, '2021-04-04'),
(5, 3, '2021-04-05'),
(6, 3, '2021-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codpro` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `detalle` varchar(1000) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codpro`, `descripcion`, `precio`, `stock`, `estado`, `detalle`, `imagen`) VALUES
(1, 'Normal', '35.00', 150, 'Normal', 'Balon de gas de 10 Kilos con valvula normal ', 'Normal.jpg'),
(2, 'Premium', '35.00', 105, 'Normal', 'Balon de gas de 10 kilos con valvula premium', 'Premium.jpg'),
(3, 'Grande', '125.00', 30, 'Normal', 'Balon de gas de 45 kilos con válvula industrial', 'Grande.jpg'),
(4, 'Regulador', '35.00', 50, 'Normal', 'Regulador de válvula premium', 'Regulador.jpg'),
(5, 'Manguera', '0.01', 30, 'Normal', 'Manguera para la union del regulador con la cocina.', 'Manguera.jpg'),
(6, 'Agarradera', '0.01', 199, 'Normal', 'Manguera para la union del regulador con la cocina', 'Agarradera.jpg'),
(7, 'Gastop', '5.00', 100, 'Normal', 'Accesorio para detener una fuga de gas de balones con desperfectos', 'Gastop.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrolibro`
--

CREATE TABLE `registrolibro` (
  `id_registro` int(11) NOT NULL,
  `Tipo_comunicacion` varchar(2) DEFAULT NULL,
  `tipo_persona` varchar(2) DEFAULT NULL,
  `nombres` varchar(50) DEFAULT NULL,
  `apellidop` varchar(50) DEFAULT NULL,
  `apellidom` varchar(50) DEFAULT NULL,
  `tipo_odcumento` varchar(2) DEFAULT NULL,
  `ndocumento` varchar(20) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `celular` varchar(10) DEFAULT NULL,
  `nacionalidad` varchar(2) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `provincia` varchar(50) DEFAULT NULL,
  `distrito` varchar(50) DEFAULT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `asunto` varchar(200) DEFAULT NULL,
  `mensaje` varchar(3000) DEFAULT NULL,
  `razon_social` varchar(190) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `area` varchar(400) DEFAULT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrolibro`
--

INSERT INTO `registrolibro` (`id_registro`, `Tipo_comunicacion`, `tipo_persona`, `nombres`, `apellidop`, `apellidom`, `tipo_odcumento`, `ndocumento`, `correo`, `telefono`, `celular`, `nacionalidad`, `departamento`, `provincia`, `distrito`, `direccion`, `asunto`, `mensaje`, `razon_social`, `estado`, `area`, `fecha`) VALUES
(3, '1', '1', 'Irene Massiel', 'Huamani', 'Romero', '1', '20415632789', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 2, 'Piscina Santa Rosa', '2021-04-04'),
(4, '1', '1', 'Gean Carlos', 'Romero', 'Romero', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Reparto', '2021-04-01'),
(5, '1', '1', 'Irene Massiel', 'Huamani', 'Romero', '1', '20415632789', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Reparto', '2021-04-05'),
(6, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(7, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 2, 'Gerencia General', '2021-04-05'),
(8, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(9, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(10, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 1, 'Gerencia General', '2021-04-05'),
(11, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 1, 'Gerencia General', '2021-04-05'),
(12, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 2, 'Gerencia General', '2021-04-05'),
(13, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(14, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 1, 'Gerencia General', '2021-04-05'),
(15, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(16, '1', '1', 'Ronald', 'Wayne', 'kent', '1', '47154269', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(17, '1', '1', 'Irene Massiel', 'Huamani', 'Romero', '1', '20415632789', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(18, '1', '1', 'Irene Massiel', 'Huamani', 'Romero', '1', '20415632789', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 2, 'Gerencia General', '2021-04-05'),
(19, '1', '1', 'Irene Massiel', 'Huamani', 'Romero', '1', '20415632789', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(20, '1', '1', 'Irene Massiel', 'Huamani', 'Romero', '1', '20415632789', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'RECLAMO DE GAS MAL INSTALADO', '', 3, 'Gerencia General', '2021-04-05'),
(21, '1', '1', 'Ronald', 'Wayne', 'Cueva', '1', '47171420', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'El dia 04/04/2021 vinieron a hacer una instalación, dicha instalación la hicieron mal, y hubo daños en el hogar con dicha instalación.', '', 2, 'Gerencia General', '2021-04-05'),
(22, '1', '1', 'Ronald', 'Wayne', 'Cueva', '1', '47171420', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'El dia 04/04/2021 vinieron a hacer una instalación, dicha instalación la hicieron mal, y hubo daños en el hogar con dicha instalación.', '', 1, 'Gerencia General', '2021-04-05'),
(23, '1', '1', 'Ronald', 'Wayne', 'Cueva', '1', '47171420', 'ronaldcueva778@gmail.com', '991470509', '991470509', '1', '14', '1', '42', 'AV AMERICANA CON SEPITA', 'RECLAMO DE GAS MAL INSTALADO', 'El dia 04/04/2021 vinieron a hacer una instalación, dicha instalación la hicieron mal, y hubo daños en el hogar con dicha instalación.', '', 1, 'Gerencia General', '2021-04-05'),
(24, '1', '1', 'Leonardo', 'Infantes', 'Negrete', '1', '47141257', 'ronaldcueva778@gmail.com', '017456248', '991470509', '1', '14', '1', '42', 'Av. A con la calle Central por villasol', 'Fuga de Gas', 'Buenas noches, el dia 04/04/2021 tuve una fuga de gas, vino un tecnico y paro la fuga mas no soluciono, porque noi tengo el servicio de gas, requiero una solucion, gracias.', '', 3, 'Reparto', '2021-04-05'),
(25, '1', '1', 'Leonardo', 'Cueva', 'Wayne', '1', '47124539', 'ronaldcueva778@gmail.com', '017674589', '987654148', '1', '14', '1', '42', 'av jiro a', 'FUGA DE GAS ATENDER URGENTE', 'Buenas noches desde hace 2 dias tengo una fuga de gas mi casa exploto, porfavor venir a apaagr el incendio, gracias', '', 3, 'Gerencia General', '2021-04-05'),
(26, '1', '1', 'Diana', 'Prince', 'Temisquira', '1', '47125468', 'ronaldcueva778@gmail.com', '014561237', '991470509', '1', '14', '1', '42', 'av jiro soto mayor', 'FUGA DE GAS URGENTE', 'Buenas noches, el dia 04/04/2021 tuve una fuga de gas, vino un tecnico y paro la fuga mas no soluciono, porque noi tengo el servicio de gas, requiero una solucion, gracias.', '', 3, 'Gerencia General', '2021-04-05'),
(27, '1', '1', 'Gean Carlo', 'Romero', 'Perez', '1', '47812546', 'geancarlo1233@gmail.com', '014785479', '987412547', '1', '14', '1', '42', 'Av A con avenida C', 'FUGA DE GAS', 'Buenas noches, el dia 04/04/2021 tuve una fuga de gas, vino un tecnico y paro la fuga mas no soluciono, porque noi tengo el servicio de gas, requiero una solucion, gracias.', '', 3, 'Reparto', '2021-04-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_rpta` int(11) NOT NULL,
  `id_registro` varchar(100) DEFAULT NULL,
  `mensaje` varchar(3000) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `area` varchar(400) DEFAULT NULL,
  `emailarea` varchar(400) DEFAULT NULL,
  `asunto` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_rpta`, `id_registro`, `mensaje`, `fecha_registro`, `area`, `emailarea`, `asunto`) VALUES
(9, '4', 'TYUTYUTYUTYU', '2021-04-05', '', '', ''),
(10, '4', 'hola se atendera de inmediato', '2021-04-05', '', '', ''),
(11, '5', 'YTUTYUTYUTYUTYUYTUTYUTY', '2021-04-06', '', '', ''),
(12, '5', 'YTRURTYRTYEWRTWERWERWER', '2021-04-06', '', '', ''),
(13, '5', 'YTRURTYRTYEWRTWERWERWERTYUTYUTYUTYU', '2021-04-06', '', '', ''),
(14, '5', 'YTRURTYRTYEWRTWERWERWERTYUTYUTYUTYU', '2021-04-06', '', '', ''),
(15, '5', 'YTRURTYRTYEWRTWERWERWERTYUTYUTYUTYU', '2021-04-06', '', '', ''),
(16, '5', 'Su petición sera corregida ala brevedad posible, gracias', '2021-04-06', '', '', ''),
(17, '5', 'Su petición sera corregida ala brevedad posible, gracias', '2021-04-06', '', '', ''),
(18, '5', 'Su petición sera corregida ala brevedad posible, gracias', '2021-04-06', '', '', ''),
(19, '5', 'Su petición sera corregida ala brevedad posible, gracias', '2021-04-06', '', '', ''),
(20, '5', 'asdasdasdasdasdasdasdasdasqdasdasdasdasdasd', '2021-04-06', '', '', ''),
(21, '6', 'Su reclamo será atendido a la brevedad posible, gracias', '2021-04-06', '', '', ''),
(22, '6', 'ghjghjghjghjghjghjghjghj', '2021-04-06', '', '', ''),
(23, '6', 'hjhjjhhjhjhjhj', '2021-04-06', '', '', ''),
(24, '6', 'trytrtryrtyrytytrtry', '2021-04-06', '', '', ''),
(25, '13', 'hola, se atendera, gracias', '2021-04-06', '', '', ''),
(26, '15', 'hghgjhjgjhghjgghjghjghjhgjhjgghjghjghj', '2021-04-06', '', '', ''),
(27, '16', 'su pedido sera atendido, gracias', '2021-04-06', '', '', ''),
(28, '16', 'tytyuutyuytuyt', '2021-04-06', '', '', ''),
(29, '16', 'uyttuyytutyu', '2021-04-06', '', '', ''),
(30, '16', 'sera atendido su reclamo, gracias', '2021-04-06', '', '', ''),
(31, '16', 'sera atendido su reclamo', '2021-04-06', '', '', ''),
(32, '16', 'sera entregado su pedido', '2021-04-06', '', '', ''),
(33, '17', 'Buenas noches ronald, porfavor atender esta incidencia, gracias', '2021-04-06', 'Gerencia General', '', 'RECLAMO DE GAS MAL INSTALADO'),
(34, '24', 'Buenas noches, señor gerente por favor tener en cuenta con los ocurrido, gracias', '2021-04-06', 'Gerencia General', '', 'Buenas noches, el dia 04/04/2021 tuve una fuga de gas, vino un tecnico y paro la fuga mas no soluciono, porque noi tengo el servicio de gas, requiero una solucion, gracias.'),
(35, '19', 'Buenas noches estimado , por favor revisar este incidente con urgencia, gracias', '2021-04-06', 'Reparto', '', 'RECLAMO DE GAS MAL INSTALADO'),
(36, '20', 'Buenas noches, porfavor revisar este reclamo con urgencia ya que el cliente tiene bastantes incidentes durante la semana, gracias.', '2021-04-06', 'Reparto', '', 'RECLAMO DE GAS MAL INSTALADO'),
(37, '25', 'buenas noches porfavor atender esto con urgencias, gracias', '2021-04-06', 'Reparto', '', 'Buenas noches desde hace 2 dias tengo una fuga de gas mi casa exploto, porfavor venir a apaagr el incendio, gracias'),
(38, '26', 'Porfavor atender con suma urgencia, gracias', '2021-04-06', 'Administración', '', 'Buenas noches, el dia 04/04/2021 tuve una fuga de gas, vino un tecnico y paro la fuga mas no soluciono, porque noi tengo el servicio de gas, requiero una solucion, gracias.'),
(39, '27', 'Buenas noches, porfavor revisar este incidente, gracias', '2021-04-06', 'Mantenimiento', '', 'Buenas noches, el dia 04/04/2021 tuve una fuga de gas, vino un tecnico y paro la fuga mas no soluciono, porque noi tengo el servicio de gas, requiero una solucion, gracias.'),
(40, '8', 'Buenas noches señor Cliente, su reclamo sera atendido, gracias por espera.', '2021-04-06', 'on', '', ''),
(41, '9', 'Señor cliente, su reclamo sera atendido, gracias por la espera Choristar me quedo en casa', '2021-04-06', 'on', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codcli`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD KEY `numpedido` (`numpedido`),
  ADD KEY `codpro` (`codpro`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`numpedido`),
  ADD KEY `codcli` (`codcli`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codpro`);

--
-- Indices de la tabla `registrolibro`
--
ALTER TABLE `registrolibro`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`id_rpta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codcli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `numpedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `registrolibro`
--
ALTER TABLE `registrolibro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  MODIFY `id_rpta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`numpedido`) REFERENCES `pedido` (`numpedido`),
  ADD CONSTRAINT `detallepedido_ibfk_2` FOREIGN KEY (`codpro`) REFERENCES `productos` (`codpro`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`codcli`) REFERENCES `clientes` (`codcli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
