package jp.ne.hal;

import java.io.BufferedReader;
import java.io.InputStreamReader;

//import java.io.*;

public class Main{
	
	public static void main(String[] args) throws i0excel{
		BufferedReader br
		 = new BufferedReader(new InputStreamReader(System.in));
		
		System.out.println("金額");
		
		//入力
		String inputData = br.readLine();
		System.out.println(inputData);
		
		final double TAX = 0.1;
		
		double ans = Integer.parseInt(inputData) * (1 + TAX);
		
		
		int ans = ((int)inputData) * (1 + TAX);
		
		System.out.println("税込み金額");
		System.out.println(ans);
	}
}