-- Création de la table user

CREATE TABLE user 
(
    id INT NOT NULL AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    class VARCHAR(10) NOT NULL,
    status VARCHAR(255) NOT NULL,

    PRIMARY KEY (id)
)

CREATE TABLE deck
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT ,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(255),

    PRIMARY KEY (id)
)

CREATE TABLE card 
(
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    front VARCHAR(255) NOT NULL,
    back VARCHAR(255) NOT NULL,

    PRIMARY KEY (id)
)

CREATE TABLE deck_card
(
    deck_id INT UNSIGNED NOT NULL,
    card_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (deck_id, card_id)
)