CREATE DATABASE IF NOT EXISTS bookstore;
USE bookstore;
CREATE TABLE IF NOT EXISTS `product` (
`idproduct` int(10) NOT NULL AUTO_INCREMENT,
`name` varchar(250) NOT NULL,
`description` varchar(250) NOT NULL,
`price` double(9,2) NOT NULL,
`image` varchar(250) NOT NULL,
`type` varchar(250) NOT NULL,
`code` varchar(10) NOT NULL,
`stock` int(10) NOT NULL,

PRIMARY KEY (`idproduct`),
UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=LATIN1;



INSERT INTO `product` (`idproduct`, `name`, `code`, `image`, `price`, `description`, `type`, `stock`) VALUES
(1, 'Book 1', '3Dcb311', '/bookstore/images/productimages/book5.png', 22, 'This is a book.', 'book', '10'),
(2, 'Book 2', '3Dcb322', '/bookstore/images/productimages/book5.png', 32, 'This is a book.', 'book', '10'),
(3, 'Book 3', '3Dcb333', '/bookstore/images/productimages/book5.png', 12, 'This is a book.', 'book', '10'),
(4, 'Book 4', '3Dcb344', '/bookstore/images/productimages/book5.png', 8, 'This is a book.', 'book', '10'),
(5, 'Book 5', '3Dcb355', '/bookstore/images/productimages/book5.png', 15, 'This is a book.', 'book', '10'),
(6, 'Book 6', '3Dcb366', '/bookstore/images/productimages/book5.png', 21, 'This is a book.', 'book', '10'),
(7, 'Book 7', '3Dcb377', '/bookstore/images/productimages/book5.png', 27, 'This is a book.', 'book', '10'),
(8, 'Book 8', '3Dcb388', '/bookstore/images/productimages/book5.png', 22, 'This is a book.','book', '10'),
(9, 'Audiobook 1', '3Dcb301', '/bookstore/images/productimages/audiobook.png', 22, 'This is an audiobook.', 'audiobook', '10'),
(10, 'Audiobook 2', '3Dcb302', '/bookstore/images/productimages/audiobook.png', 32, 'This is an audiobook.', 'audiobook', '10'),
(11, 'Audiobook 3', '3Dcb303', '/bookstore/images/productimages/audiobook.png', 12, 'This is an audiobook.', 'audiobook', '10'),
(12, 'Audiobook 4', '3Dcb304', '/bookstore/images/productimages/audiobook.png', 8, 'This is an audiobook.', 'audiobook', '10'),
(13, 'Audiobook 5', '3Dcb305', '/bookstore/images/productimages/audiobook.png', 15, 'This is an audiobook.', 'audiobook', '10'),
(14, 'Audiobook 6', '3Dcb306', '/bookstore/images/productimages/audiobook.png', 21, 'This is an audiobook.', 'audiobook', '10'),
(15, 'Audiobook 7', '3Dcb307', '/bookstore/images/productimages/audiobook.png', 27, 'This is an audiobook.', 'audiobook', '10'),
(16, 'Audiobook 8', '3Dcb308', '/bookstore/images/productimages/audiobook.png', 22, 'This is an audiobook.', 'audiobook', '10'),
(17, 'E-book 1', '3Dcb115', '/bookstore/images/productimages/ebook.png', 22, 'This is an e-book.', 'ebook', '10'),
(18, 'E-book 2', '3Dcb216', '/bookstore/images/productimages/ebook.png', 12, 'This is an e-book.', 'ebook', '10'),
(19, 'E-book 3', '3Dcb914', '/bookstore/images/productimages/ebook.png', 23, 'This is an e-book.', 'ebook', '10'),
(20, 'E-book 4', '3Dcb418', '/bookstore/images/productimages/ebook.png', 26, 'This is an e-book.', 'ebook', '10'),
(21, 'E-book 5', '3Dcb512', '/bookstore/images/productimages/ebook.png', 16, 'This is an e-book.', 'ebook', '10'),
(22, 'E-book 6', '3Dcb618', '/bookstore/images/productimages/ebook.png', 25, 'This is an e-book.', 'ebook', '10'),
(23, 'E-book 7', '3Dcb719', '/bookstore/images/productimages/ebook.png', 26, 'This is an e-book.', 'ebook', '10'),
(24, 'E-book 8', '3Dcb811', '/bookstore/images/productimages/ebook.png', 22, 'This is an e-book.', 'ebook', '10');



ALTER TABLE `product`
MODIFY `idproduct` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 25;

COMMIT;