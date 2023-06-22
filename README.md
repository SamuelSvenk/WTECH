**Základy Webových Technológii**

2022/23

Patrik Hitka, Maria Fedosenya, Samuel Švenk 

# <a name="_3587qn9474e8"></a>Obsah
[**Obsah	1**](#_3587qn9474e8)**

[**Spustenie servera:	1**](#_jo2qd3q7dn69)

[**Úvod	2**](#_1odfdll03ose)

[**Implementačné prostredie	2**](#_mr11lljoq4xh)

[**Fyzický dátový model	2**](#_6itnn78i74mm)

[**Návrhové rozhodnutia	2**](#_5uz1ru7v8k1)

[**Prípady použitia	3**](#_bkezx7taf56n)

[Zmena množstva pre daný produkt	3](#_lc2vmdsttkow)

[Prihlásenie	3](#_43s7rkqequ86)

[Vyhľadávanie	3](#_mb6i2y3eng70)

[Pridanie produktu do košíka	3](#_py6virosqyae)

[Stránkovanie	3](#_gm7q0eifkmit)

[Filtrovanie	3](#_5vz5hrgypov6)

[**Snímky obrazovky	4**](#_ch3rna6r69qt)
# <a name="_jo2qd3q7dn69"></a>Spustenie servera:
- Otvorte cmd v súbore, kde sa nachádza laravel (WTECH)
- composer install
- composer update 
- .env:	
  - Treba premenovať .envexample na .env a potom v tom súbore treba do týchto premenných doplniť vlastné údaje:
    - DB\_CONNECTION=pgsql
    - DB\_HOST= \*host napr.: 127.0.0.1\*
    - DB\_PORT= \*port databazy\*
    - DB\_DATABASE= \*meno databázy\*
    - DB\_USERNAME= \*meno vlastnika\*
    - DB\_PASSWORD= \*heslo od databazy\*

- php artisan migrate
- php artisan db:seed
- php artisan storage:link
- php artisan serve
# <a name="_1odfdll03ose"></a>Úvod
V rámci semestrálneho zadania našim cieľom bolo vytvoriť funkčnú webovú aplikáciu pre e-shop, zahŕňajúcu klientskú a administrátorskú časť. Témou nášho e-shopu sú *videohry* pre rôzne platformy (PC, XBox, PlayStation a Nintendo). 
# <a name="_mr11lljoq4xh"></a>Implementačné prostredie
Pre tvorbu front-endu sme použili HTML, CSS a JavaScript, taktiež sme použili Bootstrap framework, na serveri sme použili PHP Laravel framework. Prostredie v ktorom každý člen programoval si zvolil sám napríklad Visual Studio Code. 
# <a name="_6itnn78i74mm"></a>Fyzický dátový model
![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.001.png)
# <a name="_5uz1ru7v8k1"></a>Návrhové rozhodnutia
Rozdelenie rolí administrátora a používateľa sme spravili tak, že v modeli používateľa máme pole “role”, kde môže byť hodnota buď “user” alebo “admin”. Používatelia s rolou admin majú prístup k administratorskemu rozhraniu. 

Admin účet:

mail: <admin@example.com>

password: password
# <a name="_bkezx7taf56n"></a>Prípady použitia
### <a name="_lc2vmdsttkow"></a>Zmena množstva pre daný produkt
Pre zmenu množstva v košíku posielam POST request na server pomocou JS FETCH API, čo znamená že akákoľvek zmena sa vykoná v košíku server aktualizuje daný produkt a jeho množstvo v databáze v realnom čase.
### <a name="_43s7rkqequ86"></a>Prihlásenie
Prihlásenie používateľa je riadené v rámci *LoginControlleru*. Funkcia *index*() zobrazí view pre login. Funkcia check() slúži na overenie používateľa a v prípade, že taký používateľ existuje a údaje sedia, tak bude prihlásený. Inak bude presmerovaný naspäť na stránku s prihlasovaním o upozornením, že email alebo heslo sú nesprávne. 
### <a name="_mb6i2y3eng70"></a>Vyhľadávanie
Na vyhľadávanie existuje vlastný controller *SearchController*, v ktorom je funkcia *search*(), tá je zavolaná po odoslaní požiadavky cez Seach bar. Vyhľadajú sa produkty, ktorých názov (title) zodpovedá regexu v tvare %$query%. 

Funkcia vráti view *products* s vyhľadanými produktmi. 
### <a name="_py6virosqyae"></a>Pridanie produktu do košíka
Na product stránke je tlačidlo “Pridať do košíka”, po stlačení sa vytvorí CartProduct v databáze a zobrazí sa v košíku. Ak sa v košíku už daný produkt nachádza zdvihne sa množstvo v košíku o 1. 
### <a name="_gm7q0eifkmit"></a>Stránkovanie
Stránkovanie je použité v Products, ProductPage a AdminProducts. Pouzivam na to funkciu Paginate(12) v controlleroch daných stránok. Z vybraných produktov to rodelí po 12 na časti a posunie ich stránke. Na stánkovej časti používam command {{$products->links('pagination::bootstrap-4') }}. Toto vytvorí gombíky na klikanie s daným počtom vygenerovaných stránok.
### <a name="_5vz5hrgypov6"></a>Filtrovanie
Filtrovanie je použité na Products stránke, kde vľavo sú 3 rôzne filtre. Dá sa filtrovať na základe žánru, developera a ceny. Po zakliknutí daných výberov stlačte gomík submit a zobrazia sa hry, ktoré spĺňajú vaše kritérie. V backend-e controller po kliknutí gombíku zistí, ktoré filtre boli zakliknuté a pomocou ORM vráti len produkty, ktoré spĺňajú vybraté kritéria.
# <a name="_ch3rna6r69qt"></a>Snímky obrazovky
![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.002.png)

Fig. 1. Prihlásenie používateľa

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.003.png)

Fig. 2. Registrácia používateľa

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.004.png)

Fig. 3. Homepage / obrázky pre carousel sú zo stnky unsplash.com

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.005.png)

Fig. 4. Detail produktu

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.006.png)

Fig. 5. Katalóg

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.007.png)

Fig. 6. Nákupný košík

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.008.png)

Fig. 7. Zobrazenie katalógu administrátorom 

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.009.png)

Fig. 8. Pridávanie obrázkov administrátorom 

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.010.png)

Fig. 9. Úprava údajov produktu administrátorom

![](pics/Aspose.Words.ee161c86-e3a2-4dbc-a8e2-392b39b7eace.011.png)
