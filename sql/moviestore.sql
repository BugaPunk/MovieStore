SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `cart` (
  `email` varchar(255) NOT NULL,
  `ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `movies` (
  `category_name` varchar(255) NOT NULL,
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `director` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `movies` (`category_name`, `ID`, `name`, `price`, `director`, `description`) VALUES
('action', 1, 'Los Vengadores: Endgame', 14.99, 'Anthony y Joe Russo', 'A la deriva en el espacio sin comida ni agua, Tony Stark envía un mensaje a Pepper Potts mientras su suministro de oxígeno comienza a agotarse. Mientras tanto, los Vengadores restantes —Thor, Black Widow, Capitán América y Bruce Banner— deben encontrar una manera de traer de vuelta a sus aliados derrotados para un enfrentamiento épico con Thanos, el malvado semidiós que diezmó el planeta y el universo.'),
('action', 2, 'La Liga de la Justicia de Zack Snyder: La Justicia es Gris', 30, 'Zack Snyder', 'Impulsado por su fe restaurada en la humanidad e inspirado por el acto desinteresado de Superman, Bruce Wayne recluta a la recién descubierta aliada Diana Prince para enfrentarse a una amenaza aún mayor. Juntos, Batman y Wonder Woman trabajan rápidamente para reunir un equipo que enfrente a este nuevo enemigo. A pesar de la formación de una liga de héroes sin precedentes —Batman, Wonder Woman, Aquaman, Cyborg y Flash— podría ser demasiado tarde para salvar al planeta de un ataque de proporciones catastróficas.'),
('comedy', 3, '¿Qué Pasó Ayer?', 3.99, 'Todd Phillips', 'Dos días antes de su boda, Doug (Justin Bartha) y tres amigos (Bradley Cooper, Ed Helms, Zach Galifianakis) viajan a Las Vegas para una salvaje y memorable despedida de soltero. Cuando los tres padrinos despiertan a la mañana siguiente, no recuerdan nada ni pueden encontrar a Doug. Con poco tiempo, los amigos intentan reconstruir sus pasos para encontrar a Doug y llegar a tiempo a la boda en Los Ángeles.'),
('comedy', 4, 'Guardianes de la Galaxia', 10.92, 'James Gunn', 'Un grupo de criminales intergalácticos debe unirse para detener a un guerrero fanático con planes de purgar el universo.'),
('horror', 5, 'El Juego del Miedo', 6.66, 'James Wan', 'Dos desconocidos despiertan en una habitación sin recordar cómo llegaron allí, y pronto descubren que son peones en un juego mortal perpetrado por un notorio asesino en serie.'),
('horror', 26, 'Alien: El Octavo Pasajero', 7.89, 'Ridley Scott', 'En el espacio profundo, la tripulación de la nave comercial Nostromo es despertada de sus cápsulas de criosueño para investigar una señal de socorro de una nave alienígena. El terror comienza cuando encuentran un nido de huevos dentro de la nave alienígena. Un organismo de uno de los huevos se adhiere a un tripulante, provocando un coma.'),
('thriller', 27, 'El Origen', 6.21, 'Christopher Nolan', 'Dom Cobb (Leonardo DiCaprio) es un ladrón que puede entrar en los sueños de las personas y robar secretos del subconsciente. Su habilidad lo hace valioso en el espionaje corporativo, pero le ha costado todo. Le ofrecen redención: plantar una idea en una mente. Si lo logra, será el crimen perfecto, pero un enemigo peligroso anticipa cada uno de sus movimientos.'),
('thriller', 28, 'Entre Navajas y Secretos', 8.24, 'Rian Johnson', 'La muerte del novelista Harlan Thrombey es misteriosa, pero el detective Benoit Blanc sabe que toda la familia Thrombey es sospechosa. Blanc debe desentrañar mentiras y pistas falsas para descubrir la verdad.'),
('romance', 29, 'Cincuenta Sombras de Grey', 7.12, 'Sam Taylor-Johnson', 'La vida de la estudiante de literatura Anastasia Steele cambia para siempre cuando conoce al apuesto y atormentado multimillonario Christian Grey.'),
('romance', 31, 'Lunes', 6.99, 'Argyris Papadimitropoulos', 'Cuando Mickey conoce a Chloe una noche calurosa en Atenas, la atracción es inmediata. Antes de darse cuenta, despiertan desnudos en la playa el sábado por la mañana.'),
('fantasy', 32, 'Harry Potter y la Orden del Fénix', 5.55, 'David Yates', 'En su quinto año en Hogwarts, Harry (Daniel Radcliffe) descubre que muchos en el mundo mágico desconocen su encuentro con Voldemort. Cornelius Fudge teme que Dumbledore tome su puesto y asigna a Dolores Umbridge como profesora. Ante su incompetencia y crueldad, Harry prepara a los estudiantes para defender la escuela de la creciente oscuridad.'),
('fantasy', 33, 'Las Crónicas de Narnia: El León, la Bruja y el Ropero', 6.54, 'Andrew Adamson', 'Durante los bombardeos de la Segunda Guerra Mundial, cuatro hermanos ingleses son enviados a una casa en el campo. Lucy descubre un ropero que la transporta al mundo mágico de Narnia. Pronto, junto a sus hermanos, se une al león Aslan para luchar contra la Bruja Blanca.'),
('sci-fi', 34, 'Star Wars: El Despertar de la Fuerza', 8.13, 'J.J. Abrams', 'Treinta años después de la caída del Imperio Galáctico, Han Solo (Harrison Ford) y sus aliados enfrentan una nueva amenaza de Kylo Ren y la Primera Orden.'),
('sci-fi', 35, 'Godzilla vs. Kong', 7.12, 'Adam Wingard', 'Kong y sus protectores emprenden un peligroso viaje para encontrar su verdadero hogar. Los acompaña Jia, una niña huérfana con un vínculo especial con Kong. Pronto se enfrentan a un furioso Godzilla, y su lucha es solo el comienzo de un misterio en el núcleo del planeta.'),
('animation', 37, 'Fantasía 2000', 7.21, 'Eric Goldberg, James Algar, Don Hahn, Hendel Butoy, Pixote Hunt, Gaetan Brizzi, Paul Brizzi, Francis Glebas', 'Fantasía/2000 continúa la idea original de Walt Disney con un nuevo programa musical interpretado por destacados artistas de Disney. Celebridades de diversas disciplinas presentan cada segmento, como Steve Martin, Bette Midler, y Quincy Jones.'),
('animation', 38, 'El Rey León', 6.12, 'Rob Minkoff, Roger Allers', 'Esta película animada de Disney sigue las aventuras de Simba, un joven león, heredero de Mufasa. Su tío Scar conspira para tomar el trono, llevando a Mufasa a la muerte. Simba escapa, pero regresa como adulto para reclamar su hogar con la ayuda de Timón y Pumbaa.'),
('animation', 39, 'Los Increíbles', 10.13, 'Brad Bird', 'Los superhéroes casados Sr. Increíble y Elastigirl llevan vidas normales tras la prohibición de actividades con poderes. Sr. Increíble anhela la acción y acepta una misión peligrosa que lo lleva a problemas, dejando que su familia lo rescate.'),
('comedy', 40, 'La Familia del Futuro', 7.12, 'Stephen John Anderson', 'El joven genio Lewis pierde la esperanza de recuperar su invento robado, hasta que Wilbur Robinson, un viajero del tiempo, lo lleva al futuro para conocer a su excéntrica familia y revelar un gran secreto.'),
('action', 41, 'Divergente', 1.11, 'Neil Burger', 'Tris Prior vive en un mundo donde la sociedad está dividida en cinco facciones. Al llegar a la adultez, cada persona debe elegir una facción para siempre. Tris elige Osadía, pero descubre que es Divergente y no encaja en una sola facción. Pronto se ve envuelta en una guerra que amenaza a todos los que ama.');

CREATE TABLE `user` (
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `zip` varchar(10) NOT NULL,
  `card_num` varchar(30) NOT NULL,
  `name_on_card` varchar(255) NOT NULL,
  `exp_date` varchar(30) NOT NULL,
  `sec_code` varchar(5) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `user` (`full_name`, `email`, `password`, `phone`, `address`, `state`, `city`, `zip`, `card_num`, `name_on_card`, `exp_date`, `sec_code`, `admin`) VALUES
('admin account', 'admin@admin.com', 'password', '3213212312', '21321d12', '3e123', 'rwarwa', '32123', '1232421232125312', 'rwafawfwa', '92/21', '321', 1);

ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);
  
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

ALTER TABLE `movies`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;