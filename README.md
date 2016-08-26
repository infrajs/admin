# Интерфейс для авторизации глобального администратора

## Установка через composer

```
{
	"require":{
		"infrajs/admin":"~1"
	}
}
```

## Использование

- vendor/infrajs/admin/ - авторизоваться
- vendor/infrajs/admin/config.php - посмотреть конфиг
- vendor/infrajs/admin/flush.php - очистить кэш

Логин и пароль указываются в файле [.infra.json](https://github.com/infrajs/config). 
Подробней описано в расширении [infrajs/access](https://github.com/infrajs/access)