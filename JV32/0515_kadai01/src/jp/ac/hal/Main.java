package jp.ac.hal;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

public class Main {
	
	public static void main(String[] args) throws IOException {
		System.out.println("【ex1】");
		System.out.println("hello");
		
		System.out.println("【ex2】");
		int i = 0;
		while(i < 11){
			System.out.println(i);
			i++;
		}
		
		System.out.println("【ex3】");
		int j = 0;
		while(j < 11){
		    if(j % 2 == 0){
		        System.out.println(j);
		    }
		    j++;
		}
		
		System.out.println("【ex4】");
		BufferedReader br
		 = new BufferedReader(new InputStreamReader(System.in));
		System.out.print("名前を入力してください：");
		String inputData = br.readLine();
		System.out.println("ようこそ" + inputData + "さん!");
		
		System.out.println("【ex5】");
        System.out.print("得点を入力してください：");
        int score = Integer.parseInt(br.readLine());
        // 評価を出力する
        
        if (100 < score || score < 0) {
            System.out.println("0~100の値を入力してください。");
        } else if (90 <= score) {
            System.out.println("評価：A");
        } else if (70 <= score) {
            System.out.println("評価：B");
        } else if (50 <= score) {
            System.out.println("評価：C");
        } else if (30 <= score) {
            System.out.println("評価：D");
        } else {
            System.out.println("評価：E");
        }
        
		System.out.println("【ex6】");
		System.out.print("半径を入力してください：");
		int radius = Integer.parseInt(br.readLine());
        int area = (int) (radius * radius * 3.14);
        System.out.println("面積は" + area + "です。");
		
		System.out.println("【op】");
		int totalPrice = 0;
        int tax = 0;

        while (true) {
            System.out.println("単価と数量を入力してください。終了するは単価に-1を入力してください。");
            System.out.print("単価：");
            int price = Integer.parseInt(br.readLine());
            if (price == -1) break;  // 終了処理

            System.out.print("数量：");
            int quantity = Integer.parseInt(br.readLine());

            int subtotal = price * quantity;
            totalPrice += subtotal;

            System.out.println();  // 改行
        }
        
        System.out.println("合計金額：" + totalPrice);
        int taxx = (int) (totalPrice * 1.1);
        System.out.println("税込金額：" + taxx);
	}
}
