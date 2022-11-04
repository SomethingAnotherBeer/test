# test

В приложении определены следующие url для доступа к ресурсам:
GET:
  - http://domainame/generate - генерация рандомного числа
  - http://domainname/retrieve/<number_id> - получение сгенерированного числа по его id
  
  
  
POST:
  - http://domainname/registrate - регистрация нового пользователя
  Параметры тела запроса 
  {
    "login": "somelogin",
    "password": "somepassword"
  }


По умолчанию в качестве доменного имени используется localhost
  
Основной код приложения расположен в папке app/app_src
  
  Демон, ответственный за выполнение задач по расписанию, расположен в папке app/worker
  
Приложение развертывается командой docker-compose up --build -d 
  
После развертывания приложение, необходимо выполнить следующие действия:
  
 Для инициализации базы данных: docker-compose run php php bin/console --no-interaction doctrine:migrations:migrate
  
 Для заполнения базы данных начальными значениями + функциональный тест приложения: python3 test/test.py
 
 Для запуска демона в фоновом режиме:
  
     1) Перейти в контейнер php: docker-compose exec php /bin/bash
  
     2) Запустить демона: python3 /worker/worker.py >> dev/null &
