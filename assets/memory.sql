/* Story 1 */
CREATE DATABASE power_of_memorys CHARACTER SET utf8;
USE power_of_memorys;
CREATE TABLE players(
    id_player INT NOT NULL AUTO_INCREMENT,
    email VARCHAR(40) NOT NULL,
    player_password VARCHAR(256) NOT NULL,
    pseudo VARCHAR(20) NOT NULL,
    date_sign_up DATETIME NOT NULL,
    date_last_login DATETIME NOT NULL,
    PRIMARY KEY(id_player),
    UNIQUE KEY (email),
    UNIQUE KEY (pseudo)
    );

    
CREATE TABLE games(
    id_game INT NOT NULL AUTO_INCREMENT,
    game_name VARCHAR(40) NOT NULL,
    PRIMARY KEY(id_game)
    );



CREATE TABLE messages(
    id_message INT NOT NULL AUTO_INCREMENT,
    id_game INT NOT NULL,
    id_sender INT NOT NULL,
    comments TEXT NOT NULL,
    date_comment DATETIME NOT NULL,
    PRIMARY KEY(id_message),
    CONSTRAINT fk_messages_games FOREIGN KEY (id_game) REFERENCES games(id_game) ON DELETE CASCADE,
    CONSTRAINT fk_messages_players FOREIGN KEY (id_sender) REFERENCES players(id_player) ON DELETE CASCADE
    );


CREATE TABLE scores(
    id_score INT NOT NULL AUTO_INCREMENT,
    id_player INT NOT NULL,
    id_game INT NOT NULL,
    game_strength INT NOT NULL,
    game_score INT NOT NULL,
    game_date DATETIME NOT NULL,
    PRIMARY KEY(id_score),
    CONSTRAINT fk_scores_players FOREIGN KEY (id_player) REFERENCES players(id_player) ON DELETE CASCADE,
    CONSTRAINT fk_scores_games FOREIGN KEY (id_game) REFERENCES games(id_game) ON DELETE CASCADE
    );



/* Story 2*/
INSERT INTO players(email, player_password, pseudo, date_sign_up, date_last_login) 
VALUES  ('jonathan42@gmail.com', '691388b7f8a1cb32890e337055d8893444fd237cfe85d111430d093fd2ee4f91', 'jonathan', NOW(),NOW()),
        ('mathieux45@gmail.com', '854f95641493b591d4b51d981e46f1ad9269bcd8bda39f45c7e86767173a4d22', 'mathieu', NOW(),NOW()),
        ('jerome.dubois@orange.fr', 'ebbcab908c6338fcc4c8eb0b3ca3900bb0129f0259b2faaf5987221df27f4795', 'jerome', NOW(),NOW()),
        ('mathis.dubleuil@sfr.fr', '7b5c862d4a2e5f70fc83fb6b6603cf8488872a414f6a1b1776ccd32bcc31e45c', 'mathisgaming', NOW(),NOW()),
        ('antoine.dubleuil@sfr.fr', 'f270398c8432ab9540cd0832d950973f170061284aa38012c2fbf80f7fb28370', 'antoinegaming', NOW(),NOW());

    INSERT INTO scores(id_player, id_game, game_strength, game_score,  game_date) 
    VALUES
    (1, 1, 1, 1580, '2023-01-15 10:30'),
    (1, 1, 1, 1345, '2023-01-25 14:45'),
    (1, 1, 1, 1690, '2023-02-05 17:20'),
    (1, 1, 1, 1650, '2023-02-15 08:55'),
    (1, 1, 1, 1845, '2023-03-07 19:30'),
    (2, 1, 1, 1580, '2023-03-15 12:10'),
    (2, 1, 1, 1345, '2023-04-02 14:20'),
    (2, 1, 1, 1690, '2023-04-12 18:40'),
    (2, 1, 1, 1650, '2023-05-05 20:15'),
    (2, 1, 1, 1845, '2023-05-15 10:50'),
    (3, 1, 1, 1580, '2023-06-08 11:35'),
    (3, 1, 1, 1345, '2023-06-15 15:30'),
    (3, 1, 1, 1690, '2023-07-19 16:25'),
    (3, 1, 1, 1650, '2023-07-25 09:15'),
    (3, 1, 1, 1845, '2023-08-01 22:30'),
    (4, 1, 1, 1580, '2023-08-15 10:05'),
    (4, 1, 1, 1345, '2023-09-10 13:50'),
    (4, 1, 1, 1690, '2023-09-15 17:40'),
    (4, 1, 1, 1650, '2023-10-20 20:20'),
    (4, 1, 1, 1845, '2023-10-25 18:30'),
    (5, 1, 1, 1580, '2023-11-11 19:55'),
    (5, 1, 1, 1345, '2023-11-15 08:10'),
    (5, 1, 1, 1690, '2023-12-04 21:25'),
    (5, 1, 1, 1650, '2023-12-15 12:45'),
    (1, 1, 1, 1580, '2023-01-10 08:45'),
    (1, 1, 1, 1345, '2023-01-22 16:30'),
    (1, 1, 1, 1690, '2023-02-08 11:20'),
    (1, 1, 1, 1650, '2023-02-18 09:15'),
    (1, 1, 1, 1845, '2023-03-04 15:50'),
    (2, 1, 1, 1580, '2023-03-20 12:25'),
    (2, 1, 1, 1345, '2023-04-01 14:10'),
    (2, 1, 1, 1690, '2023-04-16 19:30'),
    (2, 1, 1, 1650, '2023-05-06 17:05'),
    (2, 1, 1, 1845, '2023-05-15 08:55'),
    (3, 1, 1, 1580, '2023-06-02 20:30'),
    (3, 1, 1, 1345, '2023-06-15 10:40'),
    (3, 1, 1, 1690, '2023-07-10 15:15'),
    (3, 1, 1, 1650, '2023-07-22 12:30'),
    (3, 1, 1, 1845, '2023-08-03 09:45'),
    (4, 1, 1, 1580, '2023-08-17 14:55'),
    (4, 1, 1, 1345, '2023-09-01 17:20'),
    (4, 1, 1, 1690, '2023-09-12 13:05'),
    (4, 1, 1, 1650, '2023-10-05 16:40'),
    (4, 1, 1, 1845, '2023-10-20 11:10'),
    (1, 1, 1, 1580, '2023-08-22 14:15'),
    (1, 1, 1, 1345, '2023-09-10 16:30'),
    (1, 1, 1, 1690, '2023-09-26 19:20'),
    (2, 1, 1, 1650, '2023-10-12 12:40'),
    (2, 1, 1, 1845, '2023-10-28 08:55'),
    (2, 1, 1, 1580, '2023-11-10 11:25'),
    (3, 1, 1, 1345, '2023-11-25 10:10'),
    (3, 1, 1, 1690, '2023-12-08 14:45'),
    (3, 1, 1, 1650, '2023-12-19 16:30'),
    (4, 1, 1, 1845, '2023-01-04 09:15'),
    (4, 1, 1, 1580, '2023-01-22 19:30'),
    (4, 1, 1, 1345, '2023-02-05 13:20'),
    (4, 1, 1, 1690, '2023-02-18 17:50'),
    (1, 1, 1, 1650, '2023-03-03 12:45'),
    (1, 1, 1, 1845, '2023-03-20 15:55'),
    (1, 1, 1, 1580, '2023-04-10 10:20'),
    (2, 1, 1, 1345, '2023-04-25 11:10'),
    (2, 1, 1, 1690, '2023-05-07 09:30'),
    (2, 1, 1, 1650, '2023-05-19 08:50'),
    (3, 1, 1, 1845, '2023-06-01 10:25'),
    (1, 1, 1, 1580, '2023-06-12 14:15'),
    (1, 1, 1, 1345, '2023-06-28 16:30'),
    (1, 1, 1, 1690, '2023-07-15 19:20'),
    (1, 1, 1, 1650, '2023-07-28 12:40'),
    (1, 1, 1, 1845, '2023-08-05 08:55'),
    (1, 1, 1, 1580, '2023-09-10 11:25'),
    (1, 1, 1, 1345, '2023-09-25 10:10'),
    (1, 1, 1, 1690, '2023-10-08 14:45'),
    (1, 1, 1, 1650, '2023-10-19 16:30'),
    (1, 1, 1, 1845, '2023-11-02 09:15'),
    (1, 1, 1, 1580, '2023-11-20 19:30'),
    (1, 1, 1, 1345, '2023-12-05 13:20'),
    (1, 1, 1, 1690, '2023-12-18 17:50'),
    (1, 1, 1, 1650, '2023-01-05 12:45'),
    (1, 1, 1, 1845, '2023-01-22 15:55'),
    (1, 1, 1, 1580, '2023-02-10 10:20'),
    (1, 1, 1, 1345, '2023-02-25 11:10'),
    (1, 1, 1, 1690, '2023-03-07 09:30'),
    (1, 1, 1, 1650, '2023-03-19 08:50'),
    (1, 1, 1, 1845, '2023-04-02 10:25'),
    (1, 1, 1, 1580, '2023-04-18 11:55'),
    (1, 1, 1, 1345, '2023-05-03 09:10'),
    (1, 1, 1, 1690, '2023-05-15 13:40'),
    (1, 1, 1, 1650, '2023-06-02 14:15'),
    (1, 1, 1, 1845, '2023-06-28 16:30'),
    (1, 1, 1, 1580, '2023-07-15 19:20'),
    (1, 1, 1, 1345, '2023-07-28 12:40'),
    (1, 1, 1, 1690, '2023-08-05 08:55'),
    (1, 1, 1, 1650, '2023-08-18 11:25');



INSERT INTO messages(id_game, id_sender, comment, date_comment) 
VALUES  (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW()),
        (1, 1,'cc', NOW());


/* Story 3 */
INSERT INTO players (email,player_password,pseudo,date_sign_up,date_last_login)
VALUES ('jon@gmail.com','691388b7f8a1cb32890e337055d8893444fd237cfe85d111430d093fd2ee4f91','jon',NOW(),NOW());


/* Story 4 */
UPDATE players
SET player_password = '691388b7f8a1cb32890e337055d8893444fd237cfe85d111430d093fd2ee0000'
WHERE id_player = 1;

UPDATE players
SET email = 'jon2211@gmail.com'
WHERE id_player = 1;


/* Story 5 */ 
SELECT * 
FROM players 
WHERE email = 'jon2211@gmail.com' 
AND player_password = '691388b7f8a1cb32890e337055d8893444fd237cfe85d111430d093fd2ee0000';


/* Story 6 */ 
INSERT INTO games(game_name) 
VALUES('The Power Of Memory');


/* Story 7 */
SELECT S.*, P.* 
FROM scores AS S
LEFT JOIN players AS P ON S.id_player = P.id_player

/* Story 8 */ 
SELECT g.game_name, p.pseudo, s.game_strength, s.game_score
FROM games AS g
LEFT JOIN scores AS s ON g.id_game = s.id_game
LEFT JOIN players AS p ON s.id_player = p.id_player
WHERE g.game_name = 'The Power Of Memory'
ORDER BY g.game_name, s.game_strength, s.game_score ASC;
/*      p.pseudo = "jonathan" 
        g.game_strength = "2" */

/* Story 9 */
INSERT INTO scores(id_player, id_game, game_strength, game_score, game_date)
VALUES(1,1,54,1580, NOW()) 
ON DUPLICATE KEY UPDATE
game_strength = 3,
game_score = 108,
game_date = NOW();


/* story 10 */
INSERT INTO messages ( id_game , id_sender, comments ,date_comment)
VALUES (1,2,'Bonjour !',NOW());


/* Story 11 */
SELECT m.comments, p.pseudo, m.date_comment,
CASE WHEN m.id_sender = 2
THEN TRUE
ELSE FALSE
END AS isSender
FROM messages AS m
LEFT JOIN players AS p ON m.id_sender = p.id_player
WHERE m.date_comment >= NOW() - INTERVAL 24 HOUR
ORDER BY m.date_comment DESC;

/* Story 12 */
SELECT * , p.pseudo
FROM scores as s
LEFT JOIN players AS p
	ON p.id_player = s.id_player
WHERE pseudo LIKE '%ath%';

/* Story 13 */
CREATE TABLE private_messages(
    id_private_message INT NOT NULL AUTO_INCREMENT,
    id_first_user INT NOT NULL,
    id_sec_user INT NOT NULL,
    comments TEXT NOT NULL,
    is_read BOOLEAN NOT NULL,
    date_send_comment DATETIME NOT NULL,
    date_read_comment DATETIME,
    PRIMARY KEY (id_private_message),
    CONSTRAINT fk_private_players FOREIGN KEY (id_first_user) REFERENCES players(id_player) ON DELETE CASCADE,
    CONSTRAINT fk_private_players2 FOREIGN KEY (id_sec_user) REFERENCES players(id_player) ON DELETE CASCADE
);

/* STORY 14 */
INSERT INTO private_messages(id_first_user, id_sec_user, comments, is_read, date_send_comment, date_read_comment) 
VALUES(1,2,'coucou ça va', false, '2023-10-24 10:34:09', NULL),
(1,2,'ça va et toi ?', false, '2023-10-24 10:36:29', NULL),
(1,2,'bien, tfq ?', false, '2023-10-24 10:37:12', NULL),
(2,1,'Je joue à Power Of Memory', false, '2023-10-24 10:39:21', NULL),
(1,2,'Oh moi aussi !', false, '2023-10-24 10:40:21', NULL),
(1,3,'Cool tu me rejoins ?', false, '2023-10-24 10:40:21', NULL),
(1,3,'salut', false, '2023-10-24 11:05:42', NULL),
(4,1,'aurevoir', false, '2023-10-24 11:10:11', NULL),
(1,4,'Salut tu vas bien', false, '2023-10-24 11:15:22', NULL),
(2,5,'Tranquille tu vien jouer a POM', false, '2023-10-24 11:20:15', NULL),
(4,1,'Flemme', false, '2023-10-24 11:21:15', NULL),
(4,2,'Tu viens lancer une game ?', false, '2023-10-24 11:24:15', NULL),
(2,4,'non pas avec toi', false,'2023-10-24 11:27:15', NULL),
(4,2,'pas cool ça', false, '2023-10-24 11:28:19', NULL),
(1,3,'Vien POM je te detruis', false, '2023-10-24 11:41:13', NULL),
(1,3,'Non', false, '2023-10-24 11:43:13', NULL),
(3,1,'comment tu vas', false, '2023-10-24 11:44:13', NULL),
(2,1,'tranquillement', false, '2023-10-24 11:45:13', NULL),
(1,2,'cool alors', false, '2023-10-24 11:46:08', NULL),
(4,1,'tfq ?', false,'2023-10-24 11:58:02', NULL),
(2,1,'salut, ça gaze ?', false,'2023-11-20 11:58:02', NULL);
(1,3,'trkl gros ?', false,'2023-02-14 07:32:02', NULL);
(1,2,'wsh la famille', false,'2023-01-02 11:58:02', NULL);
(2,3,'salut mon lapin', false,'2023-01-25 12:22:02', NULL);
(4,1,'coucou ma caille', false,'2023-01-31 11:58:02', NULL);
(2,1,'tfq ?', false,'2023-02-28 11:58:02', NULL);
(4,1,'azy a toi de jouer', false,'2023-02-12 11:58:02', NULL);
(2,4,'comment ça va ?', false,'2023-10-24 11:58:02', NULL);
(3,1,'Salut !', false, '2023-11-25 10:34:09', NULL),
(4,2,'Ça va ?', false, '2023-11-25 10:36:29', NULL),
(2,1,'Bien, et toi ?', false, '2023-11-25 10:37:12', NULL),
(1,3,'Salut !', false, '2023-11-26 10:39:21', NULL),
(2,2,'Hello !', false, '2023-11-26 10:40:21', NULL),
(4,1,'Salut, ça gaze ?', false, '2023-11-26 10:40:21', NULL),
(3,2,'Tranquille ?', false, '2023-11-26 11:05:42', NULL),
(1,4,'Au revoir !', false, '2023-11-27 11:10:11', NULL),
(2,3,'Salut la famille !', false, '2023-11-27 11:15:22', NULL),
(4,4,'Salut, ça va bien', false, '2023-11-27 11:20:15', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-11-27 11:21:15', NULL),
(1,2,'Pas aujourd hui', false, '2023-11-28 11:24:15', NULL),
(2,1,'Non, merci.', false,'2023-11-28 11:27:15', NULL),
(4,2,'Dommage...', false, '2023-11-28 11:28:19', NULL),
(1,3,'Une partie de POM ?', false, '2023-11-29 11:41:13', NULL),
(2,4,'Je ne peux pas', false, '2023-11-29 11:43:13', NULL),
(3,2,'Ça va ?', false, '2023-11-30 11:44:13', NULL),
(1,1,'Ça roule !', false, '2023-11-30 11:45:13', NULL),
(2,3,'Salut !', false, '2023-12-01 11:46:08', NULL);
(1,2,'Salut !', false, '2023-03-01 10:34:09', NULL),
(2,3,'Ça va bien ?', false, '2023-03-02 10:36:29', NULL),
(4,1,'Salut !', false, '2023-03-03 10:37:12', NULL),
(3,4,'Hello !', false, '2023-03-04 10:39:21', NULL),
(1,3,'Salut la famille !', false, '2023-03-05 10:40:21', NULL),
(2,2,'Tranquille ?', false, '2023-03-06 10:40:21', NULL),
(4,2,'Au revoir !', false, '2023-03-07 11:05:42', NULL),
(1,4,'Salut, ça va bien', false, '2023-03-08 11:10:11', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-03-09 11:15:22', NULL),
(4,4,'Pas aujourd hui', false, '2023-03-10 11:20:15', NULL)
(1,2,'Salut !', false, '2023-04-01 10:34:09', NULL),
(2,3,'Ça va bien ?', false, '2023-04-02 10:36:29', NULL),
(4,1,'Salut !', false, '2023-04-03 10:37:12', NULL),
(3,4,'Hello !', false, '2023-04-04 10:39:21', NULL),
(1,3,'Salut la famille !', false, '2023-04-05 10:40:21', NULL),
(2,2,'Tranquille ?', false, '2023-04-06 10:40:21', NULL),
(4,2,'Au revoir !', false, '2023-04-07 11:05:42', NULL),
(1,4,'Salut, ça va bien', false, '2023-04-08 11:10:11', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-04-09 11:15:22', NULL),
(4,4,'Pas aujourd hui', false, '2023-04-10 11:20:15', NULL),
(1,2,'Salut !', false, '2023-05-01 10:34:09', NULL),
(2,3,'Ça va bien ?', false, '2023-05-02 10:36:29', NULL),
(4,1,'Salut !', false, '2023-05-03 10:37:12', NULL),
(3,4,'Hello !', false, '2023-05-04 10:39:21', NULL),
(1,3,'Salut la famille !', false, '2023-05-05 10:40:21', NULL),
(2,2,'Tranquille ?', false, '2023-05-06 10:40:21', NULL),
(4,2,'Au revoir !', false, '2023-05-07 11:05:42', NULL),
(1,4,'Salut, ça va bien', false, '2023-05-08 11:10:11', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-05-09 11:15:22', NULL),
(4,4,'Pas aujourd hui', false, '2023-05-10 11:20:15', NULL),
(1,2,'Salut !', false, '2023-06-01 10:34:09', NULL),
(2,3,'Ça va bien ?', false, '2023-06-02 10:36:29', NULL),
(4,1,'Salut !', false, '2023-06-03 10:37:12', NULL),
(3,4,'Hello !', false, '2023-06-04 10:39:21', NULL),
(1,3,'Salut la famille !', false, '2023-06-05 10:40:21', NULL),
(2,2,'Tranquille ?', false, '2023-06-06 10:40:21', NULL),
(4,2,'Au revoir !', false, '2023-06-07 11:05:42', NULL),
(1,4,'Salut, ça va bien', false, '2023-06-08 11:10:11', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-06-09 11:15:22', NULL),
(4,4,'Pas aujourd hui', false, '2023-06-10 11:20:15', NULL),
(1,2,'Salut !', false, '2023-07-01 10:34:09', NULL),
(2,3,'Ça va bien ?', false, '2023-07-02 10:36:29', NULL),
(4,1,'Salut !', false, '2023-07-03 10:37:12', NULL),
(3,4,'Hello !', false, '2023-07-04 10:39:21', NULL),
(1,3,'Salut la famille !', false, '2023-07-05 10:40:21', NULL),
(2,2,'Tranquille ?', false, '2023-07-06 10:40:21', NULL),
(4,2,'Au revoir !', false, '2023-07-07 11:05:42', NULL),
(1,4,'Salut, ça va bien', false, '2023-07-08 11:10:11', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-07-09 11:15:22', NULL),
(4,4,'Pas aujourd hui', false, '2023-07-10 11:20:15', NULL),
(1,2,'Salut !', false, '2023-08-01 10:34:09', NULL),
(2,3,'Ça va bien ?', false, '2023-08-02 10:36:29', NULL),
(4,1,'Salut !', false, '2023-08-03 10:37:12', NULL),
(3,4,'Hello !', false, '2023-08-04 10:39:21', NULL),
(1,3,'Salut la famille !', false, '2023-08-05 10:40:21', NULL),
(2,2,'Tranquille ?', false, '2023-08-06 10:40:21', NULL),
(4,2,'Au revoir !', false, '2023-08-07 11:05:42', NULL),
(1,4,'Salut, ça va bien', false, '2023-08-08 11:10:11', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-08-09 11:15:22', NULL),
(4,4,'Pas aujourd hui', false, '2023-08-10 11:20:15', NULL),
(1,2,'Salut !', false, '2023-09-01 10:34:09', NULL),
(2,3,'Ça va bien ?', false, '2023-09-02 10:36:29', NULL),
(4,1,'Salut !', false, '2023-09-03 10:37:12', NULL),
(3,4,'Hello !', false, '2023-09-04 10:39:21', NULL),
(1,3,'Salut la famille !', false, '2023-09-05 10:40:21', NULL),
(2,2,'Tranquille ?', false, '2023-09-06 10:40:21', NULL),
(4,2,'Au revoir !', false, '2023-09-07 11:05:42', NULL),
(1,4,'Salut, ça va bien', false, '2023-09-08 11:10:11', NULL),
(3,1,'Salut ! Tu veux jouer à POM ?', false, '2023-09-09 11:15:22', NULL),
(4,4,'Pas aujourd hui', false, '2023-09-10 11:20:15', NULL);











DELETE FROM private_messages 
WHERE id_private_message=12;

UPDATE private_messages 
SET comments = 'message modifie' 
WHERE id_private_message=14; 


/* Story 15 */
SELECT p1.pseudo, p2.pseudo, date_send_comment, date_read_comment, is_read,
FROM private_messages AS pm
INNER JOIN players AS p1 ON pm.id_first_user = p1.id_player
INNER JOIN players AS p2 ON pm.id_sec_user = p2.id_player
WHERE (id_first_user = 1 OR id_sec_user = 1) AND date_send_comment = (
    SELECT MAX(date_send_comment)
    FROM private_messages AS pm2
	WHERE (pm2.id_first_user = pm.id_first_user AND pm2.id_sec_user = pm.id_sec_user) 
    OR (pm2.id_first_user = pm.id_sec_user AND pm2.id_sec_user = pm.id_first_user)
);

/* Story 16 */
SELECT p1.pseudo, p2.pseudo, date_send_comment, date_read_comment, is_read, 
(SELECT COUNT(s.id_player)  FROM scores AS s WHERE s.id_player = pm.id_first_user) AS nbr_parties_jouées_par_joueur1,
(SELECT COUNT(s.id_player)  FROM scores AS s WHERE s.id_player = pm.id_sec_user) AS nbr_parties_jouées_par_joueur2,
(SELECT DISTINCT g.game_name 
 FROM games AS g 
    INNER JOIN scores AS s ON s.id_game = g.id_game 
    WHERE g.id_game = 
        (SELECT id_game
        FROM scores
        WHERE id_player = pm.id_first_user
        GROUP BY id_game
        ORDER BY COUNT(*) DESC
        LIMIT 1)) AS jeu_plus_joué_first_user,
(SELECT DISTINCT g.game_name 
 FROM games AS g 
    INNER JOIN scores AS s ON s.id_game = g.id_game 
    WHERE g.id_game = 
        (SELECT id_game
        FROM scores
        WHERE id_player = pm.id_first_user
        GROUP BY id_game
        ORDER BY COUNT(*) DESC
        LIMIT 1)) AS jeu_plus_joué_sec_user        
    

FROM private_messages AS pm
INNER JOIN players AS p1 ON pm.id_first_user = p1.id_player
INNER JOIN players AS p2 ON pm.id_sec_user = p2.id_player
WHERE (id_first_user = 1 OR id_sec_user = 1) AND date_send_comment = (
    SELECT MAX(date_send_comment)
    FROM private_messages AS pm2
	WHERE (pm2.id_first_user = pm.id_first_user AND pm2.id_sec_user = pm.id_sec_user) 
    OR (pm2.id_first_user = pm.id_sec_user AND pm2.id_sec_user = pm.id_first_user)
    ORDER BY pm.date_send_comment ASC
);

/* Story 17 */


/* Story 18 */
SELECT 
    2023 AS annee, 
    mois_union.mois AS Mois,
    (
        SELECT COUNT(id_score) 
        FROM scores
        WHERE MONTH(scores.game_date) = mois
        AND id_player = 1
    ) AS TOTAL,
    (
        SELECT DISTINCT g.game_name 
        FROM games AS g 
        INNER JOIN scores AS s ON s.id_game = g.id_game 
        WHERE g.id_game = (
            SELECT id_game
            FROM scores
            WHERE MONTH(scores.game_date) = mois
            AND id_player = 1
            GROUP BY id_game
            ORDER BY COUNT(*) DESC
            LIMIT 1
        )
    ) AS Jeu_le_plus_joue,
    (
        SELECT AVG(scores.game_score)
        FROM scores
        WHERE MONTH(scores.game_date) = mois
        AND id_player = 1
    ) AS Score_moyen
FROM (
    SELECT 1 as mois 
    UNION SELECT 2 
    UNION SELECT 3 
    UNION SELECT 4 
    UNION SELECT 5 
    UNION SELECT 6 
    UNION SELECT 7 
    UNION SELECT 8 
    UNION SELECT 9 
    UNION SELECT 10 
    UNION SELECT 11 
    UNION SELECT 12
) AS mois_union
ORDER BY mois_union.mois ASC;
