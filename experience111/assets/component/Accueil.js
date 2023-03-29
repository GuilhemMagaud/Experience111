import React from 'react';
import couverture from '../images/Couv-E111.png';
import amazone from '../images/logo-amazon.png';
import triangle from '../images/polygon 1.png'
import '../styles/Accueil.css';

function Acceuil(){

    const textmodif ="secret-text";

    const secretText = (e) =>{
        textmodif = "visible-text";
    }

    return(
        <div className='acc'>
            <h1 className='titreAcc'>EXPERIENCE 111,Le Jeu:</h1>
            <div className='imgcouv'><img className="Couverture" src={couverture} alt="Couverture"/></div>
            <div className='resum'>
                <p onClick={ secretText() }><img className="Triangle" src={triangle} alt="Triangle"/> Résumé</p>
                <div className={{textmodif}}>
                    <p>Lily se réveille dans son lycée.</p>
                    <p>Contrairement à ce que l’on pourrait croire, elle ne s’est pas endormie en  cours... Elle est prisonnière d’un psychopathe dans une sorte d’Escape Game. Cinq de ses camarades sont piégés avec notre héroïne.</p>
                    <p>Tous n’ont aucun souvenir de leur vie d’avant.<br/>Faut-il qu’ils s’entraident? Ou bien des sacrifices sont la seule option? Car malgré les apparences ce lieu pourrait biern avoir un secret terrible qui pourrait leur coûter la vie...</p>
                    <p>Expériences scientifiques, mensonges, trahison...</p>
                    <p>Retrouvez un monde dystopique d’où personne ne pourrait en ressortir vivant...</p>
                    <p>La mort n’est-elle pas le prix à payer pour la liberté ?</p>
                </div>
            </div>
            <div className='resum'>
                <p><img className="Triangle" src={triangle} alt="Triangle"/> Détail du produit</p>
                <div className={{textmodif}}>
                    <p>Editeure: Othilie Nardin</p>
                    <p>Langue: Français</p>
                    <p className='specialp'>Broché:</p>
                    <p>ISBN-13: 979-10-415-1060-3</p>
                    <p>Poids de l’article:................................</p>
                    <p>Dimensions:................................</p>
                    <p>Commentaire client:</p>
                </div>
            </div>
            <div className='amazonebut'>
                <img className="Amazone" src={amazone} alt="Amazone"/>
                <p className='amazonep'>A retrouver dès maintenant sur Amazon</p>
            </div>
        </div>
    )
}

export default Acceuil;
