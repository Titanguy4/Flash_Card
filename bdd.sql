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
    'id' INTEGER UNSIGNED NOT NULL AUTO_INCREMENT ,
    'title' VARCHAR(255) NOT NULL,
    'img' LONGBLOB NOT NULL,
    'category' VARCHAR(255),

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
    CONSTRAINT fk_deck
        FOREIGN KEY (deck_id),
        REFERENCES deck (id),
        ON DELETE CASCADE,
        ON UPDATE RESTRICT,
    CONSTRAINT fk_card
        FOREIGN KEY (card_id),
        REFERENCES card (id)
        ON DELETE CASCADE, 
        ON UPDATE RESTRICT
)