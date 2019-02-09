import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class TestUserDAO {
	String name = "";
	String password = "";
<<<<<<< HEAD

	public void select (String name, String password){
		DBConnector db = new DBConnector();
		Connection con = db.getConnection();

		String sql = "select * form test_table where user_name = ? and password = ?";
=======
	public void select(String name, String password){
		DBConnector db = new DBConnector();
		Connection con = db.getConnection();

		String sql = "select * from test_table where user_name=? and password=?";
>>>>>>> 5900d1db823bf163daa6e8c7c389bb3c11c29aea
		try{
			PreparedStatement ps = con.prepareStatement(sql);
			ps.setString(1, name);
			ps.setString(2, password);
			ResultSet rs = ps.executeQuery();
<<<<<<< HEAD

			if(rs.next()){
				System.out.println(rs.getString("user_name"));
				System.out.println(rs.getString("password"));
			}
		}catch(SQLException e){
			e.printStackTrace();
		}
		try{
			con.close();
		}catch(SQLException e){
			e.printStackTrace();
		}
=======
			if(rs.next()){
				System.out.println(rs.getString("user_name"));
				System.out.println(rs.getString("password"));

			}
		}catch (SQLException e){
			e.printStackTrace();
		}
	try{
		con.close();
	}catch (SQLException e){
		e.printStackTrace();
	}

>>>>>>> 5900d1db823bf163daa6e8c7c389bb3c11c29aea
	}

}
