import React from 'react';
import {  Link } from "react-router-dom";
import tiktok from '../../images/tiktok.png';
import insta from '../../images/logo-insta.png'
import '../../styles/BasPage.css';

const linkStyle = {
    textDecoration: "none",
    color: '#FFFFFF'
  };

export function BasPage(){
    return(
        <footer className='BP'>
            <div className='divbp'>
                <div className='divtik'><Link to='/faq' style={linkStyle}><img className="Logotik" src={tiktok} alt="Logo Tiktok" /></Link></div>
                <diV className='divlibp'>
                    <li><Link to='/faq' style={linkStyle}>F.A.Q.</Link></li>
                    <li><Link to='/faq' style={linkStyle}>Me contacter</Link></li>
                    <li><Link to='/faq' style={linkStyle}>Mentions légales</Link></li>
                </diV>
                <div className='divinsta'><Link to='/faq' style={linkStyle}><img className="Logoinsta" src={insta} alt="Logo Insta" /></Link></div>
            </div>
        </footer>
    );
}

