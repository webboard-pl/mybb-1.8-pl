<?php
/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2016 MyBBoard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Conors, Divir | Testerzy: hippie
 */

$l['system_health'] = "Stan systemu";
$l['system_health_desc'] = "Przeglądaj informacje o stanie systemu MyBB.";
$l['utf8_conversion'] = "Konwersja do UTF-8";
$l['utf8_conversion_desc'] = "Konwertuj tabele bazy danych do formatu UTF-8. Proces konwersji może trwać nawet kilka godzin, zależnie od rozmiaru bazy forum i ilości tabel. Gdy konwersja zostanie zakończona, wrócisz do strony konwertowania do UTF-8.";
$l['utf8_conversion_desc2'] = "To narzędzie sprawdza tabele bazy danych, czy wszystkie są w formacie UTF-8. Przy jego pomocy możesz wykonać konwersję do UTF-8.";

$l['convert_all'] = "Konwertuj wszystkie";
$l['converting_to_utf8'] = "MyBB konwertuje tabelę \"{1}\" z formatu {2} do UTF-8.";
$l['convert_to_utf8'] = "Masz zamiar skonwertować tabelę \"{1}\" z formatu {2} do UTF-8.";
$l['convert_all_to_utf'] = "Masz zamiar skonwertować WSZYSTKIE tabele z formatu {1} do UTF-8.";
$l['convert_all_to_utf8mb4'] = "Masz zamiar skonwertować WSZYSTKIE tabele z formatu {1} do 4-bajtowego kodowania UTF-8.";
$l['converting_to_utf8mb4'] = "MyBB konwertuje tabelę \"{1}\" z formatu {2} do 4-bajtowego kodowania UTF-8.";
$l['please_wait'] = "Proszę czekać...";
$l['converting_table'] = "Konwersja tabeli:";
$l['convert_table'] = "Konwertuj tabelę";
$l['convert_tables'] = "Konwertuj wszystkie tabele";
$l['convert_database_table'] = "Konwertuj tabelę bazy danych";
$l['convert_database_tables'] = "Konwertuj wszystkie tabele bazy danych";
$l['table'] = "Tabela";
$l['status_utf8'] = "Status UTF-8";
$l['status_utf8mb4'] = "Wsparcie dla 4-bajtowego kodowania UTF-8<br />(wymaga serwera MySQL w wersji 5.5.3 lub nowszego)";
$l['not_available'] = "Niedostępne";
$l['all_tables'] = "Wszystkie tabele";
$l['convert_now'] = "Konwertuj";
$l['totals'] = "Ogólne";
$l['attachments'] = "Załączniki";
$l['total_database_size'] = "Rozmiar bazy danych";
$l['attachment_space_used'] = "Miejsce używane przez załączniki";
$l['total_cache_size'] = "Rozmiar pamięci podręcznej";
$l['estimated_attachment_bandwidth_usage'] = "Szacowane zużycie transferu przez załączniki";
$l['max_upload_post_size'] = "Maksymalny rozmiar wysyłki / rozmiar POST";
$l['average_attachment_size'] = "Średni rozmiar załącznika";
$l['stats'] = "Statystyki";
$l['task'] = "Zadanie";
$l['run_time'] = "Data wykonania";
$l['next_3_tasks'] = "Następne 3 zadania";
$l['no_tasks'] = "Nie ma uruchomionych zadań.";
$l['backup_time'] = "Data utworzenia";
$l['no_backups'] = "Nie ma kopii zapasowych bazy danych.";
$l['existing_db_backups'] = "Kopie zapasowe bazy danych";
$l['writable'] = "Zapis możliwy";
$l['not_writable'] = "Zapis niemożliwy";
$l['please_chmod_777'] = "Zmień CHMOD na 777.";
$l['chmod_info'] = "Dostosuj ustawienia CHMOD plików na serwerze do wymagań określonych poniżej.";
$l['file'] = "Plik";
$l['location'] = "Lokalizacja";
$l['settings_file'] = "Plik ustawień";
$l['config_file'] = "Plik konfiguracji";
$l['file_upload_dir'] = "Katalog załączników";
$l['avatar_upload_dir'] = "Katalog wysyłanych awatarów";
$l['language_files'] = "Pliki tłumaczeń";
$l['backup_dir'] = "Katalog kopii bazy danych";
$l['cache_dir'] = "Katalog pamięci podręcznej";
$l['themes_dir'] = "Katalog stylów";
$l['chmod_files_and_dirs'] = "Uprawnienia CHMOD dla plików i katalogów";

$l['notice_process_long_time'] = "Proces konwersji może potrwać nawet kilka godzin, zależnie od rozmiaru bazy forum i ilości tabel.";
$l['notice_mb4_warning'] = "Obsługa 4-bajtowego kodowania UTF-8 wymaga serwera MySQL w wersji 5.5.3 lub nowszego. Nie będzie możliwe zaimportowanie bazy danych na serwerze, który jest w wersji niższej niż 5.5.3.";

$l['check_templates'] = "Zweryfikuj szablony";
$l['check_templates_desc'] = "Sprawdź, czy wszystkie zainstalowane szablony nie mają znanych luk bezpieczeństwa.";
$l['check_templates_title'] = "Zweryfikuj bezpieczeństwo szablonów";
$l['check_templates_info'] = "Ten proces sprawdzi szablony pod kątem znanych luk bezpieczeństwa, które mogą mieć wpływ na silnik forum lub serwer. Może on potrwać trochę czasu, jeżeli posiadasz dużo zainstalowanych stylów.
<br /><br />Aby rozpocząć proces weryfikacji, naciśnij przycisk \"Kontynuuj\" poniżej.";
$l['check_templates_info_desc'] = "Poniższe szablony mogą zawierać znane luki bezpieczeństwa. Zweryfikuj je poniżej.";
$l['full_edit'] = "Pełna edycja";

$l['error_chmod'] = "plików lub katalogów nie spełnia wymagań CHMOD.";
$l['error_invalid_table'] = "Taka tabela nie istnieje.";
$l['error_db_encoding_not_set'] = "Twoje MyBB nie zostało jeszcze skonfigurowane, by używać tego narzędzia. Tutaj: href=\"http://docs.mybb.com/Utf8_setup.html\">Dokumentacja MyBB</a> możesz dowiedzieć się jak to zrobić.";
$l['error_not_supported'] = "Twoja baza danych nie umożliwia użycia narzędzia konwersji do UTF-8.";
$l['error_invalid_input'] = "Podczas sprawdzania szablonów wystąpił błąd. Spróbuj ponownie lub skontaktuj się z twórcami MyBB w celu uzyskania pomocy.";
$l['error_master_templates_altered'] = "Główne szablony MyBB zostały zmodyfikowane. Skontaktuj się z twórcami MyBB w celu uzyskania pomocy jak odwrócić zmiany.";
$l['error_utf8mb4_version'] = "Używana przez ciebie wersja serwera MySQL nie wspiera 4-bajtowego kodowania UTF-8.";


$l['warning_multiple_encodings'] = "Nie jest zalecane używanie wielu sposobów kodowania znaków w bazie danych. Może to spowodować dziwne zachowanie skryptu lub błędy serwera MySQL.";
$l['warning_utf8mb4_config'] = "Dla pełnej obsługi 4-bajtowego kodowania UTF-8 konieczna jest zmiana wartości <i>\$config['database']['encoding'] = 'utf8';</i> na <i>\$config['database']['encoding'] = 'utf8mb4';</i> w pliku inc/config.php.";

$l['success_templates_checked'] = "Szablony zostały sprawdzone - nie odnaleziono luk bezpieczeństwa.";
$l['success_all_tables_already_converted'] = "Wszystkie tabele zostały przekonwertowane lub już były w formacie UTF-8.";
$l['success_table_converted'] = "Tabela \"{1}\" została przekonwertowana do formatu UTF-8.";
$l['success_chmod'] = "Wszystkie pliki i katalogi mają odpowiednie uprawnienia CHMOD.";