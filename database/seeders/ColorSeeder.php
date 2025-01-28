<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\Admin\Entities\VehicleColor;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleColor::truncate();
        $arr = array(
            array(
                "COL_COLOUR" => "Air Force blue"), 
            array(
                "COL_COLOUR" => "Alice blue"), 
            array(
                "COL_COLOUR" => "Alizarin crimson"), 
            array(
                "COL_COLOUR" => "Almond"), 
            array(
                "COL_COLOUR" => "Amaranth"), 
            array(
                "COL_COLOUR" => "Amber"), 
            array(
                "COL_COLOUR" => "American rose"), 
            array(
                "COL_COLOUR" => "Amethyst"), 
            array(
                "COL_COLOUR" => "Android Green"), 
            array(
                "COL_COLOUR" => "Anti-flash white"), 
            array(
                "COL_COLOUR" => "Antique brass"), 
            array(
                "COL_COLOUR" => "Antique fuchsia"), 
            array(
                "COL_COLOUR" => "Antique white"), 
            array(
                "COL_COLOUR" => "Ao"), 
            array(
                "COL_COLOUR" => "Apple green"), 
            array(
                "COL_COLOUR" => "Apricot"), 
            array(
                "COL_COLOUR" => "Aqua"), 
            array(
                "COL_COLOUR" => "Aquamarine"), 
            array(
                "COL_COLOUR" => "Army green"), 
            array(
                "COL_COLOUR" => "Arylide yellow"), 
            array(
                "COL_COLOUR" => "Ash grey"), 
            array(
                "COL_COLOUR" => "Asparagus"), 
            array(
                "COL_COLOUR" => "Atomic tangerine"), 
            array(
                "COL_COLOUR" => "Auburn"), 
            array(
                "COL_COLOUR" => "Aureolin"), 
            array(
                "COL_COLOUR" => "AuroMetalSaurus"), 
            array(
                "COL_COLOUR" => "Awesome"), 
            array(
                "COL_COLOUR" => "Azure"), 
            array(
                "COL_COLOUR" => "Azure mist/web"), 
            array(
                "COL_COLOUR" => "Baby blue"), 
            array(
                "COL_COLOUR" => "Baby blue eyes"), 
            array(
                "COL_COLOUR" => "Baby pink"), 
            array(
                "COL_COLOUR" => "Ball Blue"), 
            array(
                "COL_COLOUR" => "Banana Mania"), 
            array(
                "COL_COLOUR" => "Banana yellow"), 
            array(
                "COL_COLOUR" => "Battleship grey"), 
            array(
                "COL_COLOUR" => "Bazaar"), 
            array(
                "COL_COLOUR" => "Beau blue"), 
            array(
                "COL_COLOUR" => "Beaver"), 
            array(
                "COL_COLOUR" => "Beige"), 
            array(
                "COL_COLOUR" => "Bisque"), 
            array(
                "COL_COLOUR" => "Bistre"), 
            array(
                "COL_COLOUR" => "Bittersweet"), 
            array(
                "COL_COLOUR" => "Black"), 
            array(
                "COL_COLOUR" => "Blanched Almond"), 
            array(
                "COL_COLOUR" => "Bleu de France"), 
            array(
                "COL_COLOUR" => "Blizzard Blue"), 
            array(
                "COL_COLOUR" => "Blond"), 
            array(
                "COL_COLOUR" => "Blue"), 
            array(
                "COL_COLOUR" => "Blue Bell"), 
            array(
                "COL_COLOUR" => "Blue Gray"), 
            array(
                "COL_COLOUR" => "Blue green"), 
            array(
                "COL_COLOUR" => "Blue purple"), 
            array(
                "COL_COLOUR" => "Blue violet"), 
            array(
                "COL_COLOUR" => "Blush"), 
            array(
                "COL_COLOUR" => "Bole"), 
            array(
                "COL_COLOUR" => "Bondi blue"), 
            array(
                "COL_COLOUR" => "Bone"), 
            array(
                "COL_COLOUR" => "Boston University Red"), 
            array(
                "COL_COLOUR" => "Bottle green"), 
            array(
                "COL_COLOUR" => "Boysenberry"), 
            array(
                "COL_COLOUR" => "Brandeis blue"), 
            array(
                "COL_COLOUR" => "Brass"), 
            array(
                "COL_COLOUR" => "Brick red"), 
            array(
                "COL_COLOUR" => "Bright cerulean"), 
            array(
                "COL_COLOUR" => "Bright green"), 
            array(
                "COL_COLOUR" => "Bright lavender"), 
            array(
                "COL_COLOUR" => "Bright maroon"), 
            array(
                "COL_COLOUR" => "Bright pink"), 
            array(
                "COL_COLOUR" => "Bright turquoise"), 
            array(
                "COL_COLOUR" => "Bright ube"), 
            array(
                "COL_COLOUR" => "Brilliant lavender"), 
            array(
                "COL_COLOUR" => "Brilliant rose"), 
            array(
                "COL_COLOUR" => "Brink pink"), 
            array(
                "COL_COLOUR" => "British racing green"), 
            array(
                "COL_COLOUR" => "Bronze"), 
            array(
                "COL_COLOUR" => "Brown"), 
            array(
                "COL_COLOUR" => "Bubble gum"), 
            array(
                "COL_COLOUR" => "Bubbles"), 
            array(
                "COL_COLOUR" => "Buff"), 
            array(
                "COL_COLOUR" => "Bulgarian rose"), 
            array(
                "COL_COLOUR" => "Burgundy"), 
            array(
                "COL_COLOUR" => "Burlywood"), 
            array(
                "COL_COLOUR" => "Burnt orange"), 
            array(
                "COL_COLOUR" => "Burnt sienna"), 
            array(
                "COL_COLOUR" => "Burnt umber"), 
            array(
                "COL_COLOUR" => "Byzantine"), 
            array(
                "COL_COLOUR" => "Byzantium"), 
            array(
                "COL_COLOUR" => "CG Blue"), 
            array(
                "COL_COLOUR" => "CG Red"), 
            array(
                "COL_COLOUR" => "Cadet"), 
            array(
                "COL_COLOUR" => "Cadet blue"), 
            array(
                "COL_COLOUR" => "Cadet grey"), 
            array(
                "COL_COLOUR" => "Cadmium green"), 
            array(
                "COL_COLOUR" => "Cadmium orange"), 
            array(
                "COL_COLOUR" => "Cadmium red"), 
            array(
                "COL_COLOUR" => "Cadmium yellow"), 
            array(
                "COL_COLOUR" => "Café au lait"), 
            array(
                "COL_COLOUR" => "Café noir"), 
            array(
                "COL_COLOUR" => "Cal Poly Pomona green"), 
            array(
                "COL_COLOUR" => "Cambridge Blue"), 
            array(
                "COL_COLOUR" => "Camel"), 
            array(
                "COL_COLOUR" => "Camouflage green"), 
            array(
                "COL_COLOUR" => "Canary"), 
            array(
                "COL_COLOUR" => "Canary yellow"), 
            array(
                "COL_COLOUR" => "Candy apple red"), 
            array(
                "COL_COLOUR" => "Candy pink"), 
            array(
                "COL_COLOUR" => "Capri"), 
            array(
                "COL_COLOUR" => "Caput mortuum"), 
            array(
                "COL_COLOUR" => "Cardinal"), 
            array(
                "COL_COLOUR" => "Caribbean green"), 
            array(
                "COL_COLOUR" => "Carmine"), 
            array(
                "COL_COLOUR" => "Carmine pink"), 
            array(
                "COL_COLOUR" => "Carmine red"), 
            array(
                "COL_COLOUR" => "Carnation pink"), 
            array(
                "COL_COLOUR" => "Carnelian"), 
            array(
                "COL_COLOUR" => "Carolina blue"), 
            array(
                "COL_COLOUR" => "Carrot orange"), 
            array(
                "COL_COLOUR" => "Celadon"), 
            array(
                "COL_COLOUR" => "Celeste"), 
            array(
                "COL_COLOUR" => "Celestial blue"), 
            array(
                "COL_COLOUR" => "Cerise"), 
            array(
                "COL_COLOUR" => "Cerise pink"), 
            array(
                "COL_COLOUR" => "Cerulean"), 
            array(
                "COL_COLOUR" => "Cerulean blue"), 
            array(
                "COL_COLOUR" => "Chamoisee"), 
            array(
                "COL_COLOUR" => "Champagne"), 
            array(
                "COL_COLOUR" => "Charcoal"), 
            array(
                "COL_COLOUR" => "Chartreuse"), 
            array(
                "COL_COLOUR" => "Cherry"), 
            array(
                "COL_COLOUR" => "Cherry blossom pink"), 
            array(
                "COL_COLOUR" => "Chestnut"), 
            array(
                "COL_COLOUR" => "Chocolate"), 
            array(
                "COL_COLOUR" => "Chrome yellow"), 
            array(
                "COL_COLOUR" => "Cinereous"), 
            array(
                "COL_COLOUR" => "Cinnabar"), 
            array(
                "COL_COLOUR" => "Cinnamon"), 
            array(
                "COL_COLOUR" => "Citrine"), 
            array(
                "COL_COLOUR" => "Classic rose"), 
            array(
                "COL_COLOUR" => "Cobalt"), 
            array(
                "COL_COLOUR" => "Cocoa brown"), 
            array(
                "COL_COLOUR" => "Coffee"), 
            array(
                "COL_COLOUR" => "Columbia blue"), 
            array(
                "COL_COLOUR" => "Cool black"), 
            array(
                "COL_COLOUR" => "Cool grey"), 
            array(
                "COL_COLOUR" => "Copper"), 
            array(
                "COL_COLOUR" => "Copper rose"), 
            array(
                "COL_COLOUR" => "Coquelicot"), 
            array(
                "COL_COLOUR" => "Coral"), 
            array(
                "COL_COLOUR" => "Coral pink"), 
            array(
                "COL_COLOUR" => "Coral red"), 
            array(
                "COL_COLOUR" => "Cordovan"), 
            array(
                "COL_COLOUR" => "Corn"), 
            array(
                "COL_COLOUR" => "Cornell Red"), 
            array(
                "COL_COLOUR" => "Cornflower"), 
            array(
                "COL_COLOUR" => "Cornflower blue"), 
            array(
                "COL_COLOUR" => "Cornsilk"), 
            array(
                "COL_COLOUR" => "Cosmic latte"), 
            array(
                "COL_COLOUR" => "Cotton candy"), 
            array(
                "COL_COLOUR" => "Cream"), 
            array(
                "COL_COLOUR" => "Crimson"), 
            array(
                "COL_COLOUR" => "Crimson Red"), 
            array(
                "COL_COLOUR" => "Crimson glory"), 
            array(
                "COL_COLOUR" => "Cyan"), 
            array(
                "COL_COLOUR" => "Daffodil"), 
            array(
                "COL_COLOUR" => "Dandelion"), 
            array(
                "COL_COLOUR" => "Dark blue"), 
            array(
                "COL_COLOUR" => "Dark brown"), 
            array(
                "COL_COLOUR" => "Dark byzantium"), 
            array(
                "COL_COLOUR" => "Dark candy apple red"), 
            array(
                "COL_COLOUR" => "Dark cerulean"), 
            array(
                "COL_COLOUR" => "Dark chestnut"), 
            array(
                "COL_COLOUR" => "Dark coral"), 
            array(
                "COL_COLOUR" => "Dark cyan"), 
            array(
                "COL_COLOUR" => "Dark electric blue"), 
            array(
                "COL_COLOUR" => "Dark goldenrod"), 
            array(
                "COL_COLOUR" => "Dark gray"), 
            array(
                "COL_COLOUR" => "Dark green"), 
            array(
                "COL_COLOUR" => "Dark jungle green"), 
            array(
                "COL_COLOUR" => "Dark khaki"), 
            array(
                "COL_COLOUR" => "Dark lava"), 
            array(
                "COL_COLOUR" => "Dark lavender"), 
            array(
                "COL_COLOUR" => "Dark magenta"), 
            array(
                "COL_COLOUR" => "Dark midnight blue"), 
            array(
                "COL_COLOUR" => "Dark olive green"), 
            array(
                "COL_COLOUR" => "Dark orange"), 
            array(
                "COL_COLOUR" => "Dark orchid"), 
            array(
                "COL_COLOUR" => "Dark pastel blue"), 
            array(
                "COL_COLOUR" => "Dark pastel green"), 
            array(
                "COL_COLOUR" => "Dark pastel purple"), 
            array(
                "COL_COLOUR" => "Dark pastel red"), 
            array(
                "COL_COLOUR" => "Dark pink"), 
            array(
                "COL_COLOUR" => "Dark powder blue"), 
            array(
                "COL_COLOUR" => "Dark raspberry"), 
            array(
                "COL_COLOUR" => "Dark red"), 
            array(
                "COL_COLOUR" => "Dark salmon"), 
            array(
                "COL_COLOUR" => "Dark scarlet"), 
            array(
                "COL_COLOUR" => "Dark sea green"), 
            array(
                "COL_COLOUR" => "Dark sienna"), 
            array(
                "COL_COLOUR" => "Dark slate blue"), 
            array(
                "COL_COLOUR" => "Dark slate gray"), 
            array(
                "COL_COLOUR" => "Dark spring green"), 
            array(
                "COL_COLOUR" => "Dark tan"), 
            array(
                "COL_COLOUR" => "Dark tangerine"), 
            array(
                "COL_COLOUR" => "Dark taupe"), 
            array(
                "COL_COLOUR" => "Dark terra cotta"), 
            array(
                "COL_COLOUR" => "Dark turquoise"), 
            array(
                "COL_COLOUR" => "Dark violet"), 
            array(
                "COL_COLOUR" => "Dartmouth green"), 
            array(
                "COL_COLOUR" => "Davy grey"), 
            array(
                "COL_COLOUR" => "Debian red"), 
            array(
                "COL_COLOUR" => "Deep carmine"), 
            array(
                "COL_COLOUR" => "Deep carmine pink"), 
            array(
                "COL_COLOUR" => "Deep carrot orange"), 
            array(
                "COL_COLOUR" => "Deep cerise"), 
            array(
                "COL_COLOUR" => "Deep champagne"), 
            array(
                "COL_COLOUR" => "Deep chestnut"), 
            array(
                "COL_COLOUR" => "Deep coffee"), 
            array(
                "COL_COLOUR" => "Deep fuchsia"), 
            array(
                "COL_COLOUR" => "Deep jungle green"), 
            array(
                "COL_COLOUR" => "Deep lilac"), 
            array(
                "COL_COLOUR" => "Deep magenta"), 
            array(
                "COL_COLOUR" => "Deep peach"), 
            array(
                "COL_COLOUR" => "Deep pink"), 
            array(
                "COL_COLOUR" => "Deep saffron"), 
            array(
                "COL_COLOUR" => "Deep sky blue"), 
            array(
                "COL_COLOUR" => "Denim"), 
            array(
                "COL_COLOUR" => "Desert"), 
            array(
                "COL_COLOUR" => "Desert sand"), 
            array(
                "COL_COLOUR" => "Dim gray"), 
            array(
                "COL_COLOUR" => "Dodger blue"), 
            array(
                "COL_COLOUR" => "Dogwood rose"), 
            array(
                "COL_COLOUR" => "Dollar bill"), 
            array(
                "COL_COLOUR" => "Drab"), 
            array(
                "COL_COLOUR" => "Duke blue"), 
            array(
                "COL_COLOUR" => "Earth yellow"), 
            array(
                "COL_COLOUR" => "Ecru"), 
            array(
                "COL_COLOUR" => "Eggplant"), 
            array(
                "COL_COLOUR" => "Eggshell"), 
            array(
                "COL_COLOUR" => "Egyptian blue"), 
            array(
                "COL_COLOUR" => "Electric blue"), 
            array(
                "COL_COLOUR" => "Electric crimson"), 
            array(
                "COL_COLOUR" => "Electric cyan"), 
            array(
                "COL_COLOUR" => "Electric green"), 
            array(
                "COL_COLOUR" => "Electric indigo"), 
            array(
                "COL_COLOUR" => "Electric lavender"), 
            array(
                "COL_COLOUR" => "Electric lime"), 
            array(
                "COL_COLOUR" => "Electric purple"), 
            array(
                "COL_COLOUR" => "Electric ultramarine"), 
            array(
                "COL_COLOUR" => "Electric violet"), 
            array(
                "COL_COLOUR" => "Electric yellow"), 
            array(
                "COL_COLOUR" => "Emerald"), 
            array(
                "COL_COLOUR" => "Eton blue"), 
            array(
                "COL_COLOUR" => "Fallow"), 
            array(
                "COL_COLOUR" => "Falu red"), 
            array(
                "COL_COLOUR" => "Famous"), 
            array(
                "COL_COLOUR" => "Fandango"), 
            array(
                "COL_COLOUR" => "Fashion fuchsia"), 
            array(
                "COL_COLOUR" => "Fawn"), 
            array(
                "COL_COLOUR" => "Feldgrau"), 
            array(
                "COL_COLOUR" => "Fern"), 
            array(
                "COL_COLOUR" => "Fern green"), 
            array(
                "COL_COLOUR" => "Ferrari Red"), 
            array(
                "COL_COLOUR" => "Field drab"), 
            array(
                "COL_COLOUR" => "Fire engine red"), 
            array(
                "COL_COLOUR" => "Firebrick"), 
            array(
                "COL_COLOUR" => "Flame"), 
            array(
                "COL_COLOUR" => "Flamingo pink"), 
            array(
                "COL_COLOUR" => "Flavescent"), 
            array(
                "COL_COLOUR" => "Flax"), 
            array(
                "COL_COLOUR" => "Floral white"), 
            array(
                "COL_COLOUR" => "Fluorescent orange"), 
            array(
                "COL_COLOUR" => "Fluorescent pink"), 
            array(
                "COL_COLOUR" => "Fluorescent yellow"), 
            array(
                "COL_COLOUR" => "Folly"), 
            array(
                "COL_COLOUR" => "Forest green"), 
            array(
                "COL_COLOUR" => "French beige"), 
            array(
                "COL_COLOUR" => "French blue"), 
            array(
                "COL_COLOUR" => "French lilac"), 
            array(
                "COL_COLOUR" => "French rose"), 
            array(
                "COL_COLOUR" => "Fuchsia"), 
            array(
                "COL_COLOUR" => "Fuchsia pink"), 
            array(
                "COL_COLOUR" => "Fulvous"), 
            array(
                "COL_COLOUR" => "Fuzzy Wuzzy"), 
            array(
                "COL_COLOUR" => "Gainsboro"), 
            array(
                "COL_COLOUR" => "Gamboge"), 
            array(
                "COL_COLOUR" => "Ghost white"), 
            array(
                "COL_COLOUR" => "Ginger"), 
            array(
                "COL_COLOUR" => "Glaucous"), 
            array(
                "COL_COLOUR" => "Glitter"), 
            array(
                "COL_COLOUR" => "Gold"), 
            array(
                "COL_COLOUR" => "Golden brown"), 
            array(
                "COL_COLOUR" => "Golden poppy"), 
            array(
                "COL_COLOUR" => "Golden yellow"), 
            array(
                "COL_COLOUR" => "Goldenrod"), 
            array(
                "COL_COLOUR" => "Granny Smith Apple"), 
            array(
                "COL_COLOUR" => "Gray"), 
            array(
                "COL_COLOUR" => "Gray asparagus"), 
            array(
                "COL_COLOUR" => "Green"), 
            array(
                "COL_COLOUR" => "Green Blue"), 
            array(
                "COL_COLOUR" => "Green yellow"), 
            array(
                "COL_COLOUR" => "Grey"), 
            array(
                "COL_COLOUR" => "Grullo"), 
            array(
                "COL_COLOUR" => "Guppie green"), 
            array(
                "COL_COLOUR" => "Halayà úbe"), 
            array(
                "COL_COLOUR" => "Han blue"), 
            array(
                "COL_COLOUR" => "Han purple"), 
            array(
                "COL_COLOUR" => "Hansa yellow"), 
            array(
                "COL_COLOUR" => "Harlequin"), 
            array(
                "COL_COLOUR" => "Harvard crimson"), 
            array(
                "COL_COLOUR" => "Harvest Gold"), 
            array(
                "COL_COLOUR" => "Heart Gold"), 
            array(
                "COL_COLOUR" => "Heliotrope"), 
            array(
                "COL_COLOUR" => "Hollywood cerise"), 
            array(
                "COL_COLOUR" => "Honeydew"), 
            array(
                "COL_COLOUR" => "Hooker green"), 
            array(
                "COL_COLOUR" => "Hot magenta"), 
            array(
                "COL_COLOUR" => "Hot pink"), 
            array(
                "COL_COLOUR" => "Hunter green"), 
            array(
                "COL_COLOUR" => "Icterine"), 
            array(
                "COL_COLOUR" => "Inchworm"), 
            array(
                "COL_COLOUR" => "India green"), 
            array(
                "COL_COLOUR" => "Indian red"), 
            array(
                "COL_COLOUR" => "Indian yellow"), 
            array(
                "COL_COLOUR" => "Indigo"), 
            array(
                "COL_COLOUR" => "International Klein Blue"), 
            array(
                "COL_COLOUR" => "International orange"), 
            array(
                "COL_COLOUR" => "Iris"), 
            array(
                "COL_COLOUR" => "Isabelline"), 
            array(
                "COL_COLOUR" => "Islamic green"), 
            array(
                "COL_COLOUR" => "Ivory"), 
            array(
                "COL_COLOUR" => "Jade"), 
            array(
                "COL_COLOUR" => "Jasmine"), 
            array(
                "COL_COLOUR" => "Jasper"), 
            array(
                "COL_COLOUR" => "Jazzberry jam"), 
            array(
                "COL_COLOUR" => "Jonquil"), 
            array(
                "COL_COLOUR" => "June bud"), 
            array(
                "COL_COLOUR" => "Jungle green"), 
            array(
                "COL_COLOUR" => "KU Crimson"), 
            array(
                "COL_COLOUR" => "Kelly green"), 
            array(
                "COL_COLOUR" => "Khaki"), 
            array(
                "COL_COLOUR" => "La Salle Green"), 
            array(
                "COL_COLOUR" => "Languid lavender"), 
            array(
                "COL_COLOUR" => "Lapis lazuli"), 
            array(
                "COL_COLOUR" => "Laser Lemon"), 
            array(
                "COL_COLOUR" => "Laurel green"), 
            array(
                "COL_COLOUR" => "Lava"), 
            array(
                "COL_COLOUR" => "Lavender"), 
            array(
                "COL_COLOUR" => "Lavender blue"), 
            array(
                "COL_COLOUR" => "Lavender blush"), 
            array(
                "COL_COLOUR" => "Lavender gray"), 
            array(
                "COL_COLOUR" => "Lavender indigo"), 
            array(
                "COL_COLOUR" => "Lavender magenta"), 
            array(
                "COL_COLOUR" => "Lavender mist"), 
            array(
                "COL_COLOUR" => "Lavender pink"), 
            array(
                "COL_COLOUR" => "Lavender purple"), 
            array(
                "COL_COLOUR" => "Lavender rose"), 
            array(
                "COL_COLOUR" => "Lawn green"), 
            array(
                "COL_COLOUR" => "Lemon"), 
            array(
                "COL_COLOUR" => "Lemon Yellow"), 
            array(
                "COL_COLOUR" => "Lemon chiffon"), 
            array(
                "COL_COLOUR" => "Lemon lime"), 
            array(
                "COL_COLOUR" => "Light Crimson"), 
            array(
                "COL_COLOUR" => "Light Thulian pink"), 
            array(
                "COL_COLOUR" => "Light apricot"), 
            array(
                "COL_COLOUR" => "Light blue"), 
            array(
                "COL_COLOUR" => "Light brown"), 
            array(
                "COL_COLOUR" => "Light carmine pink"), 
            array(
                "COL_COLOUR" => "Light coral"), 
            array(
                "COL_COLOUR" => "Light cornflower blue"), 
            array(
                "COL_COLOUR" => "Light cyan"), 
            array(
                "COL_COLOUR" => "Light fuchsia pink"), 
            array(
                "COL_COLOUR" => "Light goldenrod yellow"), 
            array(
                "COL_COLOUR" => "Light gray"), 
            array(
                "COL_COLOUR" => "Light green"), 
            array(
                "COL_COLOUR" => "Light khaki"), 
            array(
                "COL_COLOUR" => "Light pastel purple"), 
            array(
                "COL_COLOUR" => "Light pink"), 
            array(
                "COL_COLOUR" => "Light salmon"), 
            array(
                "COL_COLOUR" => "Light salmon pink"), 
            array(
                "COL_COLOUR" => "Light sea green"), 
            array(
                "COL_COLOUR" => "Light sky blue"), 
            array(
                "COL_COLOUR" => "Light slate gray"), 
            array(
                "COL_COLOUR" => "Light taupe"), 
            array(
                "COL_COLOUR" => "Light yellow"), 
            array(
                "COL_COLOUR" => "Lilac"), 
            array(
                "COL_COLOUR" => "Lime"), 
            array(
                "COL_COLOUR" => "Lime green"), 
            array(
                "COL_COLOUR" => "Lincoln green"), 
            array(
                "COL_COLOUR" => "Linen"), 
            array(
                "COL_COLOUR" => "Lion"), 
            array(
                "COL_COLOUR" => "Liver"), 
            array(
                "COL_COLOUR" => "Lust"), 
            array(
                "COL_COLOUR" => "MSU Green"), 
            array(
                "COL_COLOUR" => "Macaroni and Cheese"), 
            array(
                "COL_COLOUR" => "Magenta"), 
            array(
                "COL_COLOUR" => "Magic mint"), 
            array(
                "COL_COLOUR" => "Magnolia"), 
            array(
                "COL_COLOUR" => "Mahogany"), 
            array(
                "COL_COLOUR" => "Maize"), 
            array(
                "COL_COLOUR" => "Majorelle Blue"), 
            array(
                "COL_COLOUR" => "Malachite"), 
            array(
                "COL_COLOUR" => "Manatee"), 
            array(
                "COL_COLOUR" => "Mango Tango"), 
            array(
                "COL_COLOUR" => "Mantis"), 
            array(
                "COL_COLOUR" => "Maroon"), 
            array(
                "COL_COLOUR" => "Mauve"), 
            array(
                "COL_COLOUR" => "Mauve taupe"), 
            array(
                "COL_COLOUR" => "Mauvelous"), 
            array(
                "COL_COLOUR" => "Maya blue"), 
            array(
                "COL_COLOUR" => "Meat brown"), 
            array(
                "COL_COLOUR" => "Medium Persian blue"), 
            array(
                "COL_COLOUR" => "Medium aquamarine"), 
            array(
                "COL_COLOUR" => "Medium blue"), 
            array(
                "COL_COLOUR" => "Medium candy apple red"), 
            array(
                "COL_COLOUR" => "Medium carmine"), 
            array(
                "COL_COLOUR" => "Medium champagne"), 
            array(
                "COL_COLOUR" => "Medium electric blue"), 
            array(
                "COL_COLOUR" => "Medium jungle green"), 
            array(
                "COL_COLOUR" => "Medium lavender magenta"), 
            array(
                "COL_COLOUR" => "Medium orchid"), 
            array(
                "COL_COLOUR" => "Medium purple"), 
            array(
                "COL_COLOUR" => "Medium red violet"), 
            array(
                "COL_COLOUR" => "Medium sea green"), 
            array(
                "COL_COLOUR" => "Medium slate blue"), 
            array(
                "COL_COLOUR" => "Medium spring bud"), 
            array(
                "COL_COLOUR" => "Medium spring green"), 
            array(
                "COL_COLOUR" => "Medium taupe"), 
            array(
                "COL_COLOUR" => "Medium teal blue"), 
            array(
                "COL_COLOUR" => "Medium turquoise"), 
            array(
                "COL_COLOUR" => "Medium violet red"), 
            array(
                "COL_COLOUR" => "Melon"), 
            array(
                "COL_COLOUR" => "Midnight blue"), 
            array(
                "COL_COLOUR" => "Midnight green"), 
            array(
                "COL_COLOUR" => "Mikado yellow"), 
            array(
                "COL_COLOUR" => "Mint"), 
            array(
                "COL_COLOUR" => "Mint cream"), 
            array(
                "COL_COLOUR" => "Mint green"), 
            array(
                "COL_COLOUR" => "Misty rose"), 
            array(
                "COL_COLOUR" => "Moccasin"), 
            array(
                "COL_COLOUR" => "Mode beige"), 
            array(
                "COL_COLOUR" => "Moonstone blue"), 
            array(
                "COL_COLOUR" => "Mordant red 19"), 
            array(
                "COL_COLOUR" => "Moss green"), 
            array(
                "COL_COLOUR" => "Mountain Meadow"), 
            array(
                "COL_COLOUR" => "Mountbatten pink"), 
            array(
                "COL_COLOUR" => "Mulberry"), 
            array(
                "COL_COLOUR" => "Munsell"), 
            array(
                "COL_COLOUR" => "Mustard"), 
            array(
                "COL_COLOUR" => "Myrtle"), 
            array(
                "COL_COLOUR" => "Nadeshiko pink"), 
            array(
                "COL_COLOUR" => "Napier green"), 
            array(
                "COL_COLOUR" => "Naples yellow"), 
            array(
                "COL_COLOUR" => "Navajo white"), 
            array(
                "COL_COLOUR" => "Navy blue"), 
            array(
                "COL_COLOUR" => "Neon Carrot"), 
            array(
                "COL_COLOUR" => "Neon fuchsia"), 
            array(
                "COL_COLOUR" => "Neon green"), 
            array(
                "COL_COLOUR" => "Non-photo blue"), 
            array(
                "COL_COLOUR" => "North Texas Green"), 
            array(
                "COL_COLOUR" => "Ocean Boat Blue"), 
            array(
                "COL_COLOUR" => "Ochre"), 
            array(
                "COL_COLOUR" => "Office green"), 
            array(
                "COL_COLOUR" => "Old gold"), 
            array(
                "COL_COLOUR" => "Old lace"), 
            array(
                "COL_COLOUR" => "Old lavender"), 
            array(
                "COL_COLOUR" => "Old mauve"), 
            array(
                "COL_COLOUR" => "Old rose"), 
            array(
                "COL_COLOUR" => "Olive"), 
            array(
                "COL_COLOUR" => "Olive Drab"), 
            array(
                "COL_COLOUR" => "Olive Green"), 
            array(
                "COL_COLOUR" => "Olivine"), 
            array(
                "COL_COLOUR" => "Onyx"), 
            array(
                "COL_COLOUR" => "Opera mauve"), 
            array(
                "COL_COLOUR" => "Orange"), 
            array(
                "COL_COLOUR" => "Orange Yellow"), 
            array(
                "COL_COLOUR" => "Orange peel"), 
            array(
                "COL_COLOUR" => "Orange red"), 
            array(
                "COL_COLOUR" => "Orchid"), 
            array(
                "COL_COLOUR" => "Otter brown"), 
            array(
                "COL_COLOUR" => "Outer Space"), 
            array(
                "COL_COLOUR" => "Outrageous Orange"), 
            array(
                "COL_COLOUR" => "Oxford Blue"), 
            array(
                "COL_COLOUR" => "Pacific Blue"), 
            array(
                "COL_COLOUR" => "Pakistan green"), 
            array(
                "COL_COLOUR" => "Palatinate blue"), 
            array(
                "COL_COLOUR" => "Palatinate purple"), 
            array(
                "COL_COLOUR" => "Pale aqua"), 
            array(
                "COL_COLOUR" => "Pale blue"), 
            array(
                "COL_COLOUR" => "Pale brown"), 
            array(
                "COL_COLOUR" => "Pale carmine"), 
            array(
                "COL_COLOUR" => "Pale cerulean"), 
            array(
                "COL_COLOUR" => "Pale chestnut"), 
            array(
                "COL_COLOUR" => "Pale copper"), 
            array(
                "COL_COLOUR" => "Pale cornflower blue"), 
            array(
                "COL_COLOUR" => "Pale gold"), 
            array(
                "COL_COLOUR" => "Pale goldenrod"), 
            array(
                "COL_COLOUR" => "Pale green"), 
            array(
                "COL_COLOUR" => "Pale lavender"), 
            array(
                "COL_COLOUR" => "Pale magenta"), 
            array(
                "COL_COLOUR" => "Pale pink"), 
            array(
                "COL_COLOUR" => "Pale plum"), 
            array(
                "COL_COLOUR" => "Pale red violet"), 
            array(
                "COL_COLOUR" => "Pale robin egg blue"), 
            array(
                "COL_COLOUR" => "Pale silver"), 
            array(
                "COL_COLOUR" => "Pale spring bud"), 
            array(
                "COL_COLOUR" => "Pale taupe"), 
            array(
                "COL_COLOUR" => "Pale violet red"), 
            array(
                "COL_COLOUR" => "Pansy purple"), 
            array(
                "COL_COLOUR" => "Papaya whip"), 
            array(
                "COL_COLOUR" => "Paris Green"), 
            array(
                "COL_COLOUR" => "Pastel blue"), 
            array(
                "COL_COLOUR" => "Pastel brown"), 
            array(
                "COL_COLOUR" => "Pastel gray"), 
            array(
                "COL_COLOUR" => "Pastel green"), 
            array(
                "COL_COLOUR" => "Pastel magenta"), 
            array(
                "COL_COLOUR" => "Pastel orange"), 
            array(
                "COL_COLOUR" => "Pastel pink"), 
            array(
                "COL_COLOUR" => "Pastel purple"), 
            array(
                "COL_COLOUR" => "Pastel red"), 
            array(
                "COL_COLOUR" => "Pastel violet"), 
            array(
                "COL_COLOUR" => "Pastel yellow"), 
            array(
                "COL_COLOUR" => "Patriarch"), 
            array(
                "COL_COLOUR" => "Payne grey"), 
            array(
                "COL_COLOUR" => "Peach"), 
            array(
                "COL_COLOUR" => "Peach puff"), 
            array(
                "COL_COLOUR" => "Peach yellow"), 
            array(
                "COL_COLOUR" => "Pear"), 
            array(
                "COL_COLOUR" => "Pearl"), 
            array(
                "COL_COLOUR" => "Pearl Aqua"), 
            array(
                "COL_COLOUR" => "Peridot"), 
            array(
                "COL_COLOUR" => "Periwinkle"), 
            array(
                "COL_COLOUR" => "Persian blue"), 
            array(
                "COL_COLOUR" => "Persian indigo"), 
            array(
                "COL_COLOUR" => "Persian orange"), 
            array(
                "COL_COLOUR" => "Persian pink"), 
            array(
                "COL_COLOUR" => "Persian plum"), 
            array(
                "COL_COLOUR" => "Persian red"), 
            array(
                "COL_COLOUR" => "Persian rose"), 
            array(
                "COL_COLOUR" => "Phlox"), 
            array(
                "COL_COLOUR" => "Phthalo blue"), 
            array(
                "COL_COLOUR" => "Phthalo green"), 
            array(
                "COL_COLOUR" => "Piggy pink"), 
            array(
                "COL_COLOUR" => "Pine green"), 
            array(
                "COL_COLOUR" => "Pink"), 
            array(
                "COL_COLOUR" => "Pink Flamingo"), 
            array(
                "COL_COLOUR" => "Pink Sherbet"), 
            array(
                "COL_COLOUR" => "Pink pearl"), 
            array(
                "COL_COLOUR" => "Pistachio"), 
            array(
                "COL_COLOUR" => "Platinum"), 
            array(
                "COL_COLOUR" => "Plum"), 
            array(
                "COL_COLOUR" => "Portland Orange"), 
            array(
                "COL_COLOUR" => "Powder blue"), 
            array(
                "COL_COLOUR" => "Princeton orange"), 
            array(
                "COL_COLOUR" => "Prussian blue"), 
            array(
                "COL_COLOUR" => "Psychedelic purple"), 
            array(
                "COL_COLOUR" => "Puce"), 
            array(
                "COL_COLOUR" => "Pumpkin"), 
            array(
                "COL_COLOUR" => "Purple"), 
            array(
                "COL_COLOUR" => "Purple Heart"), 
            array(
                "COL_COLOUR" => "Purple Mountain's Majesty"), 
            array(
                "COL_COLOUR" => "Purple mountain majesty"), 
            array(
                "COL_COLOUR" => "Purple pizzazz"), 
            array(
                "COL_COLOUR" => "Purple taupe"), 
            array(
                "COL_COLOUR" => "Rackley"), 
            array(
                "COL_COLOUR" => "Radical Red"), 
            array(
                "COL_COLOUR" => "Raspberry"), 
            array(
                "COL_COLOUR" => "Raspberry glace"), 
            array(
                "COL_COLOUR" => "Raspberry pink"), 
            array(
                "COL_COLOUR" => "Raspberry rose"), 
            array(
                "COL_COLOUR" => "Raw Sienna"), 
            array(
                "COL_COLOUR" => "Razzle dazzle rose"), 
            array(
                "COL_COLOUR" => "Razzmatazz"), 
            array(
                "COL_COLOUR" => "Red"), 
            array(
                "COL_COLOUR" => "Red Orange"), 
            array(
                "COL_COLOUR" => "Red brown"), 
            array(
                "COL_COLOUR" => "Red violet"), 
            array(
                "COL_COLOUR" => "Rich black"), 
            array(
                "COL_COLOUR" => "Rich carmine"), 
            array(
                "COL_COLOUR" => "Rich electric blue"), 
            array(
                "COL_COLOUR" => "Rich lilac"), 
            array(
                "COL_COLOUR" => "Rich maroon"), 
            array(
                "COL_COLOUR" => "Rifle green"), 
            array(
                "COL_COLOUR" => "Robin's Egg Blue"), 
            array(
                "COL_COLOUR" => "Rose"), 
            array(
                "COL_COLOUR" => "Rose bonbon"), 
            array(
                "COL_COLOUR" => "Rose ebony"), 
            array(
                "COL_COLOUR" => "Rose gold"), 
            array(
                "COL_COLOUR" => "Rose madder"), 
            array(
                "COL_COLOUR" => "Rose pink"), 
            array(
                "COL_COLOUR" => "Rose quartz"), 
            array(
                "COL_COLOUR" => "Rose taupe"), 
            array(
                "COL_COLOUR" => "Rose vale"), 
            array(
                "COL_COLOUR" => "Rosewood"), 
            array(
                "COL_COLOUR" => "Rosso corsa"), 
            array(
                "COL_COLOUR" => "Rosy brown"), 
            array(
                "COL_COLOUR" => "Royal azure"), 
            array(
                "COL_COLOUR" => "Royal blue"), 
            array(
                "COL_COLOUR" => "Royal fuchsia"), 
            array(
                "COL_COLOUR" => "Royal purple"), 
            array(
                "COL_COLOUR" => "Ruby"), 
            array(
                "COL_COLOUR" => "Ruddy"), 
            array(
                "COL_COLOUR" => "Ruddy brown"), 
            array(
                "COL_COLOUR" => "Ruddy pink"), 
            array(
                "COL_COLOUR" => "Rufous"), 
            array(
                "COL_COLOUR" => "Russet"), 
            array(
                "COL_COLOUR" => "Rust"), 
            array(
                "COL_COLOUR" => "Sacramento State green"), 
            array(
                "COL_COLOUR" => "Saddle brown"), 
            array(
                "COL_COLOUR" => "Safety orange"), 
            array(
                "COL_COLOUR" => "Saffron"), 
            array(
                "COL_COLOUR" => "Saint Patrick Blue"), 
            array(
                "COL_COLOUR" => "Salmon"), 
            array(
                "COL_COLOUR" => "Salmon pink"), 
            array(
                "COL_COLOUR" => "Sand"), 
            array(
                "COL_COLOUR" => "Sand dune"), 
            array(
                "COL_COLOUR" => "Sandstorm"), 
            array(
                "COL_COLOUR" => "Sandy brown"), 
            array(
                "COL_COLOUR" => "Sandy taupe"), 
            array(
                "COL_COLOUR" => "Sap green"), 
            array(
                "COL_COLOUR" => "Sapphire"), 
            array(
                "COL_COLOUR" => "Satin sheen gold"), 
            array(
                "COL_COLOUR" => "Scarlet"), 
            array(
                "COL_COLOUR" => "School bus yellow"), 
            array(
                "COL_COLOUR" => "Screamin Green"), 
            array(
                "COL_COLOUR" => "Sea blue"), 
            array(
                "COL_COLOUR" => "Sea green"), 
            array(
                "COL_COLOUR" => "Seal brown"), 
            array(
                "COL_COLOUR" => "Seashell"), 
            array(
                "COL_COLOUR" => "Selective yellow"), 
            array(
                "COL_COLOUR" => "Sepia"), 
            array(
                "COL_COLOUR" => "Shadow"), 
            array(
                "COL_COLOUR" => "Shamrock"), 
            array(
                "COL_COLOUR" => "Shamrock green"), 
            array(
                "COL_COLOUR" => "Shocking pink"), 
            array(
                "COL_COLOUR" => "Sienna"), 
            array(
                "COL_COLOUR" => "Silver"), 
            array(
                "COL_COLOUR" => "Sinopia"), 
            array(
                "COL_COLOUR" => "Skobeloff"), 
            array(
                "COL_COLOUR" => "Sky blue"), 
            array(
                "COL_COLOUR" => "Sky magenta"), 
            array(
                "COL_COLOUR" => "Slate blue"), 
            array(
                "COL_COLOUR" => "Slate gray"), 
            array(
                "COL_COLOUR" => "Smalt"), 
            array(
                "COL_COLOUR" => "Smokey topaz"), 
            array(
                "COL_COLOUR" => "Smoky black"), 
            array(
                "COL_COLOUR" => "Snow"), 
            array(
                "COL_COLOUR" => "Spiro Disco Ball"), 
            array(
                "COL_COLOUR" => "Spring bud"), 
            array(
                "COL_COLOUR" => "Spring green"), 
            array(
                "COL_COLOUR" => "Steel blue"), 
            array(
                "COL_COLOUR" => "Stil de grain yellow"), 
            array(
                "COL_COLOUR" => "Stizza"), 
            array(
                "COL_COLOUR" => "Stormcloud"), 
            array(
                "COL_COLOUR" => "Straw"), 
            array(
                "COL_COLOUR" => "Sunglow"), 
            array(
                "COL_COLOUR" => "Sunset"), 
            array(
                "COL_COLOUR" => "Sunset Orange"), 
            array(
                "COL_COLOUR" => "Tan"), 
            array(
                "COL_COLOUR" => "Tangelo"), 
            array(
                "COL_COLOUR" => "Tangerine"), 
            array(
                "COL_COLOUR" => "Tangerine yellow"), 
            array(
                "COL_COLOUR" => "Taupe"), 
            array(
                "COL_COLOUR" => "Taupe gray"), 
            array(
                "COL_COLOUR" => "Tawny"), 
            array(
                "COL_COLOUR" => "Tea green"), 
            array(
                "COL_COLOUR" => "Tea rose"), 
            array(
                "COL_COLOUR" => "Teal"), 
            array(
                "COL_COLOUR" => "Teal blue"), 
            array(
                "COL_COLOUR" => "Teal green"), 
            array(
                "COL_COLOUR" => "Terra cotta"), 
            array(
                "COL_COLOUR" => "Thistle"), 
            array(
                "COL_COLOUR" => "Thulian pink"), 
            array(
                "COL_COLOUR" => "Tickle Me Pink"), 
            array(
                "COL_COLOUR" => "Tiffany Blue"), 
            array(
                "COL_COLOUR" => "Tiger eye"), 
            array(
                "COL_COLOUR" => "Timberwolf"), 
            array(
                "COL_COLOUR" => "Titanium yellow"), 
            array(
                "COL_COLOUR" => "Tomato"), 
            array(
                "COL_COLOUR" => "Toolbox"), 
            array(
                "COL_COLOUR" => "Topaz"), 
            array(
                "COL_COLOUR" => "Tractor red"), 
            array(
                "COL_COLOUR" => "Trolley Grey"), 
            array(
                "COL_COLOUR" => "Tropical rain forest"), 
            array(
                "COL_COLOUR" => "True Blue"), 
            array(
                "COL_COLOUR" => "Tufts Blue"), 
            array(
                "COL_COLOUR" => "Tumbleweed"), 
            array(
                "COL_COLOUR" => "Turkish rose"), 
            array(
                "COL_COLOUR" => "Turquoise"), 
            array(
                "COL_COLOUR" => "Turquoise blue"), 
            array(
                "COL_COLOUR" => "Turquoise green"), 
            array(
                "COL_COLOUR" => "Tuscan red"), 
            array(
                "COL_COLOUR" => "Twilight lavender"), 
            array(
                "COL_COLOUR" => "Tyrian purple"), 
            array(
                "COL_COLOUR" => "UA blue"), 
            array(
                "COL_COLOUR" => "UA red"), 
            array(
                "COL_COLOUR" => "UCLA Blue"), 
            array(
                "COL_COLOUR" => "UCLA Gold"), 
            array(
                "COL_COLOUR" => "UFO Green"), 
            array(
                "COL_COLOUR" => "UP Forest green"), 
            array(
                "COL_COLOUR" => "UP Maroon"), 
            array(
                "COL_COLOUR" => "USC Cardinal"), 
            array(
                "COL_COLOUR" => "USC Gold"), 
            array(
                "COL_COLOUR" => "Ube"), 
            array(
                "COL_COLOUR" => "Ultra pink"), 
            array(
                "COL_COLOUR" => "Ultramarine"), 
            array(
                "COL_COLOUR" => "Ultramarine blue"), 
            array(
                "COL_COLOUR" => "Umber"), 
            array(
                "COL_COLOUR" => "United Nations blue"), 
            array(
                "COL_COLOUR" => "University of California Gold"), 
            array(
                "COL_COLOUR" => "Unmellow Yellow"), 
            array(
                "COL_COLOUR" => "Upsdell red"), 
            array(
                "COL_COLOUR" => "Urobilin"), 
            array(
                "COL_COLOUR" => "Utah Crimson"), 
            array(
                "COL_COLOUR" => "Vanilla"), 
            array(
                "COL_COLOUR" => "Vegas gold"), 
            array(
                "COL_COLOUR" => "Venetian red"), 
            array(
                "COL_COLOUR" => "Verdigris"), 
            array(
                "COL_COLOUR" => "Vermilion"), 
            array(
                "COL_COLOUR" => "Veronica"), 
            array(
                "COL_COLOUR" => "Violet"), 
            array(
                "COL_COLOUR" => "Violet Blue"), 
            array(
                "COL_COLOUR" => "Violet Red"), 
            array(
                "COL_COLOUR" => "Viridian"), 
            array(
                "COL_COLOUR" => "Vivid auburn"), 
            array(
                "COL_COLOUR" => "Vivid burgundy"), 
            array(
                "COL_COLOUR" => "Vivid cerise"), 
            array(
                "COL_COLOUR" => "Vivid tangerine"), 
            array(
                "COL_COLOUR" => "Vivid violet"), 
            array(
                "COL_COLOUR" => "Warm black"), 
            array(
                "COL_COLOUR" => "Waterspout"), 
            array(
                "COL_COLOUR" => "Wenge"), 
            array(
                "COL_COLOUR" => "Wheat"), 
            array(
                "COL_COLOUR" => "White"), 
            array(
                "COL_COLOUR" => "White smoke"), 
            array(
                "COL_COLOUR" => "Wild Strawberry"), 
            array(
                "COL_COLOUR" => "Wild Watermelon"), 
            array(
                "COL_COLOUR" => "Wild blue yonder"), 
            array(
                "COL_COLOUR" => "Wine"), 
            array(
                "COL_COLOUR" => "Wisteria"), 
            array(
                "COL_COLOUR" => "Xanadu"), 
            array(
                "COL_COLOUR" => "Yale Blue"), 
            array(
                "COL_COLOUR" => "Yellow"), 
            array(
                "COL_COLOUR" => "Yellow Orange"), 
            array(
                "COL_COLOUR" => "Yellow green"), 
            array(
                "COL_COLOUR" => "Zaffre"), 
            array(
                "COL_COLOUR" => "Zinnwaldite brown")
        );

        foreach ($arr as $key => $role) {

            $role = VehicleColor::create(['color' => $role['COL_COLOUR'],'code'=>$role['COL_COLOUR']]);
        }

    }
}
