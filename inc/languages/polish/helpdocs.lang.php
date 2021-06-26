<?php

/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2021 Webboard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Łukasz, Divir | Testerzy: hippie
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
$l['d2_document'] = "Po rejestracji na forum, możesz zmieniać informacje osobiste w profilu, takie jak: komunikatory, hasło, lub - jeśli potrzeba - adres e-mail. Wszystkie z tych informacji i ustawień można ustawić w [panelu użytkownika] znajdującym się u góry po lewej. Następnie kliknij [Edytuj profil] i aktualizuj swoje ustawienia. Pamiętaj o kliknięciu w przycisk [Zatwierdź], aby zmiany zostały zachowane.";

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
$l['d7_document'] = "Możesz użyć MyCode, znanego również jako BB Codes, aby dodać efekty lub formatowanie do swoich postów. MyCodes to uproszczona wersja HTML i jest używana w formacie podobnym do tagów HTML, które być może już znasz.
<br /><br />Poniższa tabela jest krótkim przewodnikiem po dostępnych MyCodes:
<br /><br />
<table class=\"tborder\" cellspacing=\"0\" cellpadding=\"5\" border=\"0\" style=\"width:90%\">
<tbody>
<tr>
<td class=\"tcat\" style=\"width:55%\"><span class=\"smalltext\"><strong>Kod MyCode</strong></span></td>
<td class=\"tcat\" style=\"width:35%\"><span class=\"smalltext\"><strong>Efekt</strong></span></td>
<td class=\"tcat\" style=\"width:10%\"><span class=\"smalltext\"><strong>Uwagi</strong></span></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[b]</span>pogrubiony tekst<span style=\"font-weight: bold; color: #ff0000;\">[/b]</span></td>
<td class=\"trow1\"><span style=\"font-weight: bold;\" class=\"mycode_b\">pogrubiony tekst</span></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[i]</span>pochyły tekst (pisany kursywą)<span style=\"font-weight: bold; color: #ff0000;\">[/i]</span></td>
<td class=\"trow2\"><span style=\"font-style: italic;\" class=\"mycode_i\">pochyły tekst (pisany kursywą)</span></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[u]</span>podkreślony tekst<span style=\"font-weight: bold; color: #ff0000;\">[/u]</span></td>
<td class=\"trow1\"><span style=\"text-decoration: underline;\" class=\"mycode_u\">podkreślony tekst</span></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[s]</span>przekreślony tekst<span style=\"font-weight: bold; color: #ff0000;\">[/s]</span></td>
<td class=\"trow2\"><span style=\"text-decoration: line-through;\" class=\"mycode_s\">przekreślony tekst</span></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[url]</span>http://www.example.com/<span style=\"font-weight: bold; color: #ff0000;\">[/url]</span></td>
<td class=\"trow1\"><a href=\"http://www.example.com/\" class=\"mycode_url\" rel=\"nofollow\">http://www.example.com/</a></td>
<td class=\"trow1\">Do adresów URL zostanie automatycznie dodane hiperłącze, jeśli dołączony jest odpowiedni protokół (dopuszczalne protokoły to http, https, ftp, news, irc, ircs i irc6).</td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[url=http://www.example.com/]</span>Example.com<span style=\"font-weight: bold; color: #ff0000;\">[/url]</span></td>
<td class=\"trow2\"><a href=\"http://www.example.com/\" class=\"mycode_url\" rel=\"nofollow\">Example.com</a></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[email]</span>example@example.com<span style=\"font-weight: bold; color: #ff0000;\">[/email]</span></td>
<td class=\"trow1\"><a href=\"mailto:example@example.com\" class=\"mycode_email\">example@example.com</a></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[email=example@example.com]</span>napisz e-mila!<span style=\"font-weight: bold; color: #ff0000;\">[/email]</span></td>
<td class=\"trow2\"><a href=\"mailto:example@example.com\" class=\"mycode_email\">napisz e-maila!</a></td>
<td class=\"trow2\">Temat e-maila można dołączyć, dodając <strong>?subject=temat wiadomości e-mail</strong> po adresie e-mail.</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[quote]</span>Cytowany tekst<span style=\"font-weight: bold; color: #ff0000;\">[/quote]</span></td>
<td class=\"trow1\"><blockquote class=\"mycode_quote\"><cite>Cytat:</cite>Cytowany tekst</blockquote></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[quote='Admin' pid='1' dateline='946684800']</span>Cytowany tekst<span style=\"font-weight: bold; color: #ff0000;\">[/quote]</span></td>
<td class=\"trow2\"><blockquote class=\"mycode_quote\"><cite><span> (01-01-2000, 12:00)</span>Admin napisał:  <a href=\"http://www.example.com/showthread.php?pid=1#pid1\" class=\"quick_jump\" rel=\"nofollow\"></a></cite>Cytowany tekst</blockquote></td>
<td class=\"trow2\">Tak będzie wyglądał cytowany post. <strong>pid</strong> przekierowuje do cytowanego postu, <strong>dateline</strong> jes <a href=\"https://www.unixtimestamp.com/\">Sygnaturą czasowa UNIX</a>.</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[code]</span>kod<span style=\"font-weight: bold; color: #ff0000;\">[/code]</span></td>
<td class=\"trow1\"><div class=\"codeblock\"><div class=\"title\">Code:</div><div class=\"body\" dir=\"ltr\"><code>kod</code></div></div></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[php]</span>&lt;?php echo \"Hello world!\";?&gt;<span style=\"font-weight: bold; color: #ff0000;\">[/php]</span></td>
<td class=\"trow2\"><div class=\"codeblock phpcodeblock\"><div class=\"title\">Kod PHP:</div><div class=\"body\"><div dir=\"ltr\"><code><span style=\"color: #0000BB\">&lt;?php&nbsp;</span><span style=\"color: #007700\">echo&nbsp;</span><span style=\"color: #DD0000\">\"Hello&nbsp;world!\"</span><span style=\"color: #007700\">;</span><span style=\"color: #0000BB\">?&gt;</span></code></div></div></div></div></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[img]</span>https://secure.php.net/images/php.gif<span style=\"font-weight: bold; color: #ff0000;\">[/img]</span></td>
<td class=\"trow1\"><img src=\"https://secure.php.net/images/php.gif\" class=\"mycode_img\"></td>
<td class=\"trow1\"></td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[img=50x50]</span>https://secure.php.net/images/php.gif<span style=\"font-weight: bold; color: #ff0000;\">[/img]</span></td>
<td class=\"trow2\"><img src=\"https://secure.php.net/images/php.gif\" width=\"50\" height=\"50\" class=\"mycode_img\"></td>
<td class=\"trow2\">Możesz określić wymiary obrazka zmieniając wartości w nawiasach ([])</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[color=red]</span>Czerwony tekst<span style=\"font-weight: bold; color: #ff0000;\">[/color]</span></td>
<td class=\"trow1\"><span style=\"color: red;\" class=\"mycode_color\">Czerwony tekst</span></td>
<td class=\"trow1\">Możesz użyć <a href=\"https://www.w3schools.com/cssref/css_colors.asp\">nazwy koloru CSS</a> lub kodu HEX.</td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[size=large]</span>Tekst o rozmiarze large<span style=\"font-weight: bold; color: #ff0000;\">[/size]</span></td>
<td class=\"trow2\"><span style=\"font-size: large\" class=\"mycode_size\">Tekst o rozmiarze large</span></td>
<td class=\"trow2\">Dostępne rozmiary: xx-small, x-small, small, medium, large, x-large, xx-large</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[size=30]</span>Ten tekst ma 30px<span style=\"font-weight: bold; color: #ff0000;\">[/size]</span></td>
<td class=\"trow1\"><span style=\"font-size: 30px\" class=\"mycode_size\">Ten tekst ma 30px</span></td>
<td class=\"trow1\">Akceptowane rozmiary od 1 do 50</td>
</tr>
tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[font=Impact]</span>Tekst pisany czcionką Impact<span style=\"font-weight: bold; color: #ff0000;\">[/font]</span></td>
<td class=\"trow2\"><span style=\"font-family: Impact;\" class=\"mycode_font\">Tekst pisany czcionką Impact</span></td>
<td class=\"trow2\">Czcionka musi być zainstalowana na komputerze</td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[align=center]</span>Wyśrodkowany tekst<span style=\"font-weight: bold; color: #ff0000;\">[/align]</span></td>
<td class=\"trow1\"><div style=\"text-align: center;\" class=\"mycode_align\">Wyśrodkowany tekst</div></td>
<td class=\"trow1\">Dostępne warianty położenia tekstu: left - do lewej, center - wyśrodkowane, right - do prawej, justify - wyjustowane</td>
</tr>
<tr>
<td class=\"trow2\"><span style=\"font-weight: bold; color: #ff0000;\">[list]</span><br />[*]Pozycja numer #1<br />[*]Pozycja numer #2<br />[*]Pozycja numer #3<br /><span style=\"font-weight: bold; color: #ff0000;\">[/list]</span></td>
<td class=\"trow2\"><ul class=\"mycode_list\"><li>Pozycja numer #1</li><li>Pozycja numer #2</li><li>Pozycja numer #3</li></ul></td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[list=1]</span><br />[*]Pozycja numer #1<br />[*]Pozycja numer #2<br />[*]Pozycja numer #3<br /><span style=\"font-weight: bold; color: #ff0000;\">[/list]</span></td>
<td class=\"trow1\"><ol class=\"mycode_list\" type=\"1\"><li>Pozycja numer #1</li><li>Pozycja numer #2</li><li>Pozycja numer #3</li></ol></td>
<td class=\"trow1\"><strong>1</strong> tworzy numerowaną liste, <strong>a</strong> tworzy alfabetyczną listę, <strong>i</strong> tworzy numerowaną listę cyframi rzymskimi.</td>
</tr>
<tr>
<td class=\"trow2\">Linia pozioma<span style=\"font-weight: bold; color: #ff0000;\">[hr]</span>dzielona</td>
<td class=\"trow2\">Linia pozioma<hr class=\"mycode_hr\">dzielona</td>
<td class=\"trow2\"></td>
</tr>
<tr>
<td class=\"trow1\"><span style=\"font-weight: bold; color: #ff0000;\">[video=youtube]</span>https://www.youtube.com/watch?v=dQw4w9WgXcQ<span style=\"font-weight: bold; color: #ff0000;\">[/video]</span></td>
<td class=\"trow1\"><iframe src=\"//www.youtube.com/embed/dQw4w9WgXcQ\" allowfullscreen=\"\" width=\"460\" height=\"255\" frameborder=\"0\"></iframe></td>
<td class=\"trow1\">Wspierane serwisy Dailymotion, Facebook, LiveLeak, Metacafe, Mixer, MySpace TV, Twitch, Vimeo, Yahoo Videos oraz YouTube.</td>
</tr>
</tbody></table>
<br /><br />Administratorzy mogli utworzyć więcej MyCodes do użytku. Skontaktuj się z administratorem, aby dowiedzieć się, czy istnieją i jak z nich korzystać.";