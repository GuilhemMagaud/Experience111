import Autrice from '../images/Photo-auteur-titi.png';
import React from 'react';
import   ContactForm from './Header/Contact';
function APPautrice (){
    return (
        <div className="APPautrice">
            <img className="Autrice" src={Autrice} alt="Photo Othilie NARDIN" />
            <figcaption>Othilie Nardin</figcaption>
            <p>
            Othilie Nardin est née à Nice en 2003. Elle a commencé à écrire ses premières histoires fantaisies à l’âge de onze ans.<br/>

Passionnée par la littérature de science-fiction, c’est à travers un projet scolaire qu’elle décide d’autopublier son premier roman.<br/>

Elle s’inspire de ses rêves et cauchemars pour écrire des histoires originales et pleines de rebondissements.
            </p>
            
            <ContactForm/>
        </div>
        
       
       

    )
}
export default APPautrice;