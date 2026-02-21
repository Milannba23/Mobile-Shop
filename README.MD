📱 Mobile Shop - Menadžment Lagera

Ovo je jednostavna **CRUD** (Create, Read, Update, Delete) veb aplikacija za upravljanje lagerom mobilnih telefona. Projekat je kreiran kao praktična vežba za rad sa PHP-om i MySQL bazom podataka.

🚀 Funkcionalnosti

* **Prikaz lagera**: Pregled svih telefona iz baze u tabeli.
* **Dodavanje**: Unos novih modela putem forme.
* **Izmena**: Ažuriranje podataka o postojećim telefonima (brend, model, cena, količina).
* **Brisanje**: Uklanjanje telefona sa lagera jednim klikom.
* **Dizajn**: Moderan i responzivan izgled korišćenjem eksternog CSS-a.

🛠️ Tehnologije

* **PHP**: Server-side logika i komunikacija sa bazom.
* **MySQL**: Skladištenje podataka.
* **HTML5 & CSS3**: Struktura i dizajn (Google Fonts 'Segoe UI').
* **XAMPP**: Lokalno razvojno okruženje.

📋 Podešavanje baze podataka

Da bi aplikacija radila, potrebno je u **phpMyAdmin**-u napraviti bazu podataka:

1. Napravite bazu pod nazivom: `mobile_shop`.
2. Unutar baze izvršite sledeći SQL upit za kreiranje tabele:


CREATE TABLE phones (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT(11) NOT NULL
);

📂 Struktura projekta

  index.php - Glavna stranica sa tabelom i formom za unos.
  database.php - Konfiguracija konekcije sa bazom.
  insert.php - Logika za dodavanje novih zapisa.
  update.php - Logika i forma za izmenu podataka.
  delete.php - Logika za brisanje podataka.
  style.css - Stilovi za lepši izgled aplikacije.
  Pictures/ - Folder sa slikama projekta.

💻 Kako pokrenuti projekat

  1.Instalirajte XAMPP.
  2.Kopirajte folder Mobile Shop u C:/xampp/htdocs/.
  3.Pokrenite Apache i MySQL u XAMPP panelu.
  4.U brauzeru otvorite adresu: localhost/Mobile Shop/index.php.