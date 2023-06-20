package jp.ac.hal;

public class Robot {
	int id;
	String name;
	
	Robot(){
		System.out.println("コンストラクタ動作");
		this.id = 0;
		this.name = "未設定";
	}
	Robot(int id){
		// 自コンストラクタ呼び出し
		this();
		
		this.id = id;
	}
}
