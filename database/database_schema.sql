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
    hashtag_id INT NOT NULL AUTO_INCREMENT,
    hashtag_name VARCHAR(50),
    PRIMARY KEY (hashtag_id)
);

CREATE TABLE posts_hashtags (
    post_id INT NOT NULL,
    hashtag_id INT NOT NULL,
    FOREIGN KEY (post_id) REFERENCES posts(post_id),
    FOREIGN KEY (hashtag_id) REFERENCES hashtags(hashtag_id)
);

CREATE TABLE favourites (
    post_id INT NOT NULL,
    member_id INT NOT NULL,
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