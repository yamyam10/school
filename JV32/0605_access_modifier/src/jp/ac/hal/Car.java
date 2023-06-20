package jp.ac.hal;

public class Car {
	private double gas = 0;
	
	void setGas(double gas) {
		if(gas < 0 || 60 <= gas) {
			return;
		}
		this.gas = gas;
	}
}
