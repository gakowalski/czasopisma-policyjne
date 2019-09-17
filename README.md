# Czasopisma policyjne

## Wprowadzenie

Repozytorium zawiera skrypt pobierający czasopisma policyjne dostępne otwarcie na stronach internetowych Policji. Celem pobrania jest możliwość zbudowania własnej lokalnej wyszukiwarki treści za pomocą dodatkowych narzędzi, bo roboty wyszukwiarek internetowych niestety nie indeksują poprawnie plików PDF z czasopismami policyjnymi.

## Wymagania

Skrypt wymaga interpretera PHP.

## Uruchamianie

Użycie poniższej komendy rozpocznie pobieranie danych:

```
php download-all.php
```

## Dane

Do pobrania jest 500+ plików, które po pobraniu zajmują około 7 GB danych. Część z nich ma przeszukiwalny tekst, ale kodowanie plików i dziwne łączenie lub rozdzielanie wyrazów czynią przeszukiwanie dosyć nieefektywnym. A wiele z PDF-ów zawiera po prostu skany. Zdaje się więc, że kolejnym krokiem dzialania na pobranych plikach powinno być ich przetworzenie na tekst za pomocą narzędzia do OCR. Obecnie skrypt posiada podstawowe wsparcie dla narzędzia NASP2 w tym zakresie.

Pobierane czasopisma:
* Policja 997,
* Policja 997 wydanie specjalne,
* Gazeta Policyjna,
* Magazyn Kryminalny,
* Patrol,
* Kwartalnik Prawno-Kryminalistyczny,
* Kwartalnik policyjny.

## Jak uzyskano linki?

Linki do plików wzięto z publicznie dostępnego serwisu http://www.gazeta.policja.pl/

Wybierano je w sposób częściowo zautomatyzowany ze stron za pomocą kodu JavaScript:

```JavaScript
Array.from(document.getElementsByTagName('a'))
.map(tag => ({href: tag.href}))
.filter(tag => tag.href.includes("download"))
.forEach((tag, index, array) => console.info(tag.href))
```
