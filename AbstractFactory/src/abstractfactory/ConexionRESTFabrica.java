package abstractfactory;

import abstractfactory.inter.FabricaAbstracta;
import abstractfactory.inter.IConexionBD;
import abstractfactory.inter.IConexionREST;
import abstractfactory.inter.impl.ConexionRESTCompras;
import abstractfactory.inter.impl.ConexionRESTNoArea;
import abstractfactory.inter.impl.ConexionRESTVentas;

public class ConexionRESTFabrica implements FabricaAbstracta {

	@Override
	public IConexionREST getREST(String area) {
		if (area == null) {
			return new ConexionRESTNoArea();
		}
		if (area.equalsIgnoreCase("COMPRAS")) {
			return new ConexionRESTCompras();
		} else if (area.equalsIgnoreCase("VENTAS")) {
			return new ConexionRESTVentas();
		}

		return new ConexionRESTNoArea();
	}

	@Override
	public IConexionBD getBD(String motor) {
		return null;
	}
}
