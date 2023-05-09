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
                <div className='divtik'><a href='https://www.tiktok.com/@othilie.edition?_t=8bQi5nUmWOs&_r=1' style={linkStyle}><img className="Logotik" src={tiktok} alt="Logo Tiktok" /></a></div>
                <diV className='divlibp'>
                    <li><Link to='/faq' style={linkStyle}>F.A.Q.</Link></li>
                    <li><Link to='/a-propos-de-l-autrice' style={linkStyle}>Me contacter</Link></li>
                    <li><Link to='/legal' style={linkStyle}>Mentions légales</Link></li>
                </diV>
                <div className='divinsta'><a href='/https://www.instagram.com/othilie.edition/' style={linkStyle}><img className="Logoinsta" src={insta} alt="Logo Insta" /></a></div>
            </div>
        </footer>
    );
}

