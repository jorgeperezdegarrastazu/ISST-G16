import json
import time

import unittest

from behave import *
from selenium import webdriver
from selenium.webdriver.chrome.options import Options
from selenium.webdriver.chrome.service import Service as ChromeService
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support.ui import Select


with open(r"/Applications/XAMPP/xamppfiles/htdocs/ISST-G16/features/data.json", 'r') as file:
    data = json.load(file)


@step('the entrance the web')
def step_impl(self):
    #PARA EL MAC DE JORGE
    service = ChromeService(executable_path=r'/Applications/XAMPP/xamppfiles/htdocs/ISST-G16/features/chromedriver_mac')
    #PARA EL WINDOWS DE OLALLA
    #service = ChromeService(executable_path=r'/Applications/XAMPP/xamppfiles/htdocs/ISST-G16/features/chromedriver.exe')
    # chrome_options = Options()
    # chrome_options.add_argument("start-maximized")
    web = "http://localhost:8080"
    self.driver = webdriver.Chrome(service=service)
    self.driver.maximize_window()
    self.driver.get(web)




@step("click on '{xpath}'")
def sept_impl(self, xpath):
     button_xpath = data[f'{xpath}']
     button = self.driver.find_element(By.XPATH, button_xpath)
     wait = WebDriverWait(self.driver, 10)
     element = wait.until(EC.presence_of_element_located((By.XPATH, button_xpath)))
     button.click()
     time.sleep(4)



@step("Write '{palabra_xpath}' on '{caja_xpath}'")
def step_impl(self, caja_xpath, palabra_xpath):
    caja = data[f'{caja_xpath}']
    busqueda = self.driver.find_element(By.XPATH, caja)
    busqueda.send_keys(palabra_xpath)
    #busqueda.send_keys(Keys.)
    time.sleep(1)


@step("select '{opcion}' on '{selector_xpath}'")
def step_impl(self, opcion, selector_xpath):
    selector = data[f'{selector_xpath}']
    select_element = self.driver.find_element(By.XPATH, selector)
    select = Select(select_element)
    select.select_by_index(opcion)  # Selecciona la tercera opción (los índices comienzan desde 0)
    time.sleep(1)

# # @step("Write on login")
# # def step_impl(self):
# #      busqueda = self.driver.find_element(By.XPATH, data[f'login_box'])
# #      busqueda.send_keys('prueba')
# #      time.sleep(2)

# # @step("Write on 'username'")
# # def step_impl(self):
# #     input_xpath = data['username']
# #     input_field = self.driver.find_element(By.XPATH, input_xpath)
# #     input_value = input("Enter username: ")
# #     input_field.send_keys(input_value)
# #     time.sleep(2)


# # @step("Write on password")
# # def step_impl(self):
# #      busqueda = self.driver.find_element(By.XPATH, data[f'password_box'])
# #      busqueda.send_keys('prueba')
# #      busqueda.send_keys(Keys.ENTER)
# #      time.sleep(2)
# #      busqueda.send_keys(Keys.ENTER)
# #      time.sleep(2)

# # @step("Write on nombre")
# # def step_impl(self, nombre):
# #     input_xpath = data[nombre]
# #     input_field = self.driver.find_element(By.XPATH, input_xpath)
# #     input_value = input("Enter value for {}: ".format(nombre))
# #     input_field.send_keys(input_value)
# #     time.sleep(2)

# # @step("Write on surname")
# # def step_impl(self, surname):
# #     input_xpath = data[surname]
# #     input_field = self.driver.find_element(By.XPATH, input_xpath)
# #     input_value = input("Enter value for {}: ".format(surname))
# #     input_field.send_keys(input_value)
# #     time.sleep(2)

# # @step("Write on 'peso'")
# # def step_impl(self):
# #     input_xpath = data['peso']
# #     input_field = self.driver.find_element(By.XPATH, input_xpath)
# #     input_value = input("Enter weight: ")
# #     input_field.send_keys(input_value)
# #     time.sleep(2)

# # @step("Write on 'altura'")
# # def step_impl(self):
# #     input_xpath = data['altura']
# #     input_field = self.driver.find_element(By.XPATH, input_xpath)
# #     input_value = input("Enter height: ")
# #     input_field.send_keys(input_value)
# #     time.sleep(2)

# # @step("Write on 'mail'")
# # def step_impl(self):
# #     input_xpath = data['mail']
# #     input_field = self.driver.find_element(By.XPATH, input_xpath)
# #     input_value = input("Enter email: ")
# #     input_field.send_keys(input_value)
# #     time.sleep(2)

# # @step("write on 'edad'")
# # def step_impl(self):
# #     input_xpath = data['edad']
# #     input_field = self.driver.find_element(By.XPATH, input_xpath)
# #     input_value = input("Enter age: ")
# #     input_field.send_keys(input_value)
# #     time.sleep(2)

# # @step("Given click on 'index'")
# # def step_impl(self):
# #     index_xpath = data['index']
# #     index_button = self.driver.find_element(By.XPATH, index_xpath)
# #     index_button.click()
# #     time.sleep(2)

# # @step("write on 'caloriasconsumidas'")
# # def step_impl(self):
# #     calorias_xpath = data['caloriasconsumidas']
# #     calorias_input = self.driver.find_element(By.XPATH, calorias_xpath)
# #     calorias_value = input("Enter consumed calories: ")
# #     calorias_input.send_keys(calorias_value)
# #     time.sleep(2)

# # @step("click on 'añadir'")
# # def step_impl(self):
# #     añadir_xpath = data['añadir']
# #     añadir_button = self.driver.find_element(By.XPATH, añadir_xpath)
# #     añadir_button.click()
# #     time.sleep(2)

# # @step("write on 'caloriasquemadas'")
# # def step_impl(self):
# #     calorias_xpath = data['caloriasquemadas']
# #     calorias_input = self.driver.find_element(By.XPATH, calorias_xpath)
# #     calorias_value = input("Enter burned calories: ")
# #     calorias_input.send_keys(calorias_value)
# #     time.sleep(2)

# # @step("click on 'añadir1'")
# # def step_impl(self):
# #     añadir_xpath = data['añadir1']
# #     añadir_button = self.driver.find_element(By.XPATH, añadir_xpath)
# #     añadir_button.click()
# #     time.sleep(2)