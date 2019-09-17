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

Czasami serwery są przeciążone i na niektóre próby pobrania danych odpowiadają błędem 503. Wówczas należy ponownić pobieranie po pewnym czasie.

Aby skorzystać z bardzo podstawowego wsparcia dla OCR przez zewnętrzne narzędzie NASP

## Dane

Do pobrania jest 800+ plików, które po pobraniu zajmują ponad 9 GB danych. Część z nich ma przeszukiwalny tekst, ale kodowanie plików i dziwne łączenie lub rozdzielanie wyrazów czynią przeszukiwanie dosyć nieefektywnym. Wiele z PDF-ów starszych roczników zawiera po prostu skany (niekoniecznie wysokiej jakości) i jest nieprzeszukiwalna. Zdaje się więc, że kolejnym krokiem dzialania na pobranych plikach powinno być ich przetworzenie na tekst za pomocą narzędzia do OCR. Obecnie skrypt posiada podstawowe wsparcie dla narzędzia NASP2 w tym zakresie, ale jeżeli ktoś ma dostęp do profesjonalnych narzędzi typu FineReader to chyba próbowałbym podążać tą drogą.

Pobierane czasopisma:
* Policja 997,
* Policja 997 wydanie specjalne,
* Gazeta Policyjna,
* Magazyn Kryminalny,
* Patrol,
* Wiadomości Sekcji Polskiej IPA,
* Policja Łódzkie,
* Przegląd Prewencyjny,
* Stołeczny Magazyn Policyjny,
* Kwartalnik Prawno-Kryminalistyczny,
* Kwartalnik policyjny.

## Jak uzyskano linki?

Linki do plików wzięto z publicznie dostępnych zasobów serwisów:
* http://www.gazeta.policja.pl/
* http://isp.policja.pl/
* http://www.slupsk.szkolapolicji.gov.pl/
* http://lodzka.policja.gov.pl/
* http://pomorska.policja.gov.pl/
* http://ipapolska.pl/
* http://magazyn.policja.waw.pl/

Wybierano je w sposób częściowo zautomatyzowany ze stron za pomocą kodu JavaScript:

```JavaScript
Array.from(document.getElementsByTagName('a'))
.map(tag => ({href: tag.href}))
.filter(tag => tag.href.includes("download"))
.forEach((tag, index, array) => console.info(tag.href))
```
