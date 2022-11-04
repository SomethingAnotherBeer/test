import requests
import json
import base64
import time

def makeGetRequest(url, headers={}):
	r = requests.get(url, headers=headers)

	return (r.status_code, r.json())


def makePostRequest(url, payload, headers={}):
	print(json.dumps(payload))
	r = requests.post(url, data=json.dumps(payload), headers=headers)

	return (r.status_code, r.json())


def printContent(status_code, content):
	print('Код ответа: {0}\nКонтент:{1}'.format(status_code, content))


def runGetContext(message, url, headers={}):
	status_code = 0
	content = ''

	print(message)
	status_code, content = makeGetRequest(url, headers)
	time.sleep(1)
	printContent(status_code, content)
	time.sleep(2)


def runPostContext(message, url, payload, headers={}):
	status_code = 0
	content = ''
	print(message)
	status_code, content = makePostRequest(url, payload, headers)
	time.sleep(1)
	printContent(status_code, content)
	time.sleep(2)


base_url = 'http://localhost/'

urls = {
	
	'reg': base_url +'registrate',
	'generate' : base_url + 'generate',
	'retrieve' : base_url + 'retrieve'
}

headers = {
	'Content-Type': 'application/json'

}

current_payload = {}

runGetContext('Попытка сгенерировать число будучи неаутентифицированным пользователем', urls['generate'], headers)


runGetContext('Попытка получить число с id 1 будучи неаутентифицированным пользователем', urls['retrieve'] + '/1', headers)


print('Далее последует попытка зарегистрировать пользователя с неверными параметрами: заменим ключ password на passsword')

current_payload = {'login':'john111', 'passsword':'111'}

runPostContext('Регистрация пользователя с логином john111 и паролем 111 (допущена ошибка)', urls['reg'], current_payload, headers)
current_payload = {'login':'john111', 'password':'111'}

runPostContext('Повторная регистрация пользователя с логином john111 и паролем 111', urls['reg'], current_payload, headers)

runPostContext('Повторим еще раз регистрацию пользователя с теми же параметрами', urls['reg'], current_payload, headers)

authorization_key = ':'.join([user_param for user_param in current_payload.values()])

headers['authorization'] = base64.b64encode(authorization_key.encode())



print("Далее в качестве заголовка запросов будет использователься заголовок 'Authorization:base64(login:password)'")
time.sleep(2)

print('Попытаемся 5 раз сгенерировать число')

for i in range(0, 5):
	runGetContext('Попытка сгенерировать число', urls['generate'], headers)

time.sleep(2)

print('Попытаемся получить числа с id от 1 до 10')

for i in range(1,11):
	runGetContext('Попытка получить число с id {0}'.format(i), urls['retrieve'] + '/'+str(i), headers)
