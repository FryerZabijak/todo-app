# Todo aplikace v Laravel s použitím Tailwind CSS a Post CSS

Tento repositář obsahuje zdrojový kód todo aplikace v PHP frameworku Laravel. Aplikace umožňuje uživatelům vytvářet seznamy úkolů a jednotlivé úkoly v rámci těchto seznamů. Aplikace byla vyvinuta pomocí populárního frameworku Laravel a využívá Tailwind CSS pro stylování a Post CSS pro optimalizaci CSS.

## Návod na instalaci

1. Nejprve si zkopírujte repozitář na svůj lokální počítač pomocí příkazu: 
`git clone https://github.com/FryerZabijak/laravel_todo_app.git`

2. V adresáři s projektem spusťte příkaz:
`composer install`

3. Vytvořte soubor `.env` a nakonfigurujte jej podle svých potřeb. Můžete použít soubor `.env.example` jako vzor.
4. Vygenerujte aplikační klíč pomocí příkazu:
`php artisan key:generate`
5. Vytvořte prázdnou databázi pro vaši aplikaci.
6. V souboru `.env` nastavte připojení k databázi a spusťte migrace pomocí příkazu:
`php artisan migrate`
Můžete obnovit a vygenerovat i základní data pomocí `php artisan migrate:refresh --seed`
7. Spusťte vývojový server pomocí příkazu:
`php artisan serve`

## Použité technologie

- Laravel - PHP framework pro vývoj webových aplikací
- Tailwind CSS - utility-first CSS framework pro rychlé a snadné stylování
- Post CSS - nástroj pro transformaci a optimalizaci CSS
- Alpine.js - framework pro vývoj interaktivních webových aplikací s použitím JavaScriptu

## Funkce aplikace

- Registrace / Přihlášení
- Přístup k úkolům pouze aktuálního uživatele
- Vytváření nových úkolů
- Přidávání, úprava a mazání úkolů
- Označování úkolů jako hotové