import React, {Component} from 'react';
import UserSpace from './UserSpace';
import RouteDistribution from './RouteDistribution';
import SignIn from './SignIn'
 import APPautrice from './APPautrice';
import FAQ from './FAQ';
import { BrowserRouter as Router, Routes, Route, Link } from "react-router-dom";
import SignUp from './SignUp';
import LegalNotice from './LegalNotice';
import Personnages from './Personnages';
import Extraits from './Extraits';


class ReactRoute extends Component{
	
	render(){
		return(
			<div>
				<Routes>
					<Route exact path="/" element={< RouteDistribution />} />
                     <Route exact path="/espace-utilisateur" element={< UserSpace />} />
                     <Route exact path="/information-complementaire" element={< Extraits/>} /> 
                    <Route exact path="/a-propos-de-l-autrice" element={< APPautrice />} />
					<Route exact path="/connexion" element={< SignIn/>} />
					<Route exact path="/newUser" element={< SignUp/>} />
                     <Route exact path="/faq" element={< FAQ />} />  
					 <Route exact path="/legal" element={< LegalNotice />} /> 
					 <Route exact path="/personnages" element={< Personnages />} /> 
				</Routes>
			</div>
		)
	}
}

export default ReactRoute;