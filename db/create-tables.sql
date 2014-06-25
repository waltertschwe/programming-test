use database programming_test;

CREATE TABLE IF NOT EXISTS colors (
  color_id int(11) NOT NULL AUTO_INCREMENT,
  color varchar(255) NOT NULL UNIQUE,
  PRIMARY KEY (color_id)
); 


CREATE TABLE IF NOT EXISTS votes (
  vote_id int(11) NOT NULL AUTO_INCREMENT,
  color_id int(11),
  city varchar(255),
  votes int(11) NOT NULL,
  PRIMARY KEY (vote_id),
  FOREIGN KEY (color_id) REFERENCES colors(color_id)
); 

