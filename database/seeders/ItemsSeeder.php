<?php

namespace Database\Seeders;

use App\Models\items;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert(
            [
                [
                    "id" => 1,
                    "name" => "Swiss Mushroom Burgers",
                    "price" => 95000,
                    "description" => "Big, juicy Swiss Mushroom Burgers are a mighty vegetarian burger that at first glance, looks like a beef burger!",
                    "type" => "Main-Course",
                    "image" => "https://www.recipetineats.com/wp-content/uploads/2020/08/Easy-Swiss-Mushroom-Burgers_7.jpg?resize=650,910"
                ],
                [
                    "id" => 2,
                    "name" => "Smoked Salmon & Cucumber",
                    "price" => 42000,
                    "description" => "This smoked salmon appetizer is easy and perfect for parties! Cucumber, cream cheese and dill make a crowd-pleasing snack.",
                    "type" => "Appetizer",
                    "image" => "https://i2.wp.com/www.downshiftology.com/wp-content/uploads/2018/08/smoked-salmon-avocado-cucumber-bites-5.jpg"
                ],
                [
                    "id" => 3,
                    "name" => "Cranberry Cream Cheese Appetizer Bites",
                    "price" => 38000,
                    "description" => "Cranberry Cream Cheese Appetizer Bites are easy to make, blissful to eat, and if the orange-scented cream cheese filling doesn’t win you over immediately, the buttery pie crust exterior will.",
                    "type" => "Appetizer",
                    "image" => "https://www.wellplated.com/wp-content/uploads/2020/12/Cream-Cheese-Appetizer-Recipe.jpg"
                ],

                [
                    "id" => 4,
                    "name" => "Vegan Tiramisu with Chocolate Cream and Cherries",
                    "price" => 30000,
                    "description" => "This vegan tiramisu dessert recipe with chocolate cream is super easy, totally delicious and can be served either in a glass or in a classic casserole dish.",
                    "type" => "Dessert",
                    "image" => "https://biancazapatka.com/wp-content/uploads/2020/07/tiramisu-dessert-easy-vegan.jpg"
                ],
                [
                    "id" => 5,
                    "name" => "Fluffy Pink Lemonade Dessert with Pretzel Crust",
                    "price" => 27000,
                    "description" => "The pretzel crust is a salty contrast to the sweet, fluffy filling in a pretty pink pie",
                    "type" => "Dessert",
                    "image" => "https://images-gmi-pmc.edge-generalmills.com/41126625-0a0d-464f-adfc-4572570696ae.jpg"
                ],
                [
                    "id" => 6,
                    "name" => "Sticky Honey Soy Baked Chicken",
                    "price" => 75000,
                    "description" => "Just mix up a simple honey-soy-garlic sauce, pour it over chicken and bake in the oven. Out comes a sweet, salty, sticky chicken dinner – just the sort of flavours everybody loves!",
                    "type" => "Main-Course",
                    "image" => "https://www.recipetineats.com/wp-content/uploads/2016/02/Honey-Soy-Baked-Chicken_60.jpg?resize=650,910"
                ],
                [
                    "id" => 7,
                    "name" => "Crab Rangoon Dip",
                    "price" => 35000,
                    "description" => "Rich and creamy crab dip with fried wonton chips is the game day appetizer you've been looking for!",
                    "type" => "Appetizer",
                    "image" => "https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F19%2F2022%2F04%2F13%2Ftapioca-cheese-fritters-1309791273.jpg"
                ],
                [
                    "id" => 8,
                    "name" => "Red Velvet Cupcakes",
                    "price" => 41000,
                    "description" => "Red Velvet Cake with a hint of vanilla and chocolate flavour. Topped with fluffy cream cheese frosting!",
                    "type" => "Dessert",
                    "image" => "https://www.recipetineats.com/wp-content/uploads/2021/08/Red-Velvet-Cupcakes_58.jpg?resize=650,813"
                ],
                [
                    "id" => 9,
                    "name" => "Green Spaghetti",
                    "price" => 100000,
                    "description" => "Here’s a fast, brilliant way to up your veggie intake in an eye-catching bowl of spinach-pesto spaghetti!",
                    "type" => "Main-Course",
                    "image" => "https://www.recipetineats.com/wp-content/uploads/2022/09/Green-Spaghetti_FI.jpg?resize=747,747"
                ],
            ]

        );
    }
}
