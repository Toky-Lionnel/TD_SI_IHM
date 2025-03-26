CREATE DATABASE supermarche;

USE supermarche;

CREATE TABLE Produit
(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    designation VARCHAR(50),
    prix INT,
    quantite_stock INT
);

CREATE TABLE Caisse
(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(10)
);

CREATE TABLE Client
(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(20)
)

CREATE TABLE Achat
(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    id_produit INT,
    id_caisse INT,
    quantite INT,
    id_client INT,
    date_achat DATE,
    FOREIGN KEY (id_produit) REFERENCES Produit(id),
    FOREIGN KEY (id_caisse) REFERENCES Caisse(id),
    FOREIGN KEY (id_client) REFERENCES Client(id)
);