<?php
/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2016 MyBBoard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Conors, Divir | Testerzy: hippie
 */

// Tabs
$l['attachments'] = "Załączniki";
$l['stats'] = "Statystyki załączników";
$l['find_attachments'] = "Znajdź załączniki";
$l['find_attachments_desc'] = "Znajdź załączniki wysłane przez użytkowników. Za pomocą poniższego formularza możesz określić kryteria wyszukiwania.";
$l['find_orphans'] = "Znajdź nieużywane";
$l['find_orphans_desc'] = "Załączniki, o których nie ma informacji w bazie lub systemie plików są nieużywane. Wyszukaj je i usuń.";
$l['attachment_stats'] = "Statystyki";
$l['attachment_stats_desc'] = "Poniżej znajdują się statystyki dla załączników umieszczonych na forum.";

// Errors
$l['error_nothing_selected'] = "Nie zaznaczono załączników do usunięcia.";
$l['error_no_attachments'] = "Nie ma załączników na forum. Po wysłaniu przez użytkowników przynajmniej jednego pliku uzyskasz dostęp do tej sekcji.";
$l['error_not_all_removed'] = "Zostały usunięte tylko nieużywane pliki, pozostałe nadal są w katalogu załączników.";
$l['error_invalid_username'] = "Wpisany login jest nieprawidłowy.";
$l['error_invalid_forums'] = "Zaznaczono jedno lub więcej nieprawidłowych działów.";
$l['error_no_results'] = "Nie ma załączników spełniających wybrane kryteria.";
$l['error_not_found'] = "Plik nie został znaleziony w katalogu załączników.";
$l['error_not_attached'] = "Załącznik został wysłany 24 godziny temu, ale nie dołączono go do posta.";
$l['error_does_not_exist'] = "Wątek lub post połączony z tym załącznikiem już nie istnieje.";

// Success
$l['success_deleted'] = "Wybrane załączniki zostały usunięte.";
$l['success_orphan_deleted'] = "Wybrane nieużywane załączniki zostały usunięte.";
$l['success_no_orphans'] = "Nie ma nieużywanych załączników na forum.";

// Confirm
$l['confirm_delete'] = "Czy na pewno chcesz usunąć wybrane załączniki?";

// == Pages
// = Stats
$l['general_stats'] = "Statystyki główne";
$l['stats_attachment_stats'] = "Załączniki - statystyki";
$l['num_uploaded'] = "<strong>Wysłanych załączników</strong>";
$l['space_used'] = "<strong>Miejsce używane przez załączniki</strong>";
$l['bandwidth_used'] = "<strong>Szacowane zużycie transferu przez załączniki</strong>";
$l['average_size'] = "<strong>Średni rozmiar załącznika</strong>";
$l['size'] = "Rozmiar";
$l['posted_by'] = "Wysłany przez";
$l['thread'] = "Wątek";
$l['downloads'] = "Ilość pobrań";
$l['date_uploaded'] = "Data wysłania";
$l['popular_attachments'] = "5 najpopularniejszych załączników";
$l['largest_attachments'] = "5 największych załączników";
$l['users_diskspace'] = "5 użytkowników używających najwięcej miejsca na załączniki";
$l['username'] = "Użytkownik";
$l['total_size'] = "Używane miejsce";

// = Orphans
$l['orphan_results'] = "Wyszukiwanie nieużywanych załączników - wyniki";
$l['orphan_attachments_search'] = "Wyszukiwanie nieużywanych załączników";
$l['reason_orphaned'] = "Dlaczego nieużywany?";
$l['reason_not_in_table'] = "Brak informacji w tabeli załączników";
$l['reason_file_missing'] = "Brak załączonego pliku";
$l['reason_thread_deleted'] = "Wątek został usunięty";
$l['reason_post_never_made'] = "Post jeszcze nie powstał";
$l['unknown'] = "Nieznany";
$l['results'] = "Wyniki";
$l['step1'] = "Krok 1";
$l['step2'] = "Krok 2";
$l['step1of2'] = "Krok 1 z 2 - skanowanie systemu plików";
$l['step2of2'] = "Krok 2 z 2 - skanowanie bazy danych";
$l['step1of2_line1'] = "Proszę czekać, system plików jest skanowany w poszukiwaniu nieużywanych załączników.";
$l['step2of2_line1'] = "Proszę czekać, baza danych jest skanowana w poszukiwaniu nieużywanych załączników.";
$l['step_line2'] = "Po zakończeniu procesu nastąpi przeniesienie do kolejnego kroku.";
$l['scanning'] = 'Skanowanie...';

// = Attachments / Index
$l['index_find_attachments'] = "Załączniki - szukanie";
$l['find_where'] = "Znajdź załączniki, dla których...";
$l['name_contains'] = "Nazwa pliku zawiera";
$l['name_contains_desc'] = "Użyj \"*\", by zastąpić dowolny ciąg znaków. Przykład: *.zip";
$l['type_contains'] = "Typ pliku zawiera";
$l['forum_is'] = "Kategoria, dział, poddział";
$l['username_is'] = "Użytkownik";
$l['more_than'] = "większa niż";
$l['greater_than'] = "większa niż";
$l['is_exactly'] = "równa";
$l['less_than'] = "mniejsza niż";
$l['date_posted_is'] = "Data wysyłania jest";
$l['days_ago'] = "dni temu";
$l['file_size_is'] = "Wielkość pliku jest";
$l['kb'] = "KB";
$l['download_count_is'] = "Ilość pobrań jest";
$l['display_options'] = "Opcje wyświetlania wyników";
$l['filename'] = "nazwy pliku";
$l['filesize'] = "rozmiaru pliku";
$l['download_count'] = "ilości pobrań";
$l['post_username'] = "autora postu";
$l['asc'] = "rosnącej";
$l['desc'] = "malejącej";
$l['sort_results_by'] = "Sortowanie wyników według";
$l['results_per_page'] = "Wyników na stronę";
$l['in'] = "w kolejności";

// Buttons
$l['button_delete_orphans'] = "Usuń wybrane załączniki";
$l['button_delete_attachments'] = "Usuń wybrane załączniki";
$l['button_find_attachments'] = "Znajdź załączniki";
