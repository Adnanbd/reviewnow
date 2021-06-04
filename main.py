from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
import time
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.keys import Keys

def check_login_success(email,password):
    driver = webdriver.Chrome(ChromeDriverManager().install())
    driver.set_window_size(1800,1420)
    driver.get("http://localhost:8080/reviewtest/login/login.php")
    email_field = driver.find_element_by_name('email')
    email_field.send_keys(email)
    pass_field = driver.find_element_by_name('pass')
    pass_field.send_keys(password)
    button = driver.find_element_by_name('login')
    time.sleep(2)
    button.click()
    time.sleep(2)
    alert_obj = driver.switch_to.alert
    alert_obj.accept()
    time.sleep(2)
    current_url = driver.current_url
    assert current_url == "http://localhost:8080/reviewtest/homepage/Homepage.php"

    print("Successfully Login")
    time.sleep(3)

check_login_success("mfaruk@gmail.com","1234")





