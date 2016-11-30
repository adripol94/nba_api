package Model;

import okhttp3.Headers;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class TeamCallback implements Callback<Team> {

	@Override
	public void onFailure(Call<Team> arg0, Throwable arg1) {
		int i;
		i = 0;
		
	}

	@Override
	public void onResponse(Call<Team> arg0, Response<Team> resp) {
		Team equipo;
		String contenType;
		int code;
		String mensaje;
		boolean esExitoso;
		Headers cabecera;
		
		equipo = resp.body();
		cabecera = resp.headers();
		contenType = cabecera.get("Content-Type");
		code = resp.code();
		esExitoso = resp.isSuccessful();
		mensaje = resp.message();
		
		System.out.println(equipo.toString());
	}
}
