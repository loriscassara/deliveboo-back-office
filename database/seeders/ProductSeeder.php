<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'restaurant_id' => 1,
                'name' => 'Pizza Margherita',
                'ingredients' => 'Pomodoro, mozzarella, basilico',
                'price' => 8.50,
                'description' => 'Una deliziosa pizza classica con pomodoro fresco e mozzarella di
            bufala',
                'visible' => true,
                'image' => 'https://example.com/images/pizza_margherita.jpg',
            ],
            [
                'restaurant_id' => 1,
                'name' => 'Pasta alla Carbonara',
                'ingredients' => 'Pasta, uova, guanciale, pecorino romano',
                'price' => 12.90,
                'description' => 'Una prelibata pasta condita con una crema di uova e guanciale
            croccante',
                'visible' => true,
                'image' => 'https://example.com/images/pasta_carbonara.jpg',
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Hamburger Deluxe',
                'ingredients' => 'Pane, carne di manzo, formaggio, lattuga, pomodoro',
                'price' => 15.50,
                'description' => 'Un gustoso hamburger con carne di manzo, formaggio fuso e verdure
            fresche',
                'visible' => true,
                'image' => 'https://example.com/images/hamburger_deluxe.jpg',
            ],
            [
                'restaurant_id' => 2,
                'name' => 'Insalata Greca',
                'ingredients' => 'Lattuga, pomodori, cetrioli, olive, formaggio feta',
                'price' => 9.00,
                'description' => 'Una fresca insalata ispirata alla tradizione greca, con ingredienti
            genuini e saporiti',
                'visible' => true,
                'image' => 'https://example.com/images/insalata_greca.jpg',
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Sushi Misto',
                'ingredients' => 'Riso, pesce crudo assortito, alga nori, avocado',
                'price' => 22.00,
                'description' => 'Una selezione di sushi fresco e prelibato, perfetto per gli amanti della
            cucina giapponese',
                'visible' => true,
                'image' => 'https://example.com/images/sushi_misto.jpg',
            ],
            [
                'restaurant_id' => 3,
                'name' => 'Tagliata di Manzo',
                'ingredients' => 'Manzo, rucola, grana padano, aceto balsamico',
                'price' => 18.50,
                'description' => 'Una succulenta tagliata di manzo servita su un letto di rucola con
            scaglie di grana padano',
                'visible' => true,
                'image' => 'https://example.com/images/tagliata_di_manzo.jpg',
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Pollo alla Griglia',
                'ingredients' => 'Pollo, limone, aglio, erbe aromatiche',
                'price' => 14.90,
                'description' => 'Un piatto leggero e gustoso, pollo marinato con limone e erbe
            aromatiche, grigliato alla perfezione',
                'visible' => true,
                'image' => 'https://example.com/images/pollo_alla_griglia.jpg',
            ],
            [
                'restaurant_id' => 4,
                'name' => 'Spaghetti alle Vongole',
                'ingredients' => 'Spaghetti, vongole, aglio, prezzemolo, vino bianco',
                'price' => 16.50,
                'description' => 'Un classico della cucina italiana, spaghetti al dente conditi con vongole
            fresche e un tocco di aglio e prezzemolo',
                'visible' => true,
                'image' => 'https://example.com/images/spaghetti_alle_vongole.jpg',
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Taco al Pastor',
                'ingredients' => 'Carne di maiale, ananas, cipolla, coriandolo, salsa al lime',
                'price' => 10.00,
                'description' => 'Un delizioso taco ispirato alla cucina messicana, con carne di maiale
            marinata e ananas grigliato',
                'visible' => true,
                'image' => 'https://example.com/images/taco_al_pastor.jpg',
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Guacamole Fresco',
                'ingredients' => 'Avocado, pomodoro, cipolla, lime, coriandolo',
                'price' => 8.00,
                'description' => 'Un contorno fresco e gustoso, guacamole fatto in casa con avocado
            maturo, pomodoro fresco e lime',
                'visible' => true,
                'image' => 'https://example.com/images/guacamole_fresco.jpg',
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Enchiladas Verdes',
                'ingredients' => 'Pollo, tortillas di mais, salsa verde, formaggio, panna acida',
                'price' => 12.50,
                'description' => 'Un piatto tradizionale messicano, enchiladas di pollo avvolte in tortillas
            di mais e condite con salsa verde e formaggio',
                'visible' => true,
                'image' => 'https://example.com/images/enchiladas_verdes.jpg',
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Chilaquiles',
                'ingredients' => 'Tortillas di mais, uova, salsa rossa, formaggio, panna acida',
                'price' => 11.00,
                'description' => 'Una colazione messicana classica, tortillas di mais croccanti immerse
            in salsa rossa e servite con uova e formaggio',
                'visible' => true,
                'image' => 'https://example.com/images/chilaquiles.jpg',
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Burrito al Forno',
                'ingredients' => 'Manzo, fagioli neri, riso, formaggio, salsa, guacamole',
                'price' => 13.50,
                'description' => 'Un grande burrito farcito con manzo speziato, fagioli neri, riso,
            formaggio e salsa, poi cotto in forno fino a doratura',
                'visible' => true,
                'image' => 'https://example.com/images/burrito_al_forno.jpg',
            ],
            [
                'restaurant_id' => 5,
                'name' => 'Torta al Tres Leches',
                'ingredients' => 'Torta, latte condensato, latte evaporato, panna montata, ciliegie',
                'price' => 9.50,
                'description' => 'Un dolce tradizionale messicano, torta spugnosa imbevuta di tre tipi di
            latte e decorata con panna montata e ciliegie',
                'visible' => true,
                'image' => 'https://example.com/images/torta_al_tres_leches.jpg',
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Pizza Margherita',
                'ingredients' => 'Pomodoro, mozzarella, basilico',
                'price' => 8.50,
                'description' => 'Una classica pizza italiana con salsa di pomodoro, mozzarella e
            basilico fresco',
                'visible' => true,
                'image' => 'https://example.com/images/pizza_margherita.jpg',
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Pasta alla Carbonara',
                'ingredients' => 'Spaghetti, uova, guanciale, parmigiano, pepe nero',
                'price' => 12.00,
                'description' => 'Un piatto italiano classico, spaghetti conditi con uova, guanciale,
            parmigiano e pepe nero',
                'visible' => true,
                'image' => 'https://example.com/images/pasta_carbonara.jpg',
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Lasagna al Forno',
                'ingredients' => 'Pasta fresca, ragù, besciamella, parmigiano',
                'price' => 14.50,
                'description' => 'Un comfort food italiano, strati di pasta fresca, ragù di carne,
            besciamella e parmigiano, cotto al forno fino a doratura',
                'visible' => true,
                'image' => 'https://example.com/images/lasagna_al_forno.jpg',
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Insalata Caprese',
                'ingredients' => 'Pomodori, mozzarella di bufala, basilico, olio extravergine di oliva,
            sale',
                'price' => 9.00,
                'description' => "Un'insalata italiana fresca e semplice, con pomodori maturi, mozzarella
            di bufala, basilico fresco, olio extravergine di oliva e sale",
                'visible' => true,
                'image' => 'https://example.com/images/insalata_caprese.jpg',
            ],
            [
                'restaurant_id' => 6,
                'name' => 'Risotto ai Funghi Porcini',
                'ingredients' => 'Riso Arborio, funghi porcini, brodo di carne, cipolla, parmigiano',
                'price' => 15.00,
                'description' => 'Un risotto cremoso e profumato, preparato con riso Arborio, funghi
            porcini, brodo di carne, cipolla e parmigiano',
                'visible' => true,
                'image' => 'https://example.com/images/risotto_funghi_porcini.jpg',
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Pizza Margherita',
                'ingredients' => 'Pomodoro, mozzarella, basilico',
                'price' => 8.99,
                'description' => 'La classica pizza italiana con salsa di pomodoro, mozzarella e basilico
            fresco',
                'visible' => true,
                'image' => 'https://example.com/images/pizza_margherita.jpg',
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Pasta alla Carbonara',
                'ingredients' => 'Pasta, uova, pancetta, pecorino, pepe',
                'price' => 12.50,
                'description' => 'Una pasta cremosa e deliziosa con pancetta croccante, uova, pecorino
            e pepe nero',
                'visible' => true,
                'image' => 'https://example.com/images/pasta_carbonara.jpg',
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Insalata Caprese',
                'ingredients' => 'Pomodoro, mozzarella di bufala, basilico, olio d\'oliva, aceto
            balsamico',
                'price' => 9.50,
                'description' => "Un'insalata fresca e semplice con pomodoro maturo, mozzarella di
            bufala, basilico fresco e condita con olio d\'oliva e aceto balsamico",
                'visible' => true,
                'image' => 'https://example.com/images/insalata_caprese.jpg',
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Bruschetta al Pomodoro',
                'ingredients' => 'Pane, pomodoro, aglio, basilico, olio d\'oliva',
                'price' => 7.99,
                'description' => 'Pane tostato condito con pomodoro maturo, aglio, basilico e olio
            d\'oliva',
                'visible' => true,
                'image' => 'https://example.com/images/bruschetta_pomodoro.jpg',
            ],
            [
                'restaurant_id' => 7,
                'name' => 'Risotto ai Funghi Porcini',
                'ingredients' => 'Riso, funghi porcini, cipolla, vino bianco, brodo di verdure, parmigiano',
                'price' => 15.99,
                'description' => 'Un risotto cremoso e profumato preparato con riso Arborio, funghi
            porcini freschi, cipolla, vino bianco, brodo di verdure e parmigiano',
                'visible' => true,
                'image' => 'https://example.com/images/risotto_funghi.jpg',
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Hamburger Classico',
                'ingredients' => 'Pane, carne di manzo, lattuga, pomodoro, cipolla, formaggio, salsa',
                'price' => 9.99,
                'description' => 'Un classico hamburger con carne di manzo succulenta, lattuga fresca,
            pomodoro maturo, cipolla croccante, formaggio fuso e salsa speciale',
                'visible' => true,
                'image' => 'https://example.com/images/hamburger_classico.jpg',
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Insalata Caesar',
                'ingredients' => 'Lattuga romana, crostini di pane, parmigiano, salsa Caesar',
                'price' => 8.50,
                'description' => 'Un\'insalata fresca e croccante con lattuga romana, crostini di pane
            croccanti, scaglie di parmigiano e salsa Caesar cremosa',
                'visible' => true,
                'image' => 'https://example.com/images/insalata_caesar.jpg',
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Spaghetti alla Bolognese',
                'ingredients' => 'Spaghetti, carne macinata, pomodoro, cipolla, carota, sedano, vino
            rosso',
                'price' => 12.99,
                'description' => 'Una pietanza italiana classica con spaghetti al dente, salsa bolognese
            fatta in casa con carne macinata, pomodoro maturo, cipolla, carota, sedano e vino rosso',
                'visible' => true,
                'image' => 'https://example.com/images/spaghetti_bolognese.jpg',
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Sushi Misto',
                'ingredients' => 'Riso, salmone, tonno, gamberetti, avocado, alga nori, salsa di soia,
            zenzero marinato',
                'price' => 18.99,
                'description' => 'Una selezione assortita di sushi con riso appiccicoso, salmone fresco,
            tonno, gamberetti, avocado, avvolto in alga nori e servito con salsa di soia e zenzero
            marinato',
                'visible' => true,
                'image' => 'https://example.com/images/sushi_misto.jpg',
            ],
            [
                'restaurant_id' => 8,
                'name' => 'Penne all\'Arrabbiata',
                'ingredients' => 'Penne, pomodoro, peperoncino, aglio, prezzemolo',
                'price' => 10.50,
                'description' => 'Una pasta piccante e saporita con penne al dente, salsa di pomodoro,
            peperoncino piccante, aglio e prezzemolo fresco',
                'visible' => true,
                'image' => 'https://example.com/images/penne_arrabbiata.jpg',
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Pizza Margherita',
                'ingredients' => 'Base di pizza, salsa di pomodoro, mozzarella, basilico',
                'price' => 8.99,
                'description' => 'La classica pizza italiana con salsa di pomodoro fresca, mozzarella di
            bufala, e basilico',
                'visible' => true,
                'image' => 'https://example.com/images/pizza_margherita.jpg',
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Tacos al Pastor',
                'ingredients' => 'Tortillas di mais, carne di maiale marinate, ananas, cipolla, coriandolo',
                'price' => 10.50,
                'description' => 'Tacos tradizionali messicani con carne di maiale marinata, ananas,
            cipolla e coriandolo fresco',
                'visible' => true,
                'image' => 'https://example.com/images/tacos_al_pastor.jpg',
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Sushi Sashimi',
                'ingredients' => 'Pesce crudo (salmone, tonno, branzino), riso, alga nori, salsa di soia,
            wasabi',
                'price' => 22.99,
                'description' => 'Una selezione di sashimi giapponesi freschi con pesce crudo di alta
            qualità, servito con riso e condimenti tradizionali',
                'visible' => true,
                'image' => 'https://example.com/images/sushi_sashimi.jpg',
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Pasta Carbonara',
                'ingredients' => 'Spaghetti, pancetta, uova, pecorino, pepe nero',
                'price' => 12.99,
                'description' => 'Un classico italiano con spaghetti al dente, pancetta croccante, uova,
            pecorino e pepe nero',
                'visible' => true,
                'image' => 'https://example.com/images/pasta_carbonara.jpg',
            ],
            [
                'restaurant_id' => 9,
                'name' => 'Hamburger Vegano',
                'ingredients' => 'Patty di fagioli neri, lattuga, pomodoro, cipolla rossa, avocado, ketchup
            vegano',
                'price' => 11.50,
                'description' => 'Un hamburger vegano gustoso e sano con patty di fagioli neri, lattuga
            fresca, pomodoro, cipolla rossa, avocado e ketchup vegano',
                'visible' => true,
                'image' => 'https://example.com/images/hamburger_vegano.jpg',
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Spaghetti alla Carbonara',
                'ingredients' => 'Spaghetti, pancetta, uova, pecorino, pepe nero',
                'price' => 12.99,
                'description' => 'Un classico italiano con spaghetti al dente, pancetta croccante, uova,
            pecorino e pepe nero',
                'visible' => true,
                'image' => 'https://example.com/images/spaghetti_carbonara.jpg',
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Pizza Quattro Stagioni',
                'ingredients' => 'Base di pizza, salsa di pomodoro, mozzarella, funghi, prosciutto cotto,
            carciofi, olive, origano',
                'price' => 10.50,
                'description' => 'Una pizza classica italiana divisa in quattro parti rappresentanti le
            quattro stagioni, con ingredienti freschi e deliziosi',
                'visible' => true,
                'image' => 'https://example.com/images/pizza_quattro_stagioni.jpg',
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Sushi Misto',
                'ingredients' => 'Pesce crudo (salmone, tonno, branzino), riso, alga nori, salsa di soia,
            wasabi',
                'price' => 18.99,
                'description' => 'Una selezione di sushi giapponese fresco misto, con pesce crudo di
            alta qualità, servito con riso e condimenti tradizionali',
                'visible' => true,
                'image' => 'https://example.com/images/sushi_misto.jpg',
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Hamburger Classico',
                'ingredients' => 'Pane per hamburger, carne di manzo, formaggio cheddar, lattuga,
            pomodoro, cetriolo, ketchup, maionese',
                'price' => 9.99,
                'description' => 'Un classico hamburger americano con carne di manzo, formaggio
            cheddar fuso, lattuga croccante, pomodoro succoso, cetriolo fresco, ketchup e maionese su
            un morbido panino',
                'visible' => true,
                'image' => 'https://example.com/images/hamburger_classico.jpg',
            ],
            [
                'restaurant_id' => 10,
                'name' => 'Insalata Caprese',
                'ingredients' => 'Pomodori, mozzarella di bufala, basilico, olio extra vergine di oliva,
            sale, pepe',
                'price' => 8.50,
                'description' => "Un'insalata fresca e leggera con pomodori succosi, mozzarella di
            bufala, basilico fresco, condita con olio extra vergine di oliva, sale e pepe",
                'visible' => true,
                'image' => 'https://example.com/images/insalata_caprese.jpg',
            ],
        ];

        foreach ($products as $product) {
            $newProduct = new Product();
            $newProduct->fill($product);
            $newProduct->save();
        }
    }
}
