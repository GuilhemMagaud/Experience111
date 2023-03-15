import React from 'react';
import {  Link } from "react-router-dom";
import Logo from '../../images/Logo-othilie-nardin-def.png';
import '../../styles/Navbar.css';
export function Navbar() {
  return (
  <div>
    <li>
        <img className="Logo" src={Logo} alt="Logo Othilie NARDIN" />
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
      <svg className="svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
      <Link to="/espace_utilisateur">Compte</Link>
    </li>
  </div>
  );
}
