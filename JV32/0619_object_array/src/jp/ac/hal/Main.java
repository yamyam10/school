package jp.ac.hal;

public class Main {

	public static void main(String[] args) {
		Car[] cars;
		
		cars = new Car[3];
		
		cars[0] = new Car();
		cars[1] = new Car();
		cars[2] = new Car();
		
		cars[1].drive();
		
		Car[] cars2 = new Car[5];
		
		for(int i = 0; i < cars2.length; i++;) {
			cars2 [i] = new Car();
		}
		
		for(Car car : cars) {
			car.drive();
		}
				
	}

}
