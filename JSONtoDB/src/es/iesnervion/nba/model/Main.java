package es.iesnervion.nba.model;

import java.io.FileNotFoundException;

public class Main {

	public static void main(String[] args) {
		try {
						
			GenerateTeams obj = new GenerateTeams("assets/nba.json");
			Team[] e = obj.getArray();
			
			
			
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		}
		

	}
}
