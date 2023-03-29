import React from 'react';
import Accueil from './Accueil';
import UserSpace from './UserSpace';
import APPautrice from './APPautrice';
import FAQ from './FAQ';
import InfoComplementaire from './InfoComplementaire';



function RouteDistribution(){

    const dimSelec = document.getElementById("root");
    const valDim = dimSelec.getAttribute("value");

    /*console.log('valeur :');
    console.log(valDim);*/
    if(valDim == null){
        return <div>
            <Accueil />
        </div>
    }
    if(valDim == 'espace-utilisateur'){
        return <div>
            <UserSpace />
        </div>
    }
    if(valDim == 'information-complémentaire'){
        return <div>
            <InfoComplementaire />
        </div>
    }
    if(valDim == 'a-propos-de-l-autrice'){
        return <div>
            <APPautrice />
        </div>
    }
    if(valDim == 'faq'){
        return <div>
            <FAQ />
        </div>
    }
}


export default RouteDistribution;