<?php
/**
 * MyBB 1.8 Polish Language Pack
 * Copyright © 2008-2014 MyBBoard.pl Team
 * See readme.html for copyright information. | Zapoznaj sie z plikiem czytaj_to.html.
 * Autorzy: bryn, DamYan, gigi, matc, szulcu | Testerzy: hippie
 */

$l['task_manager'] = "Menadżer zadań";
$l['add_new_task'] = "Nowe zadanie";
$l['add_new_task_desc'] = "Planuj zadania, które będą automatycznie wykonywane przez MyBB.";
$l['edit_task'] = "Edytuj zadanie";
$l['edit_task_desc'] = "Modyfikuj opcje dla planowanych zadań.";
$l['task_logs'] = "Logi zadań";
$l['view_task_logs'] = "Logi zadań";
$l['view_task_logs_desc'] = "Wszystkie informacje o wynikach oraz błędach napotkanych podczas wykonywania zadań będą znajdować się na poniższej liście pod warunkiem, że włączono opcję zapisywania logów dla danego zadania. Wpisy starsze niż 30 dni są automatycznie usuwane.";
$l['scheduled_tasks'] = "Zaplanowane zadania";
$l['scheduled_tasks_desc'] = "Zarządzaj zaplanowanymi zadaniami, które będą wykonywane przez MyBB. Aby uruchomić zadanie, kliknij ikonę znajdującą się po prawej stronie nazwy zadania.";

$l['title'] = "Nazwa";
$l['short_description'] = "Opis";
$l['task_file'] = "Plik zadania";
$l['task_file_desc'] = "Wybierz plik zadania, które ma być wykonywane.";
$l['time_minutes'] = "Czas - minuty";
$l['time_minutes_desc'] = "Wpisz listę minut w których zadanie ma być uruchamiane, oddzielając poszczególne wartości (0-59) przecinkiem. Wpisz \"*\" jeżeli chcesz, by zadanie było uruchamiane w każdej minucie.";
$l['time_hours'] = "Czas - godziny";
$l['time_hours_desc'] = "Wpisz listę godzin w których zadanie ma być uruchamiane, oddzielając poszczególne wartości (0-23) przecinkiem. Wpisz \"*\" jeżeli chcesz, by zadanie było uruchamiane w każdej godzinie.";
$l['time_days_of_month'] = "Czas - dni miesiąca";
$l['time_days_of_month_desc'] = "Wpisz listę dni miesiąca w których zadanie ma być uruchamiane, oddzielając poszczególne wartości (1-31) przecinkiem. Wpisz \"*\" jeżeli chcesz, by zadanie było uruchamiane niezależnie od dnia miesiąca.";
$l['every_weekday'] = "Każdy dzień tygodnia";
$l['sunday'] = "Niedziela";
$l['monday'] = "Poniedziałek";
$l['tuesday'] = "Wtorek";
$l['wednesday'] = "Środa";
$l['thursday'] = "Czwartek";
$l['friday'] = "Piątek";
$l['saturday'] = "Sobota";
$l['time_weekdays'] = "Czas - dni tygodnia";
$l['time_weekdays_desc'] = "Wybierz dni tygodnia, w których zadanie ma być uruchamiane. Przytrzymaj CTRL klikając, by zaznaczyć więcej niż jedno pole. Wybierz \"Każdy dzień tygodnia\" jeżeli chcesz, by zadanie było wykonywane niezależnie od dnia tygodnia.";
$l['every_month'] = "Każdy miesiąc";
$l['time_months'] = "Czas - miesiące";
$l['time_months_desc'] = "Wybierz miesiące, w których zadanie ma być uruchamiane. Przytrzymaj CTRL klikając, by zaznaczyć więcej niż jedno pole. Wybierz \"Każdy miesiąc\" jeżeli chcesz, by zadanie było wykonywane w każdym miesiącu.";
$l['enabled'] = "Zadanie włączone?";
$l['enable_logging'] = "Zapisywać logi?";
$l['save_task'] = "Zapisz zadanie";
$l['task'] = "Zadanie";
$l['date'] = "Data";
$l['data'] = "Dane";
$l['no_task_logs'] = "Nie ma logów dla żadnego z zaplanowanych zadań.";
$l['next_run'] = "Następne wykonanie";
$l['run_task_now'] = "Wykonaj teraz to zadanie";
$l['disable_task'] = "Wyłącz zadanie";
$l['run_task'] = "Wykonaj zadanie";
$l['enable_task'] = "Włącz zadanie";
$l['delete_task'] = "Usuń zadanie";

$l['error_invalid_task'] = "Wskazane zadanie nie istnieje.";
$l['error_missing_title'] = "Nie wpisano nazwy dla planowanego zadania";
$l['error_missing_description'] = "Nie wpisano opisu dla planowanego zadania";
$l['error_invalid_task_file'] = "Wybrany plik zadania nie istnieje.";
$l['error_invalid_minute'] = "Wpisane minuty są nieprawidłowe.";
$l['error_invalid_hour'] = "Wpisane godziny są nieprawidłowe.";
$l['error_invalid_day'] = "Wpisane dni są nieprawidłowe.";
$l['error_invalid_weekday'] = "Wybrane dni tygodnia są nieprawidłowe.";
$l['error_invalid_month'] = "Wybrane miesiące są nieprawidłowe.";

$l['success_task_created'] = "Zadanie zostało utworzone.";
$l['success_task_updated'] = "Zadanie zostało zaktualizowane.";
$l['success_task_deleted'] = "Zadanie zostało usunięte.";
$l['success_task_enabled'] = "Zadanie zostało włączone.";
$l['success_task_disabled'] = "Zadanie zostało wyłączone.";
$l['success_task_run'] = "Zadanie zostało wykonane.";

$l['confirm_task_deletion'] = "Czy na pewno chcesz usunąć to zadanie?";
$l['confirm_task_enable'] = "<strong>UWAGA:</strong> Chcesz aktywować zadanie, które powinno być uruchamiane tylko i wyłącznie za pomocą cron (zobacz <a href=\"http://docs.mybb.com/Help-Task_System.html\" target=\"_blank\">Dokumentację MyBB</a> - po angielsku). Kontynuować?";
$l['no_tasks'] = "Nie ma zaplanowanych zadań na tym forum.";
