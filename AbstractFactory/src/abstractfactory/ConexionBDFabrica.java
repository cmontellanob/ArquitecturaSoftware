package abstractfactory;

import abstractfactory.inter.FabricaAbstracta;
import abstractfactory.inter.IConexionBD;
import abstractfactory.inter.IConexionREST;
import abstractfactory.inter.impl.ConexionMySQL;
import abstractfactory.inter.impl.ConexionOracle;
import abstractfactory.inter.impl.ConexionPostgreSQL;
import abstractfactory.inter.impl.ConexionSQLServer;
import abstractfactory.inter.impl.ConexionVacia;

public class ConexionBDFabrica implements FabricaAbstracta{

	@Override
	public IConexionBD getBD(String motor) {
		if (motor == null) {
			return new ConexionVacia();
		}
		if (motor.equalsIgnoreCase("MYSQL")) {
			return new ConexionMySQL();
		} else if (motor.equalsIgnoreCase("ORACLE")) {
			return new ConexionOracle();
		} else if (motor.equalsIgnoreCase("POSTGRE")) {
			return new ConexionPostgreSQL();
		} else if (motor.equalsIgnoreCase("SQL")) {
			return new ConexionSQLServer();
		}

		return new ConexionVacia();
	}

	@Override
	public IConexionREST getREST(String area) {
		return null;
	}
}
