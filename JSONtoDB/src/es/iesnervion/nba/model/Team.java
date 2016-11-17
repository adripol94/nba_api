package es.iesnervion.nba.model;
// city, abrebiacion, state, division

/**
 * @author apol
 *
 */
public class Team {
	
	private String full_name;
	private String city;
	private String abbreviation;
	private String state;
	private String division;
	
	public Team(String full_name, String city, String abrebiation, String state, String division) {
		super();
		this.full_name = full_name;
		this.city = city;
		this.abbreviation = abrebiation;
		this.state = state;
		this.division = division;
	}
	
	public String getFull_name() {
		return full_name;
	}
	
	public void setFull_name(String full_name) {
		this.full_name = full_name;
	}
	
	public String getCity() {
		return city;
	}
	
	public void setCity(String city) {
		this.city = city;
	}
	
	public String getAbrebiation() {
		return abbreviation;
	}
	
	public void setAbrebiation(String abrebiacion) {
		this.abbreviation = abrebiacion;
	}
	
	public String getState() {
		return state;
	}
	
	public void setState(String state) {
		this.state = state;
	}
	
	public String getDivision() {
		return division;
	}
	
	public void setDivision(String division) {
		this.division = division;
	}

	@Override
	public String toString() {
		return "Team [full_name=" + full_name + ", city=" + city + ", abbreviation=" + abbreviation + ", state=" + state
				+ ", division=" + division + "]";
	}
	
	
}
