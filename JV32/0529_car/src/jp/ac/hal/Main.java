package jp.ac.hal;

public class Main {
	public static void main(String[] args){
		Car car;
		
		//実体化（インスタンス化）
		car = new Car();
		
		//フィールドにアクセスするには「ピリオド」
		car.num = 123123;
		car.gas = 20.5;
		
		Car car2 = new Car();
		
		//メソッド呼び出しも「ピリオド」
		car.show();
		car.show();
		
		car.showCar();
		
		car.setNum(456789);
		System.out.println(car.num);
		
		car.setNumGas(999,99.9);
		System.out.println(car.num);
		System.out.println(car.gas);
		
		System.out.println(car.getNum());
	}
}
