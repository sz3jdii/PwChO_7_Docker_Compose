**Sprawozdanie 7 Docker Compose Adam Świątkowski**

**UŻYWAM PORTU 8877, GDYŻ PORT 6666 JEST PORTEM ZASTRZEŻONYM PRZEZ SYSTEM!!!**
Projekt sklada sie z jednego pliku docker-compose.yml i 3 dockerfile'i

Apache2
przy konfiguracji apache2(httpd) najwazniejsze bylo prawidlowe proxowanie requesta do proxy php. Osiagnalem to dyrektywa ProxyPassMatch.
Defaultowy konfig httpd nie pozwalal rowniez na uzycie proxymatcha oraz vhostów.
W tym celu w customowym pliku httpd.conf zaladowalem odpowiednie liby i wlaczylem rozszerzenia.
Podlaczylem kontener do sieci frontend i backend.
Kontener laczy sie z proxy PHP za pomoca aliasu.

MySQL
MySQL jako zmienna srodowiskowa przyjmuje haslo dla uzytkownika root, ustawilem to w pliku docker-compose. Kolejnym krokiem bylo podlaczenie MySQL do sieci backend.
Dodatkowo by nie utracic danych trzymanych w bazie podlaczylem wolumen mapujacy folder z systemu macierzystego do lokalizacji przechowywanie danych MySQL wewnatrz kontenera db.

PHP
Utworzylem osobny pool dla aplikacji webowej. Spowodowane to bylo tym ze domyslny pool nasluchuje na ipv6. Przypisalem go do portu 9001.
Umiescilem rowniez kontekst strony w katalogu /srv/app. Aplikacja sprawdza polaczenie do bazy. Rowniez korzysta z aliasu dla kontenera z baza danych czyli db.
Kontener podlaczylem do sieci backend.


---
Diagram pliku docker-compose oraz obraz wynikowy znajduja sie w glownym drzewie repozytorium.


Uruchamianie (od razu usuwam jakies stare rzeczy)

```
cd docker
docker-compose down && docker-compose build --no-cache && docker-compose up
```

TO DO

Możnaby usprawnić kilka rzeczy jak np. uzycie wolumenów zamiast COPY dla plików aplikacji WWW. Umieszcze w pliku .env haseł do bazy i zmiennych konfiguracyjnych, w szczegolnosci tych wrazliwych jak hasla.
