import React from 'react';

function PersonnagesCard(props){
    return(
        <div style={{display: "flex"}}>
            <img style={{height: "9em", marginTop: "3em"}} src={props.image} />
            <div>
                <h2 style={{backgroundColor: "#446978", color: "#C0D7F9", width: "7em", padding: "0.3em"}}>{props.nom}</h2>
                <p style={{backgroundColor: "#446978", color: "white", padding: "1em", fontSize: "0.8em"}}>{props.part1} <br />
                {props.part2} <br />
                {props.part3} <br />
                {props.part4} <br />
                {props.part5}</p>
            </div>
        </div>
    )
}

export default PersonnagesCard;