package Model;


import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class TeamCallback implements Callback<Team> {

	@Override
	public void onFailure(Call<Team> arg0, Throwable e) {
		System.out.println(e.getMessage());
		
	}

	@Override
	public void onResponse(Call<Team> arg0, Response<Team> resp) {
		Team team;
		
		team = resp.body();
		
		
		System.out.println(team);
	}
}
