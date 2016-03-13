Contribute
##########

.. Load fake datas ::
        bin/cake migrations seed

.. You can use included BakeBootstrap3Crud plugin to generate basic CRUD templates for bootstrap 3 ::
        bin/cake bake template --theme BakeBootstrap3Crud --force <model-name>

.. Using command below for creating all models/controller/templates from scratch ::
        bin/cake  orm_cache clear
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force transactions           && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force transaction_types      && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force key_borrows            && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force keys                   && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force forms                  && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force offers                 && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force reports                && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force groups                 && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force groups_users           && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force profiles               && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force users                  && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force inventories            && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force objects                && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force units                  && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force calendars              && \
        bin/cake bake all --theme BakeBootstrap3Crud --prefix admin --force events                