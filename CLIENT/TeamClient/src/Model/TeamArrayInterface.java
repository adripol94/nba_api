package Model;

import java.util.List;

import retrofit2.Call;
import retrofit2.http.GET;

/**
 * Interface que se usará para sacar un array de servidor!
 * @author adripol1994
 *
 */
public interface TeamArrayInterface {
	@GET("Team")
	Call<List<Team>> getTeam();
}
