📱 Mobile Shop - Menadžment Lagera

Ovo je web aplikacija za upravljanje lagerom mobilnih telefona, razvijena kao **CRUD** sistem (Create, Read, Update, Delete). Projekat koristi PHP za serversku logiku i MySQL za skladištenje podataka.

📸 Pregled Projekta (Screenshots)

Ispod se nalaze vizuelni prikazi glavnih delova aplikacije, koda i baze podataka:

Glavna stranica (index.php)

Prikaz centralne tabele sa lagerom i formom za unos novih modela.
![Glavna Stranica](Pictures/index.php.png)

2. Izmena podataka (update.php)

Interfejs koji omogućava brzo ažuriranje informacija o telefonima.
![Izmena Podataka](Pictures/update.php.png)

3. Baza podataka (phpMyAdmin)
Pregled `mobile_shop` baze i strukture tabele `phones`.
![Baza Podataka](Pictures/phpmyadmin.png)


🛠️ Funkcionalnosti

* **Pregled**: Dinamički prikaz svih uređaja iz baze.
* **Dodavanje**: Unos novih artikala putem validirane forme.
* **Izmena**: Ažuriranje cene, količine i naziva postojećih modela.
* **Brisanje**: Uklanjanje artikala sa lagera jednim klikom.

📂 Tehnologije

* **Backend**: PHP (mysqli konekcija)
* **Baza podataka**: MySQL
* **Frontend**: HTML5, CSS3 (Segoe UI dizajn)
* **Alati**: XAMPP, phpMyAdmin

⚙️ Podešavanje baze

U **phpMyAdmin**-u kreirajte bazu `mobile_shop` i izvršite sledeći upit:

CREATE TABLE phones (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(100) NOT NULL,
    model VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    quantity INT(11) NOT NULL
);

⚙️ Instalacija

1. Kreirajte bazu `mobile_shop`.
2. Uvezite tabelu `phones`.
3. Pokrenite putem XAMPP-a na adresi `localhost/Mobile Shop/index.php`.