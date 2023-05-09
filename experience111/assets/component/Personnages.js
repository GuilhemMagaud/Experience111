import React, { useEffect, useState } from 'react';
import PersonnagesCard from "./PersonnagesCard";
import separation from "../images/Finalseparation3.png";
import lily from "../images/silhouette_lily1.png";
import david from "../images/silhouette_david1.png";
import sam from "../images/silhouette_sam-removebg-preview1.png";
import shawn from "../images/silhouette_shawwn1.png";
import shadow from "../images/shadow_silhouette1.png";

function Personnages() {

    const image = [
        {
            "id": 1,
            "nom": "Lily",
            "part1": "N° du patient: 111 272 168 55",
            "part2": "Aptitudes physiques : Natation",
            "part3": "Etat psychologique : Stable",
            "part4": "Programme de sommeil : Cauchemar_5.3",
            "part5": "Notes : La patiente présente des signes d’angoisse face à l’enfermement. Le stress lui révèle des aptitudes au combat rapproché.",
            "image": lily
        },
        {
            "id": 2,
            "nom": "David",
            "part1": "N° du patient: 111 171 168 35",
            "part2": "Aptitudes physiques : Endurance",
            "part3": "Etat psychologique : Stable",
            "part4": "Programme de sommeil : Cauchemar_7.0",
            "part5": "Notes : Le patient reste lucide. Pour gérer l’angoisse de la situation il créé des liens avec les autres patients.",
            "image": david
        },
        {
            "id": 3,
            "nom": "Sam",
            "part1": "N° du patient: 111 273 168 91",
            "part2": "Aptitudes physiques : Tire à l’arc",
            "part3": "Etat psychologique : Stable",
            "part4": "Programme de sommeil : Cauchemar_4.1",
            "part5": "Notes : La patiente est calme et posée est présence des autres patients. En revanche, pleure toutes les nuits à causes des mauvais rêves.",
            "image": sam
        },
        {
            "id": 4,
            "nom": "Shawn",
            "part1": "N° du patient: 111 172 168 50",
            "part2": "Aptitudes physiques : lancé de poids",
            "part3": "Etat psychologique : Stable",
            "part4": "Programme de sommeil : Cauchemar_5.3",
            "part5": "Notes : Le patient ne semble pas perturbé par les événements. Il a vite développé des aptitudes pour se servir des armes à feu.",
            "image": shawn
        },
        {
            "id": 5,
            "nom": "Shadow",
            "part1": "Nom de code : Shadow", 
            "part2": "Nom : Confidentiel",
            "part3": "Prénom : Confidentiel",
            "part4": "Département : 168, science de confidentiel",
            "part5": "Sujet de l’étude : L’expérience 111 a pour but d’évaluer CONFIDENTIEL dans un environnement connu et altéré par un danger.",
            "image": shadow
        }
    ]

    return(
        <div>
            <h1 style={{textAlign: "center"}}>Personnages</h1>
            {image.map((i) => 
                <div key={i.id}>
                    <PersonnagesCard nom={i.nom} part1={i.part1} part2={i.part2} part3={i.part3} part4={i.part4} part5={i.part5} image={i.image}/>
                    <img style={{ height: "3.8em", marginLeft: "5em"}} src={separation} />
                </div>
            )}
            
        </div>
    )

}
export default Personnages;