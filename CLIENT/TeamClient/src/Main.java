import java.io.IOException;
import java.util.List;

import com.google.gson.Gson;

import Model.Team;
import Model.TeamArrayInterface;
import Model.TeamCallback;
import Model.TeamInterface;
import okio.*;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class Main {

	private static final String SERVER_URL = "http://nba.api/";

	public static void main(String[] args) {
		Retrofit retrofit = new Retrofit.Builder()
                .baseUrl(SERVER_URL)
                .addConverterFactory(GsonConverterFactory.create())
                .build();
 
        TeamArrayInterface service = retrofit.create(TeamArrayInterface.class);
 
        Call<List<Team>> call = service.getTeam();
 
        
        call.enqueue(new Callback<List<Team>>() {

			@Override
			public void onFailure(Call<List<Team>> arg0, Throwable arg1) {
				System.out.println(arg1.getMessage());
			}

			@Override
			public void onResponse(Call<List<Team>> arg0, Response<List<Team>> resp) {
				 try {
					 
	                    List<Team> teams = resp.body();
	 
	                    for (int i = 0; i < teams.size(); i++) {
	                    	System.out.println(teams.get(i));
	                       
	                    }
	 
	 
	                } catch (Exception e) {
	                    e.printStackTrace();
	                }
				
			}
		});
	}
}
