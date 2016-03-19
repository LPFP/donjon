Installation
############

.. Process in terminal ::
        cd /your/wanted/dir/
        git clone https://github.com/LPFP/donjon.git  
        cd donjon
        composer install

.. Lauch embedded app server ::
        bin/cake server &

.. Create Acls tables (permissions) ::
        bin/cake migrations migrate -p Acl

.. Create app tables ::
        bin/cake migrations migrate

.. IMPORTANT : Add this to your database conf as table name are using reseved SQL words ::
    'quoteIdentifiers' => true,