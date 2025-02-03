CREATE DATABASE libreria;

USE libreria;

CREATE TABLE libri (
    titolo VARCHAR(40) not null PRIMARY KEY,
    autore VARCHAR(40) not null,
    genere VARCHAR(40) not null,
    prezzo DECIMAL(10, 2) not null,
    anno_pubblicazione DATE not null
);

INSERT INTO libri (titolo, autore, genere, prezzo, anno_pubblicazione) VALUES
('Il Signore degli Anelli', 'J.R.R. Tolkien', 'Fantasy', 25, '1954-07-29'),
('1984', 'George Orwell', 'Distopia', 18, '1949-06-08'),
('Orgoglio e Pregiudizio', 'Jane Austen', 'Romanzo', 12, '1813-01-28'),
('Il nome della rosa', 'Umberto Eco', 'Giallo', 20, '1980-10-01'),
('Harry Potter e la Pietra Filosofale', 'J.K. Rowling', 'Fantasy', 15, '1997-06-26');




