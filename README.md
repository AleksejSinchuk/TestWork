1 Фреймворк Ларавел
2 Развертывыние:
- Установить Опенсервер или другую подобную программу
-  Скачать  проект с репозитория
-  Создать базу данных 
-  Настроить подключение вк базе данных в файле .env
-  Создать таблици с помощью миграции
3 API:
2-е точки API :
/api/medicaments  возвращает массив значений [{"id":3,"name":"Aleks","fabricator_id":2,"substance_id":2,"price":123},{"id":4,"name":"Aleksej","fabricator_id":2,"substance_id":2,"price":1124},{"id":6,"name":"Aleksej","fabricator_id":2,"substance_id":2,"price":1124}]
/api/medicaments/6  возвращает  {"id":6,"name":"Aleksej","fabricator_id":2,"substance_id":2,"price":1124}
