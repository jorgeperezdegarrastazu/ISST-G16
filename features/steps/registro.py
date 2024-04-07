from behave import *
import unittest
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service as ChromeService
from selenium.webdriver.common.by import By
from selenium.webdriver.chrome.options import Options

import time


@step('the entrance the web')
def step_impl(self):
    service = ChromeService(executable_path=r'/Applications/XAMPP/xamppfiles/htdocs/ISST-G16-1/features/chromedriver')
    # chrome_options = Options()
    # chrome_options.add_argument("start-maximized")
    web = "http://localhost/ISST-G16-1/"
    self.driver = webdriver.Chrome(service=service)
    self.driver.maximize_window()
    self.driver.get(web)