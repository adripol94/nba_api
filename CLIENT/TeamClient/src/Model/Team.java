package Model;


public class Team {
    private int team_id;
    private String team_name;
    private String first_name;
    private String last_name;
    private boolean active;
    private String city;
    private String abbreviation;
    private String state;
    private String division;
    private String conference;


	public int getTeam_id() {
		return team_id;
	}




	public void setTeam_id(int team_id) {
		this.team_id = team_id;
	}




	public String getTeam_name() {
		return team_name;
	}




	public void setTeam_name(String team_name) {
		this.team_name = team_name;
	}




	public String getFirst_name() {
		return first_name;
	}




	public void setFirst_name(String first_name) {
		this.first_name = first_name;
	}




	public String getLast_name() {
		return last_name;
	}




	public void setLast_name(String last_name) {
		this.last_name = last_name;
	}




	public boolean isActive() {
		return active;
	}




	public void setActive(boolean active) {
		this.active = active;
	}




	public String getCity() {
		return city;
	}




	public void setCity(String city) {
		this.city = city;
	}




	public String getAbbreviation() {
		return abbreviation;
	}




	public void setAbbreviation(String abbreviation) {
		this.abbreviation = abbreviation;
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




	public String getConference() {
		return conference;
	}




	public void setConference(String conference) {
		this.conference = conference;
	}




	@Override
	public String toString() {
		return "Team [team_id=" + team_id + ", team_name=" + team_name + ", first_name=" + first_name + ", last_name="
				+ last_name + ", active=" + active + ", city=" + city + ", abbreviation=" + abbreviation + ", state="
				+ state + ", division=" + division + ", conference=" + conference + "]";
	}
    
    
}
