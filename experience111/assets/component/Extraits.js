import React from 'react';
import { makeStyles } from '@material-ui/core/styles';
import Typography from '@material-ui/core/Typography';
import Grid from '@material-ui/core/Grid';
import Paper from '@material-ui/core/Paper';
import Image1 from '../images/ImageLivre.jpg';
import Image2 from '../images/ImageLivre1.jpg';

const useStyles = makeStyles((theme) => ({
  root: {
    flexGrow: 1,
    padding: theme.spacing(3),
  },
  paper: {
    padding: theme.spacing(2),
    margin: 'auto',
    maxWidth: 800,
  },
  image: {
    width: '100%',
  },
}));

function Extraits() {
  const classes = useStyles();

  return (
    <div className={classes.root}>
      <Paper className={classes.paper}>
        <Grid container spacing={2}>
          <Grid item xs={12} sm={6}>
            <Typography variant="body1" gutterBottom>
            Je me trouvais dans une pièce entièrement blanche, il n'y avait aucune fenêtre et aucune autre issue qu’une porte transparente qui donnait sur un long couloir vide et sombre. Les lumières blanches des néons au plafond m’éblouissaient. J’étais en tenue d’hôpital et dans cette pièce j'étais seule entre quatre murs. Pourquoi étais-je ici ? Je ne me sentais pas à l'aise, je ne voulais pas rester : il fallait que je m'échappe. Que j’échappe à cette présence que je sentais tout autour de moi. Je fouillais du regard la pièce mais elle était vide comme une cellule, une cellule étrangement propre...Les cheveux de ma nuque étaient dressés. Je me précipitais alors vers l’unique porte mais celle-ci me résistait. Elle était verrouillée. Je jetais un coup d’œil à mon reflet dans la vitre, un frisson me parcourut le dos : il était là… Je me retournais et un homme se trouvait face à moi, tout de noir vêtu, je ne distinguais pas son visage, il n’en avait pas. La lumière m'aveuglait en s’intensifiant. Soudain, une substance rouge écarlate commença à couler du plafond, tachant les murs immaculés et formant des flaques au sol. Une odeur métallique m'envahit les narines et la réalité me frappa : du sang ! L'inconnu restait de marbre mais il me regardait comme si j'étais une souris prise au piège.
            </Typography>
          </Grid>
          <Grid item xs={12} sm={6}>
            <img src={Image1} alt="Image 1" className={classes.image} />
          </Grid>
          <Grid item xs={12}>
            <Typography variant="body1" gutterBottom>
            Il était si grand et on aurait dit que sa noirceur absorbait la lumière de cet endroit. Je me retournais vers la porte et frappait dessus en appelant au secours. Le verre résistait, personne ne venait. Je baissais les yeux vers mes pieds nus que le sang chaud commençait à recouvrir. La nausée me vint. Au-dessus de ma tête, les néons clignotaient. Il fallait que je m'échappe. Je saisis la poignée encore une fois et la porte s'ouvrit sur le boyau noir. Un spot s'alluma, suivi d'un autre et encore un autre... Tout en moi se décomposait, une terreur m'envahit, au fur et à mesure que les lumières s'allumaient, les ténèbres m'envahissaient.
            </Typography>
          </Grid>
          <Grid item xs={12} sm={6}>
            <img src={Image2} alt="Image 2" className={classes.image} />
          </Grid>
          <Grid item xs={12} sm={6}>
            <Typography variant="body1" gutterBottom>
            Ce couloir était rempli de cadavres.
Leurs sangs se mêlaient à celui de la pièce. Je voyais mes parents, mes amis mais aussi des visages inconnus. Je ne savais pas quoi faire, une boule se forma dans ma gorge et un nœud me serra l'estomac. Une main se posa sur mon épaule. Je me retournais en sursaut. Ma respiration s'accélérait. L'homme en noir se pencha vers moi, m'enveloppant de sa noirceur glaciale, et me murmura à l’oreille :
- Lily...
            </Typography>
          </Grid>
        </Grid>
      </Paper>
    </div>
  );
}

export default Extraits;
