CREATE TABLE IF NOT EXISTS `login1` (
  `formid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`formid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

CREATE TABLE IF NOT EXISTS `registeruser` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
`date` varchar(100) NOT NULL,
`email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
`telephone` int(100) NOT NULL,
`gender` varchar(100) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

