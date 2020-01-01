<?php
/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2020 Webboard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Łukasz, Divir | Testerzy: hippie
 */

$l['custom_profile_fields'] = "Pola w profilu";
$l['custom_profile_fields_desc'] = "Edytuj, usuwaj i zarządzaj dodatkowymi polami profilu na Twoim forum.";
$l['add_profile_field'] = "Nowe pole";
$l['add_new_profile_field'] = "Nowe pole w profilu";
$l['add_new_profile_field_desc'] = "Utwórz dodatkowe pole w profilu.";
$l['edit_profile_field'] = "Edytuj pole w profilu";
$l['edit_profile_field_desc'] = "Edytuj dodatkowe pole w profilu.";

$l['title'] = "Nazwa";
$l['short_description'] = "Krótki opis";
$l['maximum_length'] = "Maksymalna długość";
$l['maximum_length_desc'] = "Liczba znaków, które można wprowadzić. Dotyczy tylko pól tekstowych.";
$l['field_length'] = "Długość pola";
$l['field_length_desc'] = "Długość tego pola. Dotyczy tylko pojedynczych i wielokrotnych pól wyboru.";
$l['display_order'] = "Kolejność wyświetlania";
$l['display_order_desc'] = "To jest kolejność dodatkowych pól w profilu w stosunku do innych pól. Liczba w tym polu nie powinna być taka sama jak w innych.";
$l['text'] = "Textbox";
$l['textarea'] = "Pole tekstowe";
$l['select'] = "Pole wyboru";
$l['multiselect'] = "Pole wyboru kilku opcji";
$l['radio'] = "Przycisk radio";
$l['checkbox'] = "Przycisk zaznaczania";
$l['field_type'] = "Typ pola";
$l['field_type_desc'] = "To jest typ pola, które zostanie pokazane.";
$l['field_regex'] = "Wyrażenie regularne";
$l['field_regex_desc'] = "Wpisz wyrażenie regularne, które będzie dopasowywane do treści wpisanej w to pole. Upewnij się, że jest ono poprawne i bezpieczne, ponieważ nie jest przeprowadzana żadna dodatkowa weryfikacja. Pozostawienie tego pola pustego oznacza, że w tworzone pole można wpisać dowolną wartość.<br />
<strong>Przykład:</strong> ([a-z0-9_\- ,.+]+)";
$l['selectable_options'] = "Wybieralne opcje?";
$l['selectable_options_desc'] = "Wpisz każdą opcję w oddzielnej linii. Tyczy się to tylko do pól wyboru, pól zaznaczania i przycisków radio.";
$l['required'] = "Wymagane?";
$l['required_desc'] = "Czy jest wymagane, aby to pole zostało uzupełnione podczas rejestracji lub edycji profilu? Zauważ, że to nie ma zastosowania, jeżeli pole jest ukryte lub jego edycja została zablokowana.";
$l['show_on_registration'] = "Pokazywać podczas rejestracji?";
$l['show_on_registration_desc'] = "Czy pole powinno być widoczne w formularzu rejestracyjnym? To ustawienie nie ma zastosowania, jeśli edycja pola została zablokowana. Ponadto, pola oznaczone jako wymagane zawsze będą wyświetlane w formularzu rejestracyjnym.";
$l['display_on_profile'] = "Pokazywać w profilu użytkownika?";
$l['display_on_profile_desc'] = "Czy zawartość tego pola powinna być wyświetlana w profilu użytkownika?";
$l['display_on_postbit'] = "Wyświetlać w opisie posta?";
$l['display_on_postbit_desc'] = "Czy to pole powinno być wyświetlane w opisie posta? To ustawienie nie zadziała, jeśli to pole jest ukryte lub jest polem tekstowym.";
$l['viewableby'] = 'Widoczne dla';
$l['viewableby_desc'] = 'Wybierz grupy użytkowników, które mogą wyświetlać zawartość tego pola..';
$l['editableby'] = 'Edytowalne przez';
$l['editableby_desc'] = 'Wybierz grupy użytkowników, które mogą edytować to pole.';
$l['min_posts_enabled'] = "Dostępne tylko dla użytkowników z określoną liczbą postów?";
$l['min_posts_enabled_desc'] = "Czy to pole może być edytowane przez użytkownika, który posiada określoną minimalną liczbę postów? Jeżeli tak, wpisz ją w pole poniżej.";
$l['parser_options'] = "Ustawienia parsowania";
$l['parse_allowhtml'] = "Zezwalaj na kod HTML.";
$l['parse_allowmycode'] = "Zezwalaj na kod MyCode.";
$l['parse_allowsmilies'] = "Zezwalaj na emotikony.";
$l['parse_allowimgcode'] = "Zezwól na tag [img].";
$l['parse_allowvideocode'] = "Zezwól na tag [video].";
$l['save_profile_field'] = "Zapisz pole profilu";
$l['name'] = "Nazwa";
$l['registration'] = "Widoczne podczas rejestracji?";
$l['editable'] = "Edytowalne?";
$l['profile'] = "Widoczne w profilu?";
$l['postbit'] = "W opisie posta?";
$l['edit_field'] = "Edytuj pole";
$l['delete_field'] = "Usuń pole";
$l['no_profile_fields'] = "W tym momencie nie ma dodatkowych pól w profilu na Twoim forum.";

$l['error_missing_name'] = "Nie wpisano tytułu dla tego dodatkowego pola w profilu";
$l['error_missing_description'] = "Nie wpisano opisu dla tego dodatkowego pola w profilu";
$l['error_invalid_fid'] = "Wybrane pole w profilu nie istnieje.";

$l['success_profile_field_added'] = "Dodatkowe pole w profilu zostało utworzone.";
$l['success_profile_field_saved'] = "Dodatkowe pole w profilu zostało zapisane.";
$l['success_profile_field_deleted'] = "Dodatkowe pole w profilu zostało usunięte.";

$l['confirm_profile_field_deletion'] = "Czy na pewno chcesz usunąć to dodatkowe pole w profilu?";
