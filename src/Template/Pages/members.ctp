<?php
$this->assign('pageTitle', 'Membres');
?>
<div class=" row">
    <div class="col-lg-12">
        <div id="members" class=" center">
            <iframe id="membersIframe" src="https://docs.google.com/spreadsheets/d/1kFnn_0aTNAWlGuEw6T98adrcjdIS4W-YopM8an3_5yc/pubhtml?gid=1680566637&amp;single=true&amp;widget=true&amp;headers=false">
            Loading...
            </iframe>
            <br>
            <a href="https://docs.google.com/spreadsheets/d/1kFnn_0aTNAWlGuEw6T98adrcjdIS4W-YopM8an3_5yc/edit#gid=1680566637"
               target="_blank">
                Editer le gDoc
            </a>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#newMembers" aria-expanded="false" aria-controls="newMembers">
                Suivi des nouvelles adhésions
            </button>

            <div class="collapse" id="newMembers">
                <div class="well">
                    <section>
                        <h2>ICI IL Y AURA UN IFRAME POUR VOIR LES NOUVELLES ADHESIONS DIRECTEMENT DEPUIS LES RESULTATS DU FORMULAIRE D'ADHESION</h2>
                    </section>
                    <a href=""
                       target="_blank">
                        Editer le gDoc
                    </a>

                    <br>
                    <br>

                    <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#newMembers" aria-expanded="true">
                        Fermer le Document
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
