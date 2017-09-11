import static io.restassured.RestAssured.given;
import io.restassured.RestAssured;
import io.restassured.http.ContentType;
import static org.hamcrest.Matchers.equalTo;

import org.testng.annotations.Test;

public class Get {

	@Test
	public void getPlaceAPI() {
		// TODO Auto-generated method stub

		// BaseURL or Host
		RestAssured.baseURI = "https://maps.googleapis.com";

		given()
		
				.param("location", "-33.8670522,151.1957362").param("radius", "500")
				.param("key", "AIzaSyCkuztg6XpaRc2_zy1r9-Lh2_3wyQs6Lk8").when().get("/maps/api/place/nearbysearch/json")
				.then().assertThat().statusCode(200).and().contentType(ContentType.JSON).and()

				.body("results[0].name", equalTo("Sydney Showboats")).and()

				/* .body("results[0].vicinity", equalTo("Sydney")).and() */.header("Server", "pablo");

	}

}
