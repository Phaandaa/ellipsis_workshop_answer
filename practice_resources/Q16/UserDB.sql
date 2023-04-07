drop database if exists UserDB;

create database UserDB;
use UserDB;

CREATE TABLE if not exists useraccount (
  username varchar(20) NOT NULL,
  password_hash varchar(64) NOT NULL
);

INSERT INTO useraccount (username, password_hash) VALUES
('jonathan', '$2y$10$r4v/52lJmhG3qqIyGioFqezDWmEZwBg5Ee/W.pTmtWB8Qp8PM3FPa'),
('samuel', '$2y$10$UtHj/CL.STYoCW.wof.o1.LwSJTXupSevcW/e8i6r5mxQn3sCl.Hu'),
('alice', '$2y$10$beQ4LPXo2Z2bvESuUUaezeJwEFi7GWdgYGAOCXZdGWXD6CKbqVp46');


ALTER TABLE useraccount 
  ADD PRIMARY KEY (username);