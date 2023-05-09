import React, { useState } from 'react';
import couverture from '../images/Couv-E111.png';
import amazone from '../images/logo-amazon.png';
import triangle from '../images/polygon 1.png'
import '../styles/Accueil.css';

function Acceuil(){

    const [rot, setRot] = useState('0deg');
    const [textmodif, setTextmodif] = useState('none');
    const secretText = () =>{
        if(textmodif == "none"){
            setTextmodif("contents");
            setRot("90deg");
        }
        else if(textmodif == "contents"){
            setTextmodif("none");
            setRot("0deg");
        }
    }

    const [rot1, setRot1] = useState('0deg');
    const [textmodif1, setTextmodif1] = useState('none');
    const secretText1 = () =>{
        if(textmodif1 == "none"){
            setTextmodif1("contents");
            setRot1("90deg");
        }
        else if(textmodif1 == "contents"){
            setTextmodif1("none");
            setRot1("0deg");
        }
    }

    return(
        <div className='acc'>
            <h1 className='titreAcc'>EXPERIENCE 111,Le Jeu:</h1>
            <div className='imgcouv'><img className="Couverture" src={couverture} alt="Couverture"/></div>
            <div className='resum'>
                <p onClick={() => secretText()}><img style={{rotate: rot}} className="Triangle" src={triangle} alt="Triangle"/> Résumé</p>
                <div style={{ display: textmodif}}>
                    <p>Lily se réveille dans son lycée.</p>
                    <p>Contrairement à ce que l’on pourrait croire, elle ne s’est pas endormie en  cours... Elle est prisonnière d’un psychopathe dans une sorte d’Escape Game. Cinq de ses camarades sont piégés avec notre héroïne.</p>
                    <p>Tous n’ont aucun souvenir de leur vie d’avant.<br/>Faut-il qu’ils s’entraident? Ou bien des sacrifices sont la seule option? Car malgré les apparences ce lieu pourrait biern avoir un secret terrible qui pourrait leur coûter la vie...</p>
                    <p>Expériences scientifiques, mensonges, trahison...</p>
                    <p>Retrouvez un monde dystopique d’où personne ne pourrait en ressortir vivant...</p>
                    <p>La mort n’est-elle pas le prix à payer pour la liberté ?</p>
                </div>
            </div>
            <div className='resum'>
                <p onClick={() => secretText1()}><img style={{rotate: rot1}} className="Triangle" src={triangle} alt="Triangle"/> Détail du produit</p>
                <div style={{ display: textmodif1}}>
                    <p>Editeure: Othilie Nardin</p>
                    <p>Langue: Français</p>
                    <p className='specialp'>Broché:</p>
                    <p>ISBN-13: 979-10-415-1060-3</p>
                    <p>Poids de l’article: 549 g</p>
                    <p>Dimensions:15.24 x 1.85 x 22.86 cm</p>
                </div>
            </div>
            
            <div className='amazonebut'>
                <a href='https://www.amazon.fr/Exp%C3%A9rience-111-jeu-Othilie-Nardin/dp/B0C1JBHXSN/ref=sr_1_1?crid=1C2FPWEL35LH&keywords=experience+111&qid=1683668406&sprefix=experience+111%2Caps%2C2342&sr=8-1' style={{textDecoration: "none", color: "black", display: "flex", justifyContent: "start"}}>
                <img className="Amazone" src={amazone} alt="Amazone"/>
                <p className='amazonep'>A retrouver dès maintenant sur Amazon</p>
                </a>
            </div>
            
        </div>
    )
}

export default Acceuil;
