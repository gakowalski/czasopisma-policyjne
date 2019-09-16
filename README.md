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

Do pobrania jest 500+ plików, które po pobraniu zajmują około 7 GB danych. Część z nich ma przeszukiwalny tekst, ale kodowanie plików i dziwne łączenie lub rozdzielanie wyrazów czynią przeszukiwanie dosyć nieefektywnym. A wiele z PDF-ów zawiera po prostu skany. Zdaje się więc, że kolejnym krokiem dzialania na pobranych plikach powinno być ich przetworzenie na tekst za pomocą narzędzia do OCR.
