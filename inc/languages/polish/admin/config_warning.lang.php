<?php
/**
 * MyBB 1.8 Polish Language Pack
 * * Copyright © 2008-2018 MyBBoard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu, Conors, Divir | Testerzy: hippie
 */

$l['warning_system'] = "System ostrzeżeń";
$l['warning_types'] = "Typy ostrzeżeń";
$l['warning_types_desc'] = "Zarządzaj listą typów ostrzeżeń, które będą przyznawane użytkownikom.";
$l['add_warning_type'] = "Nowy typ";
$l['add_warning_type_desc'] = "Twórz nowe typy ostrzeżeń. Dla danego typu możesz definiować liczbę punktów dodawanych do poziomu ostrzeżenia użytkownika oraz czas, po jakim przedawni się przyznane ostrzeżenie.";
$l['edit_warning_type'] = "Edytuj typ ostrzeżeń";
$l['edit_warning_type_desc'] = "Edytuj wybrany typ ostrzeżeń. Dla danego typu możesz definiować liczbę punktów dodawanych do poziomu ostrzeżenia użytkownika oraz czas, po jakim przedawni się przyznane ostrzeżenie.";
$l['warning_levels'] = "Poziomy ostrzeżeń";
$l['warning_levels_desc'] = "Poziomy ostrzeżeń definiują działania wobec użytkownika, który przekroczy określony limit ilości ostrzeżeń (wyrażony w procentach). Określając poziomy ostrzeżeń można automatycznie zbanować użytkownika albo usunąć jego niektóre przywileje.";
$l['add_warning_level'] = "Nowy poziom";
$l['add_warning_level_desc'] = "Twórz nowe poziomy ostrzeżeń. Możesz definiować działania wobec użytkownika, gdy przekroczy określony poziom ostrzeżeń (wyrażony w procentach).";
$l['edit_warning_level'] = "Edytuj poziom ostrzeżeń";
$l['edit_warning_level_desc'] = "Definiuj działania wobec użytkownika, gdy przekroczy określony poziom ostrzeżeń (wyrażony w procentach).";

$l['percentage'] = "Wartość procentowa";
$l['action_to_take'] = "Podejmowane działanie";
$l['move_banned_group'] = "Przenieś do grupy zbanowanych ({3}) przez {1} {2}";
$l['move_banned_group_permanent'] = "Przenieś do grupy zbanowanych ({1}) na zawsze";
$l['suspend_posting'] = "Odbierz możliwość pisania postów przez {1} {2}";
$l['suspend_posting_permanent'] = "Odbierz możliwość pisania postów na zawsze";
$l['moderate_new_posts'] = "Moderuj nowe posty przez {1} {2}";
$l['moderate_new_posts_permanent'] = "Zawsze moderuj nowe posty";
$l['no_warning_levels'] = "Aktualnie nie ma zdefiniowanych poziomów ostrzeżeń na Twoim forum.";

$l['warning_type'] = "Typy ostrzeżeń";
$l['points'] = "Wartość punktowa";
$l['expires_after'] = "Wygasa po";
$l['no_warning_types'] = "Aktualnie nie ma zdefiniowanych typów ostrzeżeń na Twoim forum.";

$l['warning_points_percentage'] = "Wartość procentowa maksymalnej liczby punktów ostrzeżeń";
$l['warning_points_percentage_desc'] = "Wpisz liczbę z zakresu od 1 do 100.";
$l['action_to_be_taken'] = "Podejmowane działanie";
$l['action_to_be_taken_desc'] = "Wybierz działania, które zostaną podjęte wobec użytkownika, gdy przekroczy podany wyżej poziom ostrzeżenia.";
$l['ban_user'] = "Zbanuj użytkownika";
$l['banned_group'] = "Grupa zbanowanych:";
$l['ban_length'] = "Okres banowania:";
$l['suspend_posting_privileges'] = "Odbierz możliwość pisania postów";
$l['suspension_length'] = "Okres:";
$l['moderate_posts'] = "Moderuj posty";
$l['moderation_length'] = "Okres moderowania postów:";
$l['save_warning_level'] = "Zapisz poziom ostrzeżeń";

$l['title'] = "Nazwa";
$l['points_to_add'] = "Punkty do dodania";
$l['points_to_add_desc'] = "Liczba punktów do dodania do poziomu ostrzeżeń użytkownika.";
$l['warning_expiry'] = "Wygaśnięcie ostrzeżenia";
$l['warning_expiry_desc'] = "Po jakim czasie od daty jego przyznania ostrzeżenie ma uzyskać status \"przedawnione\"?";
$l['save_warning_type'] = "Zapisz typ ostrzeżeń";

$l['expiration_hours'] = "godzin(y)";
$l['expiration_days'] = "dzień (dni)";
$l['expiration_weeks'] = "tydzień (tygodni)";
$l['expiration_months'] = "miesiąc (miesięcy)";
$l['expiration_never'] = "nigdy";
$l['expiration_permanent'] = "Na zawsze";

$l['error_invalid_warning_level'] = "Podany poziom ostrzeżeń nie istnieje.";
$l['error_invalid_warning_percentage'] = "Nie wpisano poprawnej wartości procentowej dla ostrzeżenia. Wartość ta musi zawierać się w przedziale od 1 do 100.";
$l['error_invalid_warning_type'] = "Podany typ ostrzeżeń nie istnieje.";
$l['error_missing_action_type'] = "Wybierz jedno z działań, która ma być podejmowane w przypadku przekroczenia określonego poziomu ostrzeżeń.";
$l['error_missing_type_title'] = "Nie podano tytułu dla tego typu ostrzeżeń";
$l['error_missing_type_points'] = "Nie podano prawidłowej liczby punktów do dodania dla tego typu ostrzeżeń. Należy wprowadzić wartość większą niż 0 ale nie większą niż {1}";

$l['success_warning_level_created'] = "Poziom ostrzeżeń został utworzony.";
$l['success_warning_level_updated'] = "Poziom ostrzeżeń został zaktualizowany.";
$l['success_warning_level_deleted'] = "Wybrany poziom ostrzeżeń został usunięty.";
$l['success_warning_type_created'] = "Typ ostrzeżeń został utworzony.";
$l['success_warning_type_updated'] = "Typ ostrzeżeń został zaktualizowany.";
$l['success_warning_type_deleted'] = "Wybrany typ ostrzeżeń został usunięty";

$l['confirm_warning_level_deletion'] = "Czy na pewno chcesz usunąć ten poziom ostrzeżeń?";
$l['confirm_warning_type_deletion'] = "Czy na pewno chcesz usunąć ten typ ostrzeżeń?";
