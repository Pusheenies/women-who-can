-- Database schema for the Blog project
-- Run the entire code to create the database from scratch (note: the order is important!)

CREATE DATABASE Pusheen_Blog;

-- If in command line, use the command below
USE Pusheen_Blog;

CREATE TABLE security (
    security_group VARCHAR(20) NOT NULL,
    PRIMARY KEY(security_group)
);

CREATE TABLE members (
    member_id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(30) NOT NULL UNIQUE,
    password VARCHAR(50) NOT NULL,
    security_group VARCHAR(20) NOT NULL,
    registration_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (member_id),
    FOREIGN KEY (security_group) REFERENCES security(security_group)
);

CREATE TABLE profiles (
    profile_id INT NOT NULL AUTO_INCREMENT,
    member_id INT NOT NULL,
    surname VARCHAR(30) NOT NULL,
    forename VARCHAR(30) NOT NULL,
    profile_image VARCHAR(120),
    profile_description TINYTEXT,
    email VARCHAR(60) NOT NULL,
    PRIMARY KEY (profile_id),
    FOREIGN KEY (member_id) REFERENCES members(member_id)
);

CREATE TABLE follows (
    member_id INT NOT NULL,
    follower_id INT NOT NULL,
    PRIMARY KEY (member_id, follower_id),
    FOREIGN KEY (member_id) REFERENCES members(member_id),
    FOREIGN KEY (follower_id) REFERENCES members(member_id)
);

CREATE TABLE categories (
    category_id INT NOT NULL AUTO_INCREMENT,
    category_description TINYTEXT,
    PRIMARY KEY (category_id)
);

CREATE TABLE posts (
    post_id INT NOT NULL AUTO_INCREMENT,
    post_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    category_id INT NOT NULL,
    member_id INT NOT NULL,
    title TINYTEXT,
    post_image VARCHAR(120),
    post_content LONGTEXT,
    PRIMARY KEY (post_id),
    FOREIGN KEY (category_id) REFERENCES categories(category_id),
    FOREIGN KEY (member_id) REFERENCES members(member_id)
);

CREATE TABLE hashtags (
    hashtag_id VARCHAR(30) NOT NULL,
    PRIMARY KEY (hashtag_id)
);

CREATE TABLE posts_hashtags (
    post_id INT NOT NULL,
    hashtag_id VARCHAR(30) NOT NULL,
    PRIMARY KEY (post_id, hashtag_id),
    FOREIGN KEY (post_id) REFERENCES posts(post_id),
    FOREIGN KEY (hashtag_id) REFERENCES hashtags(hashtag_id)
);

CREATE TABLE favourites (
    post_id INT NOT NULL,
    member_id INT NOT NULL,
    PRIMARY KEY (post_id, member_id),
    FOREIGN KEY (post_id) REFERENCES posts(post_id),
    FOREIGN KEY (member_id) REFERENCES members(member_id)
);

CREATE TABLE comments (
    comment_id INT NOT NULL AUTO_INCREMENT,
    post_id INT NOT NULL,
    member_id INT NOT NULL,
    comment_content LONGTEXT,
    comment_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    approved BIT(1) NOT NULL DEFAULT 1,
    PRIMARY KEY (comment_id),
    FOREIGN KEY (post_id) REFERENCES posts(post_id),
    FOREIGN KEY (member_id) REFERENCES members(member_id)
);

CREATE TABLE IF NOT EXISTS password_reset (
    ID INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    selector CHAR(16),
    token CHAR(64),
    expires BIGINT(20)
);

-- Trigger to hash passwords

CREATE TRIGGER hash_password BEFORE INSERT ON members
FOR EACH ROW SET NEW.password = PASSWORD(NEW.password);

-- Stored procedure to add members

DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_member`(IN `USRNAME` VARCHAR(30), IN `PASS` VARCHAR(50), IN `SECGROUP` VARCHAR(20), IN `SNAME` VARCHAR(30), IN `FNAME` VARCHAR(30), IN `EMAIL` VARCHAR(60), IN `PDESCRIPT` TINYTEXT)
BEGIN
insert into members (username, password, security_group)
values (USRNAME, PASS, SECGROUP);
insert into profiles (member_id, surname, forename,  email, profile_description) 
values 
((select member_id from members where username=USRNAME order by member_id 
DESC limit 1),
SNAME, FNAME,  EMAIL, PDESCRIPT);
END$$
DELIMITER ;

