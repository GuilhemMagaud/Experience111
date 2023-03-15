import React, {Component} from 'react';
import UserSpace from './UserSpace';
import RouteDistribution from './RouteDistribution';
import InfoComplementaire from './InfoComplementaire';
import APPautrice from './APPautrice';
import FAQ from './FAQ';
import { BrowserRouter as Router, Routes, Route, Link } from "react-router-dom";

class ReactRoute extends Component{
	
	render(){
		return(
			<div>
				<Routes>
					<Route exact path="/" element={< RouteDistribution />} />
                    <Route exact path="/espace-utilisateur" element={< UserSpace />} />
                    <Route exact path="/information-complémentaire" element={< InfoComplementaire />} />
                    <Route exact path="/a-propos-de-l-autrice" element={< APPautrice />} />
                    <Route exact path="/faq" element={< FAQ />} />
				</Routes>
			</div>
		)
	}
}

export default ReactRoute;