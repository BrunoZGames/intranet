-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2023 a las 19:41:15
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `axiom`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cli_id` varchar(15) NOT NULL,
  `Emp_name` varchar(30) NOT NULL,
  `F_Name` varchar(20) NOT NULL,
  `L_Name` varchar(20) NOT NULL,
  `B_Date` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `Phone_N` int(11) NOT NULL,
  `Country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cli_id`, `Emp_name`, `F_Name`, `L_Name`, `B_Date`, `email`, `Phone_N`, `Country`) VALUES
('', '', 'BRUNO', '', '0000-00-00', '', 0, ''),
('78351248D', 'AXIOM', 'Pau', 'Bravo', '0000-00-00', 'paubraaub@campus.monlau.com', 232, 'España'),
('Y7119743S', 'AXIOM', 'Bruno', 'Duarte', '1999-01-30', 'brunoduanas@campus.monlau.com', 658592139, 'Portugal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `Ped_ID` int(11) NOT NULL,
  `cli_id` varchar(15) NOT NULL,
  `Prod_ID` int(11) NOT NULL,
  `Qtd` int(11) NOT NULL,
  `rdy` tinyint(1) NOT NULL,
  `delive` tinyint(1) NOT NULL,
  `Delive_addr` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`Ped_ID`, `cli_id`, `Prod_ID`, `Qtd`, `rdy`, `delive`, `Delive_addr`) VALUES
(1, 'Y7119743S', 1, 1, 1, 0, 'C/ Monlau');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

CREATE TABLE `stock` (
  `Prod_ID` int(11) NOT NULL,
  `Prod_Name` varchar(30) NOT NULL,
  `Stock_num` int(11) NOT NULL,
  `price` double DEFAULT NULL,
  `out_stock` tinyint(1) NOT NULL,
  `out_prod` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`Prod_ID`, `Prod_Name`, `Stock_num`, `price`, `out_stock`, `out_prod`) VALUES
(1, 'AX-114', 15, 89.9, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `usuario` varchar(11) NOT NULL,
  `psw` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`usuario`, `psw`) VALUES
('user1', 'e3bd2ce56caab57b84390ff7698d549c8c412b4d70581df8af49613f04764639');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cli_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `Phone_N` (`Phone_N`),
  ADD KEY `cli_id` (`cli_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`Ped_ID`),
  ADD KEY `Ped_ID` (`Ped_ID`),
  ADD KEY `cli_id` (`cli_id`),
  ADD KEY `Prod_ID` (`Prod_ID`);

--
-- Indices de la tabla `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Prod_ID`),
  ADD UNIQUE KEY `Prod_Name` (`Prod_Name`),
  ADD KEY `Prod_ID` (`Prod_ID`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`cli_id`) REFERENCES `clientes` (`cli_id`),
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`Prod_ID`) REFERENCES `stock` (`Prod_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
