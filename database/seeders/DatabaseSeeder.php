<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    const DESCPROD = '<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est. </p><p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>';

    public function run() {

        /*DB::table('companies')->insert([
            ['id' => 1, 'P_Iva' => '12345678910', 'Ragione_Sociale' => 'Coal', 'Localizzazione' => 'Daje Roma Dajeeee 10', 'Descrizione' => 'Lorem Ipsum', 'Logo' => 'lebron.jpg'],
            ['id' => 2, 'P_Iva' => '11121314151', 'Ragione_Sociale' => 'Crai', 'Localizzazione' => 'Evviva Gesu 33', 'Descrizione' => 'Lorem Ipsum', 'Logo' => 'lebron.jpg'],
            ['id' => 3, 'P_Iva' => '61718192021', 'Ragione_Sociale' => 'Oasi', 'Localizzazione' => 'Piazza Roma 5', 'Descrizione' => 'Lorem Ipsum', 'Logo' => 'lebron.jpg'],
            ['id' => 4, 'P_Iva' => '22232425262', 'Ragione_Sociale' => 'Simply', 'Localizzazione' => 'Via Gianfranco 3', 'Descrizione' => 'Lorem Ipsum', 'Logo' => 'lebron.jpg'],
            ['id' => 5, 'P_Iva' => '72829303132', 'Ragione_Sociale' => 'Lidl', 'Localizzazione' => 'Via Gigio 14', 'Descrizione' => 'Lorem Ipsum', 'Logo' => 'lebron.jpg'],
            ['id' => 6, 'P_Iva' => '33343536373', 'Ragione_Sociale' => 'Eurospin', 'Localizzazione' => 'Via Franco 12', 'Descrizione' => 'Lorem Ipsum', 'Logo' => 'lebron.jpg'],
        ]);*/

        DB::table('registers')->insert([
            ['ID_Registrato' => 1, 'Utente' => 'useruser', 'Password' => Hash::make('Yg4Xzxjb'), 'Nome' => 'Franco', 'Cognome' => 'Rossi', 'Genere' => 'Uomo', 'Tipo' => 'user', 'Email' => 'franco@rossi.it', 'Telefono' => '3333102759', 'Data_Nascita' => '1945/10/05'],
            ['ID_Registrato' => 2, 'Utente' => 'staffstaff', 'Password' => Hash::make('Yg4Xzxjb'), 'Nome' => 'Adele', 'Cognome' => 'Bianchi', 'Genere' => 'Donna', 'Tipo' => 'staff', 'Email' => 'adele@bianchi.it', 'Telefono' => '3663102759', 'Data_Nascita' => '1994/08/10'],
            ['ID_Registrato' => 3, 'Utente' => 'adminadmin', 'Password' => Hash::make('Yg4Xzxjb'), 'Nome' => 'LeBron', 'Cognome' => 'James', 'Genere' => 'Uomo', 'Tipo' => 'admin', 'Email' => 'lebron@james.it', 'Telefono' => '3493102759', 'Data_Nascita' => '2001/11/22'],
        ]);

        DB::table('offers')->insert([
            ['ID_Offerta' => 1, 'Descrizione' => self::DESCPROD, 'Scadenza' => '1945/10/05', 'Immagine' => 'lebron.jpg', 'ID_Azienda' => 2],
            ['ID_Offerta' => 2, 'Descrizione' => self::DESCPROD, 'Scadenza' => '2024/10/05', 'Immagine' => 'lebron.jpg', 'ID_Azienda' => 1],
            ['ID_Offerta' => 3, 'Descrizione' => self::DESCPROD, 'Scadenza' => '2047/10/05', 'Immagine' => 'lebron.jpg', 'ID_Azienda' => 4],
            ['ID_Offerta' => 4, 'Descrizione' => self::DESCPROD, 'Scadenza' => '2000/10/05', 'Immagine' => 'coup.jpg', 'ID_Azienda' => 1],
            ['ID_Offerta' => 5, 'Descrizione' => self::DESCPROD, 'Scadenza' => '1492/10/12', 'Immagine' => 'lebron.jpg', 'ID_Azienda' => 5],
            ['ID_Offerta' => 6, 'Descrizione' => self::DESCPROD, 'Scadenza' => '1789/07/14', 'Immagine' => 'lebron.jpg', 'ID_Azienda' => 6],
        ]);
    }

}
