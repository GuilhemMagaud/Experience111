import React, {Component, useState} from 'react';
import { Navbar } from './Header/Navbar';
import { BasPage } from './Footer/BasPage';
import { Link } from 'react-router-dom';


function Acceuil(){
    return(
        <div>
            <Link to="/faq">test</Link>
            <p>hello world</p>
            <footer><BasPage /></footer>
        </div>
    )
}

export default Acceuil;
