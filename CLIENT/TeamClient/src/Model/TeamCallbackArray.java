package Model;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class TeamCallbackArray implements Callback<List<Team>>{

	@Override
	public void onFailure(Call<List<Team>> arg0, Throwable e) {
		System.out.println(e.getMessage());
		
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

}
