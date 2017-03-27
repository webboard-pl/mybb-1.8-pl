<?php
/**
 * MyBB 1.8 English Language Pack
 * Copyright 2014 MyBB Group, All Rights Reserved
 *
/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2015 MyBBoard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Conors, Divir | Testerzy: hippie
 */
 

// Help Document 1
$l['d1_name'] = "Rejestracja";
$l['d1_desc'] = "Obowiązki i przywileje zarejestrowanych";
$l['d1_document'] = "Większość funkcji forum jest dostępne tylko dla osób zarejestrowanych. Rejestracja jest darmowa i trwa niecałe 5 minut.
<br/><br/>Po rejestracji możesz pisać wiadomości, ustawiać opcje dotyczące wyglądu i zarządzać swoim profilem.
<br/><br/>Do korzystania z niektórych funkcji wymagana jest rejestracja - są to: subskrypcje, zmienianie stylów, dostęp do prywatnego notatnika, pisanie prywatnych wiadomości do innych użytkowników.";

// Help Document 2
$l['d2_name'] = "Aktualizowanie profilu";
$l['d2_desc'] = "Zmienianie ustawień w profilu";
$l['d2_document'] = "Po rejestracji na forum, możesz zmieniać informacje osobiste w profilu, takie jak: komunikatory, hasło, lub - jeśli potrzeba - adres e-mail. Wszystkie z tych informacji i ustawień można ustawić w [panelu użytkownika] znajdującym się u góry po prawej. Następnie kliknij [Edytuj profil] i aktualizuj swoje ustawienia. Pamiętaj o kliknięciu w przycisk [Zatwierdź], aby zmiany zostały zachowane.";

// Help Document 3
$l['d3_name'] = "Ciasteczka w MyBB";
$l['d3_desc'] = "MyBB używa ciasteczek do przechowywania Twoich informacji o zalogowaniu";
$l['d3_document'] = "MyBulletinBoard tworzy ciasteczka (cookies), w których przechowuje informacje o zalogowaniu.
<br/><br/>Ciasteczka to małe pliki przechowywane na Twoim komputerze; ciasteczka utworzone przez daną stronę działają tylko na tej stronie.
<br/><br/>Ciasteczka MyBB sprawdzają kiedy ostatnio i czy w ogóle przeczytano poszczególne wątki.
<br/><br/>Aby wyczyścić wszystkie ciasteczka, kliknij <a href=\"misc.php?action=clearcookies&amp;my_post_key={1}\">tutaj</a>.";

// Help Document 4
$l['d4_name'] = "Logowanie i wylogowywanie";
$l['d4_desc'] = "Jak się zalogować i wylogować";
$l['d4_document'] = "Gdy się zalogujesz, ciasteczka na komputerze zostaną ustawione tak, aby można było przeglądać forum jako zalogowany użytkownik bez ciągłej potrzeby logowania. Wylogowanie czyści ciasteczka dotyczące logowania.
<br/><br/>Aby się zalogować, kliknij [Logowanie] u góry, pod nawigacją. Aby się wylogować, kliknij [Wyloguj] w tym samym miejscu. Wyczyszczenie ciasteczek w Twojej przeglądarce da ten sam efekt.";

// Help Document 5
$l['d5_name'] = "Pisanie nowego wątku";
$l['d5_desc'] = "Rozpoczynanie wątku na forum";
$l['d5_document'] = "Jeśli chcesz utworzyć nowy wątek na forum, wybierz dział w którym chcesz go napisać, a następnie kliknij na przycisk [Nowy wątek]. Jeśli zobaczysz komunikat \"Nie masz uprawnień\" oznacza to, że nie masz uprawnień do pisania w danym dziale.";

// Help Document 6
$l['d6_name'] = "Odpowiadanie w wątku";
$l['d6_desc'] = "Odpowiadanie na forum";
$l['d6_document'] = "Wybierz wątek, w którym chcesz odpowiedzieć. Kliknij na przycisk [Odpowiedz] znajdujący się u góry ekranu. Pamiętaj również, że administrator mógł nałożyć restrykcje, więc możliwe, że nie będziesz mieć możliwości odpowiadania w niektórych działach.
<br/><br/>Moderator może usunąć wątek, w którym przez określony czas nie będzie odpowiedzi.";


// Help Document 7
$l['d7_name'] = "MyCode";
$l['d7_desc'] = "Wszystko o MyCode";
$l['d7_document'] = "Możesz używać MyCode - to uproszczona wersja HTML.
<p><br/>[b]Pogrubiony tekst[/b]<br/>&#160;&#160;&#160;<b>Pogrubiony tekst</b>
<p>[i]Kursywa[/i]<br/>&#160;&#160;&#160;<i>Kursywa</i>
<p>[u]Podkreślenie[/u]<br/>&#160;&#160;&#160;<u>Podkreślenie</u>
<p>[s]Przekreślenie[/s]<br/>&#160;&#160;&#160;<strike>Przekreślenie</strike>
<p><br/>[url]http://www.przykladowy.adres.pl/[/url]<br/>&#160;&#160;&#160;<a href=\"http://www.przykladowy.adres.pl/\">http://www.przykladowy.adres.pl/</a>
<p>[url=http://www.strona.pl/]Tytuł[/url]<br/>&#160;&#160;&#160;<a href=\"http://www.strona.pl/\">Tytuł</a>
<p>[email]mojemail@serwer.pl[/email]<br/>&#160;&#160;&#160;<a href=\"mailto:mojemail@serwer.pl\">mojemail@serwer.pl</a>
<p>[email=mojemail@serwer.pl]Napisz do mnie![/email]<br/>&#160;&#160;&#160;<a href=\"mailto:mojemail@serwer.pl\">Napisz do mnie!</a>
<p>[email=mojemail@serwer.pl?subject=temat]e-mail z tematem[/email]<br/>&#160;&#160;&#160;<a href=\"mailto:mojemail@serwer.pl?subject=temat\">email z tematem</a>
<p><br/>[quote]Cytat[/quote]<br/>&#160;&#160;&#160;<quote>Cytat</quote>
<p>[code]kod[/code]<br/>&#160;&#160;&#160;<code>kod</code>
<p><br/>[img]http://www.php.net/images/php.gif[/img]<br/>&#160;&#160;&#160;<img src=\"http://www.php.net/images/php.gif\">
<p>[img=50x50]http://www.php.net/images/php.gif[/img]<br/>&#160;&#160;&#160;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\">
<p><br/>[color=red]Czerwony kolor[/color]<br/>&#160;&#160;&#160;<font color=\"red\">Czerwony kolor</font>
<p>[size=medium]Rozmiar medium[/size]<br/>&#160;&#160;&#160;<span style='font-size: medium;'>Rozmiar medium</span>
<p>[font=Tahoma]Czcionka Tahoma[/font]<br/>&#160;&#160;&#160;<font face=\"Tahoma\">Czcionka Tahoma</font>
<p><br/>[align=center]Wycentrowany[/align]<div align=\"center\">Wycentrowany</div>
<p>[align=right]Wyrównany do prawej[/align]<div align=\"right\">Wyrównany do prawej</div>
<p><br/>[list]<br />[*]Punkt #1<br/>[*]Punkt #2<br/>[*]Punkt #3<br/>[/list]<br/><ul><li>Punkt #1</li><li>Punkt #2</li><li>Punkt #3</li>
</ul>
<p>Możesz również ustalić typ punktowania - dostępne typy: liczbowy [list=1] i alfabetyczny [list=a].</p>";

