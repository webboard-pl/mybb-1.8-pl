<?php
/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2016 MyBBoard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Conors, Divir | Testerzy: hippie
 */

$l['board_settings'] = "Ustawienia forum";
$l['change_settings'] = "Wpisy ustawień";
$l['change_settings_desc'] = "Zarządzaj różnymi ustawieniami forum. Aby rozpocząć, wybierz grupę ustawień, w której chcesz edytować wpisy.";
$l['add_new_setting'] = "Nowy wpis ustawień";
$l['add_new_setting_desc'] = "Dodawaj wpisy ustawień do swojego forum.";
$l['modify_existing_settings'] = "Modyfikuj wpisy ustawień";
$l['modify_existing_settings_desc'] = "Modyfikuj istniejące wpisy ustawień swojego forum.";
$l['add_new_setting_group'] = "Nowa grupa ustawień";
$l['add_new_setting_group_desc'] = "Twórz grupy ustawień aby skategoryzować poszczególne wpisy ustawień.";
$l['edit_setting_group'] = "Edytuj grupę ustawień";
$l['edit_setting_group_desc'] = "Edytuj istniejące grupy ustawień.";

$l['title'] = "Tytuł";
$l['description'] = "Opis";
$l['group'] = "Grupa";
$l['display_order'] = "Kolejność wyświetlania";
$l['name'] = "Identyfikator";
$l['name_desc'] = "Ten unikalny identyfikator używany będzie w przypadkach, gdy trzeba będzie odwołać się do tego wpisu (w skryptach, tłumaczeniach i szablonach).";
$l['group_name_desc'] = "Ten unikalny identyfikator będzie używany przez system tłumaczeń.";
$l['text'] = "Tekst";
$l['numeric_text'] = "Wartość liczbowa";
$l['textarea'] = "Pole tekstowe";
$l['yesno'] = "Wybór Tak / Nie";
$l['onoff'] = "Wybór Włączone / Wyłączone";
$l['select'] = "Lista rozwijana";
$l['radio'] = "Pola jednokrotnego wyboru";
$l['checkbox'] = "Pola wielokrotnego wyboru";
$l['language_selection_box'] = "Pole wyboru języka";
$l['forum_selection_box'] = "Pole wyboru działu";
$l['forum_selection_single'] = "Pojedyncze pole wyboru działu";
$l['group_selection_box'] = "Pole wyboru grupy";
$l['group_selection_single'] = "Pojedyncze pole wyboru grupy";
$l['adminlanguage'] = "Pole wyboru języka panelu administratora";
$l['cpstyle'] = "Pole wyboru stylów panelu administratora";
$l['php'] = "Wykonany kod PHP";
$l['type'] = "Typ";
$l['extra'] = "Dodatkowe";
$l['extra_desc'] = "Jeżeli ten wpis ma postać listy rozwijanej albo pól jedno- lub wielokrotnego wyboru, podaj pary (klucz=wartość) elementów do wyświetlenia. Oddzielaj elementy znakiem nowej linii. Jeżeli jest to kod PHP, wpisz go tutaj, a zostanie wykonany.";
$l['value'] = "Wartość";
$l['insert_new_setting'] = "Dodaj wpis ustawień";
$l['edit_setting'] = "Edytuj wpis ustawień";
$l['delete_setting'] = "Usuń wpis ustawień";
$l['setting_configuration'] = "Konfiguracja wpisu ustawień";
$l['update_setting'] = "Zaktualizuj wpis ustawień";
$l['save_settings'] = "Zapisz wpisy ustawień";
$l['setting_groups'] = "Grupy ustawień";
$l['bbsettings'] = "wpisów";
$l['insert_new_setting_group'] = "Wstaw nową grupę ustawień";
$l['setting_group_setting'] = "Grupa ustawień / Wpis ustawień";
$l['order'] = "Kolejność";
$l['delete_setting_group'] = "Usuń grupę ustawień";
$l['save_display_orders'] = "Zapisz kolejność wyświetlania";
$l['update_setting_group'] = "Zaktualizuj grupę ustawień";
$l['modify_setting'] = "Modyfikuj wpis ustawień";
$l['search'] = "Szukaj";
$l['plugin_settings'] = "Ustawienia pluginu";

$l['show_all_settings'] = "Pokaż wszystkie wpisy ustawień";
$l['settings_search'] = "Wyszukaj wpisy";

$l['confirm_setting_group_deletion'] = "Czy na pewno chcesz usunąć tę grupę ustawień?";
$l['confirm_setting_deletion'] = "Czy na pewno chcesz usunąć ten wpis ustawień?";

$l['error_missing_title'] = "Nie podano tytułu dla tego wpisu ustawień.";
$l['error_missing_group_title'] = "Nie podano tytułu dla tej grupy ustawień.";
$l['error_invalid_gid'] = "Nie wybrano poprawnej grupy, w której wpis miałby zostać umieszczony.";
$l['error_invalid_gid2'] = "Podążono za odnośnikiem do niepoprawnej grupy ustawień. Upewnij się, że istnieje.";
$l['error_missing_name'] = "Nie wpisano identyfikatora dla tego wpisu ustawień.";
$l['error_missing_group_name'] = "Nie wpisano identyfikatora dla tej grupy ustawień";
$l['error_invalid_type'] = "Nie wybrano poprawnego typu dla tego wpisu ustawień.";
$l['error_invalid_sid'] = "Podany wpis ustawień nie istnieje.";
$l['error_duplicate_name'] = "Podany identyfikator jest już używany przez wpis \"{1}\" - identyfikator musi być unikatowy.";
$l['error_duplicate_group_name'] = "Podany identyfikator jest już używany przez grupę ustawień \"{1}\" -- identyfikator musi być unikatowy.";
$l['error_no_settings_found'] = "Nie odnaleziono żadnych wpisów ustawień spełniających podane kryteria.";
$l['error_cannot_edit_default'] = "Domyślne wpisy i grupy ustawień nie mogą zostać edytowane lub usunięte.";
$l['error_cannot_edit_php'] = "To jest specjalny typ wpisu ustawień - nie może być edytowany.";
$l['error_ajax_search'] = "Wystąpił problem podczas wyszukiwania wpisów ustawień:";
$l['error_ajax_unknown'] = "Wystąpił nieznany błąd podczas wyszukiwania wpisów ustawień.";
$l['error_chmod_settings_file'] = "Plik ustawień \"./inc/settings.php\" nie posiada praw do zapisu. Nadaj mu uprawnienia CHMOD 777.<br />Aby uzyskać więcej informacji na temat nadawania uprawnień CHMOD, sprawdź href=\"http://docs.mybb.com/HowTo_Chmod.html\" target=\"_blank\">Dokumentację MyBB</a>.";

$l['success_setting_added'] = "Wpis ustawień został utworzony.";
$l['success_setting_updated'] = "Wpis ustawień został zaktualizowany.";
$l['success_setting_deleted'] = "Wpis ustawień został usunięty.";
$l['success_settings_updated'] = "Wpisy ustawień zostały zaktualizowane.";
$l['success_settings_updated_hiddencaptchaimage'] = '<div class="smalltext" style="font-weight: normal;">Należy pamiętać, że ustawienia
<strong>ukryte pola CAPTCHA</strong> zostały przywrócone do <strong>{1}</strong> z powodu konfliktu z <strong>{2}</strong> polem w formularzu rejestracyjnym.</div>';
$l['success_settings_updated_username_method'] = '<div class="smalltext" style="font-weight: normal;">>Należy pamiętać, że ustawienie dotyczące <b>dozwolonych metod logowania</b> nie zostało zaktualizowane z powodu wielu użytkowników korzystających z tego samego adresu e-mail w tej chwili.</div>';
$l['success_settings_updated_allowmultipleemails'] = '<div class="smalltext" style="font-weight: normal;">Należy pamiętać, że ustawienie <b>zezwalające na wielokrotne wykorzystanie tych samych maili?</b> nie może być włączone, kiedy <b>dozwoloną metodą logowania</b> jest adres e-mail.</div>';
$l['success_settings_updated_captchaimage'] = '<div class="smalltext" style="font-weight: normal;">Należy pamiętać, że ustawienie <strong> obrazków CAPTCHA przy rejestracji i postach</strong> został przywrócony do <strong>MyBB Default Captcha</strong> z powodu braku klucza publicznego / prywatnego.</div>';
$l['success_display_orders_updated'] = "Kolejność wyświetlania została zaktualizowana.";
$l['success_setting_group_added'] = "Grupa ustawień została utworzona.";
$l['success_setting_group_updated'] = "Grupa ustawień została zaktualizowana.";
$l['success_setting_group_deleted'] = "Grupa ustawień została usunięta.";
$l['success_duplicate_settings_deleted'] = "Wszystkie zduplikowane grupy ustawień zostały usunięte.";

$l['searching'] = 'Wyszukiwanie...';
$l['search_error'] = 'Wystąpił błąd podczas zwracania wyników wyszukiwania:';
$l['search_done'] = 'Zrobione!';