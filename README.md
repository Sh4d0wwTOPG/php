# Demonstrace přenosu hodnot mezi PHP skripty

## Popis
Tento projekt ukazuje několik způsobů, jak přenášet data mezi dvěma PHP skripty (`a.php` a `b.php`).

## Použité metody
1. **GET**: 
   - Hodnota se předává jako součást URL (query string).
   - Odkaz: `b.php?value=<hodnota>`.

2. **POST**:
   - Hodnota se předává prostřednictvím formuláře pomocí POST metody.
   - Použití skrytého pole (`input type="hidden"`).

3. **SESSION**:
   - Hodnota je uložena na straně serveru v `$_SESSION`.

4. **COOKIE**:
   - Hodnota je uložena jako cookie a zpřístupněna skriptu.

## Jak spustit
1. Nahrajte všechny soubory na PHP server.
2. Otevřete `a.php` ve webovém prohlížeči.
3. Vyberte způsob, jak chcete hodnotu předat skriptu `b.php`.
