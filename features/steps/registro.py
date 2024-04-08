from behave import *
import unittest
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service as ChromeService
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options
import json
import time
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

with open('/Applications/XAMPP/xamppfiles/htdocs/ISST-G16/features/data.json', 'r') as file:
    data = json.load(file)


@step('the entrance the web')
def step_impl(self):
    service = ChromeService(executable_path=r'/Applications/XAMPP/xamppfiles/htdocs/ISST-G16/features/chromedriver')
    # chrome_options = Options()
    # chrome_options.add_argument("start-maximized")
    web = "http://localhost/ISST-G16/"
    self.driver = webdriver.Chrome(service=service)
    self.driver.maximize_window()
    self.driver.get(web)




@step('click on {xpath}')
def sept_impl(self, xpath):
    button_xpath = data[f'{xpath}']
    button = self.driver.find_element(By.XPATH, button_xpath)
    wait = WebDriverWait(self.driver, 10)
    element = wait.until(EC.presence_of_element_located((By.XPATH, button_xpath)))
    button.click()
    time.sleep(2)



@step("write on '{xpath}'")
def step_impl(self):
     busqueda = self.driver.find_element(By.XPATH, search_bar_xpath)
     busqueda.send_keys('skirt')
     busqueda.send_keys(Keys.ENTER)
     time.sleep(2)


@step("write on login")
def step_impl(self):
     busqueda = self.driver.find_element(By.XPATH, data[f'login_box'])
     busqueda.send_keys('prueba')
     time.sleep(2)


@step("write on password")
def step_impl(self):
     busqueda = self.driver.find_element(By.XPATH, data[f'password_box'])
     busqueda.send_keys('prueba')
     busqueda.send_keys(Keys.ENTER)
     time.sleep(2)
     busqueda.send_keys(Keys.ENTER)
     time.sleep(2)