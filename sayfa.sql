CREATE TABLE IF NOT EXISTS `banner` (
  `Anasayfa` text,
  `Makaleler` text,
  `Sınav` text,
  `Anket/Form` text,
  `İletişim` text
);

INSERT INTO `banner` (`Anasayfa`, `Makaleler`, `Sınav`, `Anket/Form`, `İletişim`) 
VALUES ('Web Tasarım ve Programlama Nedir?', 'HTML, CSS, JAVASCRIPT, PHP', 'Sınav', 'Anket, Form', 'İletişim, Görüş ve Öneri');
ALTER TABLE `banner`;