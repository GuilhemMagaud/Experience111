import React from 'react';
import {  Link } from "react-router-dom";
const navbar= () =>{
  return (
  <div>
    <li>
      
    </li>
    <li>
      <Link to="/">Acceuil</Link>
    </li>
    <li>
      <Link to="/information_complémentaire">Extraits</Link>
    </li>
    <li>
      <Link to="/">Personnages</Link>
    </li>
    <li>
      <Link to="/a_propos_de_l_autrice">A propos l'auteur</Link>
    </li>
    <li>
      <Link to="/espace_utilisateur">Compte</Link>
    </li>
  </div>
  );
}
export default navbar;