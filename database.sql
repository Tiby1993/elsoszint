CREATE TABLE users (
  id int(255) NOT NULL AUTO_INCREMENT,
  status TINYINT(1) DEFAULT 1,
  is_admin TINYINT(1) DEFAULT 0,
  username varchar(32) NOT NULL,
  password varchar(32) NOT NULL,
  email varchar(64) NOT NULL,
  street varchar(64) NOT NULL,
  city varchar(64) NOT NULL,
  full_name varchar(128) NOT NULL,
  session_id varchar(64) NOT NULL,
  registrated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE feed_post (
	id int(255) NOT NULL AUTO_INCREMENT,
	text_hu_HU blob NOT NULL,
	text_en_US blob NOT NULL,
	created_by int(255) NOT NULL REFERENCES users(id),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	modified_by  int(255) REFERENCES users(id),
	modified_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE feed_like (
	user_id INT(255) NOT NULL REFERENCES users(id),
	feed_post_id INT(255) NOT NULL REFERENCES feed_post(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE comment (
	id int(255) NOT NULL AUTO_INCREMENT,
	text_hu_HU blob,
	text_en_US blob,
	created_by int(255) NOT NULL REFERENCES users(id),
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE feed_comment (
	user_id INT(255) NOT NULL REFERENCES users(id),
	comment_id INT(255) NOT NULL REFERENCES comment(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;