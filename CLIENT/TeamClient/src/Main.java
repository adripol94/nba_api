import java.util.List;
import java.util.concurrent.TimeUnit;

import Model.Team;
import Model.TeamArrayInterface;
import Model.TeamCallback;
import Model.TeamCallbackArray;
import Model.TeamInterface;
import retrofit2.Call;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

//http://www.androidtutorialpoint.com/networking/retrofit-android-tutorial/

public class Main {

	private static final String SERVER_URL = "http://nba.api/";

	public static void main(String[] args) {
		Retrofit retrofit = new Retrofit.Builder()
                .baseUrl(SERVER_URL)
                .addConverterFactory(GsonConverterFactory.create())
                .build();
		
		//Obtener Array
		System.out.println("OBTENER UN ARRAY:");
		get(retrofit);
		
		//Necesario para apreciar el resultado!
		try {
			TimeUnit.SECONDS.sleep(5);
		} catch (InterruptedException e) {
			e.printStackTrace();
		} 
		
		//Obtener 1 objeto
		System.out.println("OBTENER 1 OBJETO:");
		get(1, retrofit);
		
		//IMPORTANT!: a la hora de obtener un objeto la sentencia tarda tiempo en ejecutarse
		// por eso es necesaria dejarla al final para que se aprecie el resultado.
        
	}
	
	private static void get(int id, Retrofit r) {
		TeamInterface interfaz = r.create(TeamInterface.class);
		TeamCallback callback = new TeamCallback();
		Call<Team> call = interfaz.getTeam(id);
		call.enqueue(callback);
	}
	
	private static void get(Retrofit r) {
		TeamArrayInterface interfaz = r.create(TeamArrayInterface.class);
		TeamCallbackArray callback = new TeamCallbackArray();
        Call<List<Team>> call = interfaz.getTeam();
        call.enqueue(callback);
	}
	
	
}
