import React from 'react';
import { useState } from 'react';
// import {  Link } from "react-router-dom";
import { NavLink } from 'react-router-dom'
import Logo from '../../images/Logo-othilie-nardin-def.png';
// import { ReactComponent as Hamburger } from '../../assets/icons/hamburger.svg';
import '../../styles/Navbar.css';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBars } from '@fortawesome/free-solid-svg-icons';

export function Navbar() {
  const [showNavbar, setShowNavbar] = useState(false)

  const handleShowNavbar = () => {
    setShowNavbar(!showNavbar)
  }
  return (
    <nav className="navbar">
      <div className="container">
        <div className="logo">
          <img className="Logo" src={Logo} alt="Logo Othilie NARDIN" />
        </div>
        <div className="menu-icon" onClick={handleShowNavbar}>
          <FontAwesomeIcon className="icon" icon={faBars} />
        </div>
        <div className={`nav-elements  ${showNavbar && 'active'}`}>
          <ul>
            <li>
              <NavLink to="/">Acceuil</NavLink>
            </li>
            <li>
              <NavLink to="/information_complémentaire">Extraits</NavLink>
            </li>
            <li>
              <NavLink to="/">Personnages</NavLink>
            </li>
            <li>
              <NavLink to="/a_propos_de_l_autrice">A propos l'auteur</NavLink>
              
            </li>
            <li>
            {/* <svg className="svgb" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg> */}
              <NavLink to="/espace_utilisateur">Compte</NavLink>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  )
}

