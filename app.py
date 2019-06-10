from flask import Flask , render_template, request
import webbrowser
import time
import pyautogui
from pynput.mouse import Button, Controller
import time
#==============
app = Flask(__name__)


@app.route('/')
def index():
	return render_template('index.html')
@app.route('/', methods=['POST'])
def process():
	name = request.form ['site']
	if 'gledalica.com' in name:
		webbrowser.open_new(name)
		time.sleep(4.5)
		mouse = Controller()
		mouse.position = (700, 700)
		mouse.scroll(0,-470)
		time.sleep(0.5)
		mouse.click(Button.left, 3)
		time.sleep(1)
		pyautogui.hotkey('alt', 'f4')
		pyautogui.hotkey('alt', 'f4')
	elif 'filmovi.infopult.net' in name:
		webbrowser.open_new(name)
		time.sleep(4.5)
		mouse = Controller()
		mouse.position = (700, 700)
		mouse.click(Button.left, 1)
		time.sleep(1)
		pyautogui.hotkey('alt', 'f4')
	elif 'vipserije.com' in name:
		webbrowser.open_new(name)
		time.sleep(4.5)
		mouse = Controller()
		mouse.position = (700, 500)
		mouse.click(Button.left, 3)
		time.sleep(1)
		pyautogui.hotkey('ctrl', 'w')
		pyautogui.hotkey('ctrl', 'w')
	else:
		return render_template('error.html')
		
		
	if name == '':
		return render_template('error.html')
	else:
		return render_template('index.html')







if __name__ == '__main__':
     app.run(host='localhost', debug=True)