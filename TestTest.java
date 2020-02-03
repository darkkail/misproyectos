// Generated by Selenium IDE
import org.junit.Test;
import org.junit.Before;
import org.junit.After;
import static org.junit.Assert.*;
import static org.hamcrest.CoreMatchers.is;
import static org.hamcrest.core.IsNot.not;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.firefox.FirefoxDriver;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.remote.RemoteWebDriver;
import org.openqa.selenium.remote.DesiredCapabilities;
import org.openqa.selenium.Dimension;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.interactions.Actions;
import org.openqa.selenium.support.ui.ExpectedConditions;
import org.openqa.selenium.support.ui.WebDriverWait;
import org.openqa.selenium.JavascriptExecutor;
import org.openqa.selenium.Alert;
import org.openqa.selenium.Keys;
import java.util.*;
import java.net.MalformedURLException;
import java.net.URL;
public class TestTest {
  private WebDriver driver;
  private Map<String, Object> vars;
  JavascriptExecutor js;
  @Before
  public void setUp() {
    driver = new ChromeDriver();
    js = (JavascriptExecutor) driver;
    vars = new HashMap<String, Object>();
  }
  @After
  public void tearDown() {
    driver.quit();
  }
  @Test
  public void test() {
    // Test name: test
    // Step # | name | target | value | comment
    // 1 | open | /webpay/ |  | 
    driver.get("http://localhost:8888/webpay/");
    // 2 | setWindowSize | 1359x727 |  | 
    driver.manage().window().setSize(new Dimension(1359, 727));
    // 3 | click | css=.btn |  | 
    driver.findElement(By.cssSelector(".btn")).click();
    // 4 | click | css=.method:nth-child(2) > h3 |  | 
    driver.findElement(By.cssSelector(".method:nth-child(2) > h3")).click();
    // 5 | click | id=visa-card-show |  | 
    driver.findElement(By.id("visa-card-show")).click();
    // 6 | click | css=.credit-form |  | 
    driver.findElement(By.cssSelector(".credit-form")).click();
    // 7 | click | id=visa-card-show |  | 
    driver.findElement(By.id("visa-card-show")).click();
    // 8 | type | id=visa-card-show | 4051 8856 0044 6623 | 
    driver.findElement(By.id("visa-card-show")).sendKeys("4051 8856 0044 6623");
    // 9 | click | id=password-invalid |  | 
    driver.findElement(By.id("password-invalid")).click();
    // 10 | type | id=password-invalid | 123 | 
    driver.findElement(By.id("password-invalid")).sendKeys("123");
    // 11 | click | css=.button |  | 
    driver.findElement(By.cssSelector(".button")).click();
    // 12 | click | css=.button |  | 
    driver.findElement(By.cssSelector(".button")).click();
    // 13 | selectFrame | index=1 |  | 
    driver.switchTo().frame(1);
    // 14 | click | id=rutClient |  | 
    driver.findElement(By.id("rutClient")).click();
    // 15 | type | id=rutClient | 11.111.111-1 | 
    driver.findElement(By.id("rutClient")).sendKeys("11.111.111-1");
    // 16 | click | id=passwordClient |  | 
    driver.findElement(By.id("passwordClient")).click();
    // 17 | type | id=passwordClient | 123 | 
    driver.findElement(By.id("passwordClient")).sendKeys("123");
    // 18 | click | css=td:nth-child(1) > input:nth-child(1) |  | 
    driver.findElement(By.cssSelector("td:nth-child(1) > input:nth-child(1)")).click();
    // 19 | click | css=td > input |  | 
    driver.findElement(By.cssSelector("td > input")).click();
    // 20 | selectFrame | relative=parent |  | 
    driver.switchTo().defaultContent();
    // 21 | click | css=.full-screen:nth-child(2) |  | 
    driver.findElement(By.cssSelector(".full-screen:nth-child(2)")).click();
    // 22 | click | css=.full-screen:nth-child(2) .row |  | 
    driver.findElement(By.cssSelector(".full-screen:nth-child(2) .row")).click();
    // 23 | click | linkText=Ir a detalle de la compra |  | 
    driver.findElement(By.linkText("Ir a detalle de la compra")).click();
  }
}
