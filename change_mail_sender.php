// copia questo codice dentro al file functions.php del tuo tema child di WordPress

add_filter( 'wp_mail_from_name', function( $name ) {
    return 'Marco M';
});


add_filter( 'wp_mail_from', function( $email ) {
    return 'marco.m@prova.it';
});
