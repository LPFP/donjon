<?php
$this->assign('pageTitle', 'Clés');
?>
<section id="keys" class=" center">
    <h2>Qui a les clefs ?</h2>
    <a href="https://docs.google.com/spreadsheets/d/1ahKXqBw5CIEFOe6QnuwEqHRp5r3sg5iSZ3MSGej7X8o/edit#gid=888024120" target="_blank">
        Historique
    </a>
    <br/>
    <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->
    <iframe id="keys" src="https://docs.google.com/spreadsheets/d/1ahKXqBw5CIEFOe6QnuwEqHRp5r3sg5iSZ3MSGej7X8o/pubhtml?gid=0&amp;single=true&amp;widget=true&amp;headers=false">
    Loading...							
    </iframe>

    <br/>
    <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#keysFormDiv" aria-expanded="false" aria-controls="keysFormDiv">
        Formulaire de prise des clefs
    </button>
    <div class="collapse" id="keysFormDiv">
        <div class="well">
            <section>						  

                <!-- code génerer par googleDoc depuis le menu Fichier > Publier -->	
                <iframe id="keysForm" src="https://docs.google.com/forms/d/10lx-V5nh5Wb7n-Kg7e0jmEsaMxWbTGgz-0dmjeOwzzU/viewform?gid=0&amp;single=true&amp;widget=true&amp;headers=false">
                Loading...
                </iframe>
            </section>
            <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#keysFormDiv" aria-expanded="true">
                Fermer le Formulaire
            </button>
        </div>
    </div>
</section> 