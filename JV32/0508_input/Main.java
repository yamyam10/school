package jp.ne.hal;

public class Main{
	
	public static void main(String[] args) {
		
//		System.out.println("ad"+"cd");
		
		int i = 0;
		while(i < 5){
			System.out.println("No." + i);
			i++;
		}
		
		for(int j = 0; j < 3; j++) {
			System.out.println("第" + (j + 1) + "回");
		}
		
		for(int j = 0; j < 3; j++) {
			System.out.println(j);
		}
	}
}