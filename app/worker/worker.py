import os
import time
import datetime

from exceptions import UnsupportedMinDelay

def execute_command(**kargs):
	command_name = kargs['command_name']
	executed_file = kargs['executed_file']
	arg = kargs['arg']

	executed_code =  os.system(command_name + executed_file + arg)

	return executed_code


def writeLogs(path_log, results):
	fp = open(path_log, 'a')
	fp.write('\n'.join(results))
	fp.close()




command = 'php '
path_to_console = '/var/www/app/bin/console '
error_log_path = '/worker/error_log.txt'
success_log_path = '/worker/success_log.txt'

timestamp_script_run = time.time()
flush_time = 20
min_delay = 5

commands = [
	{'command_name':'number:writefile', 'time':3800, 'last_execution_time': 0}

]


current_work_time = 0
executed_code = 0

success_results = []
failure_results = []
invalid_results = []

current_date = None

try:
	for current_command in commands:
		if current_command['time'] < min_delay:
			raise UnsupportedMinDelay('Минимальный диапазон между выполнением заданий должен составлять {0} секунд'.format(min_delay))


	while True:
		for current_command in commands:

			current_work_time = time.time() - timestamp_script_run

			if ((current_work_time - current_command['last_execution_time']) > current_command['time']) or (current_command['last_execution_time'] == 0):

				executed_code = execute_command(command_name = command, executed_file = path_to_console, arg = current_command['command_name'])

				now = datetime.datetime.now()
				now_str = '{0}-{1}-{2} {3}:{4}:{5}'.format(now.year, now.month, now.day, now.hour, now.minute, now.second)

				if executed_code == 0:
					success_results.append('{0} | Задача с именем {1} завершилась успешно'.format(now_str, current_command['command_name']))

				elif executed_code == 1:
					failure_results.append('{0} | Ошибка во время выполнения задачи с именем {1}'.format(now_str, current_command['command_name']))

				elif executed_code == 2:
					invalid_results.append('{0} | Неправильный формат использования задачи с именем {1}'.format(now_str, current_command['command_name']))

				current_command['last_execution_time'] = current_work_time

			if current_work_time > flush_time:
			
				if success_results:
					writeLogs(success_log_path, success_results)
				if failure_results or invalid_results:
					writeLogs(error_log_path, failure_results + invalid_results)


				success_results = []
				failure_results = []
				invalid_results = []

				flush_time = current_work_time + 20

			time.sleep(min_delay)


except UnsupportedMinDelay as e:
	print(e)




