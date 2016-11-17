package es.iesnervion.nba.model;

import java.io.FileNotFoundException;
import java.io.FileReader;

import com.google.gson.Gson;
import com.google.gson.JsonIOException;
import com.google.gson.JsonSyntaxException;

/* Based in: http://stackoverflow.com/questions/29965764/how-to-parse-json-file-with-gson */

public class GenerateTeams {
	private String source;
	
	public GenerateTeams(String source) throws FileNotFoundException {
		this.source = source;
	}
	
	public Team[] getArray() throws JsonSyntaxException, JsonIOException, FileNotFoundException {
		Gson array = new Gson();
	    Team[] teams = array.fromJson(new FileReader(source), Team[].class);
	    return teams;
	}
}
