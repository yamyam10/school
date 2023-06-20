package jp.ac.hal;

public class Main {

	public static void main(String[] args) {
		//値渡し、参照渡し
		int price =100; 
		a(price);
		System.out.println(price);
		
		int[] prices = {1,2,3};
		b(prices);
		System.out.println(prices[1]);
		
		Car car = new Car();
		System.out.println(car.num);
		c(car);
		System.out.println(car.num);
	}
	
	static void a(int price) {
		//値渡し
		System.out.println("call a");
		price = 200; 
	}
	
	static void b(int[] prices) {
		//参照渡し
		System.out.println("call b");
		prices[1] = 200; 
	}
	
	static void c(Car car) {
		car.num = 999;
	}
	
	static Car d(Car car) {
		car.num = 999;
		return car;
	}

	static void e(Car car) {
		car = new Car();
		car.num = 777;
	}
	

}
