package Model;

import retrofit2.Call;
import retrofit2.http.GET;
import retrofit2.http.Path;

public interface TeamInterface {
	//@GET("/Team/{id}") //cual es mi ruta???
	@GET("Team/{id}")
	Call<Team> getTeam(@Path("id") int id);
	
}
