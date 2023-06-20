package jp.ac.hal;

public class Car {
	//直下にかけるのは、次の二つ
	//フィールド（データ）
	//メソッド（処理）
	
	//フィールド定義
	//->変数宣言
	int num;
	double gas;
	
	//メソッド定義
	void show() {
		System.out.println("ナンバー：" + this.num);
		System.out.println("ガソリン：" + this.gas);
	}
	
	void showCar() {
		System.out.println("これから車の情報を出力します。");
		this.show();
	}
	
	void setNum(int num) {
		this.num = num;
	}
	
	void setNumGas(int num, double gas) {
		this.num = num;
		this.gas = gas;
	}
	
	int getNum() {
		return this.num;
	}
	

}
