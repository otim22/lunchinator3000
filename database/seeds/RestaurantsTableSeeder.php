<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Class Restaurants Table Seeder
 */
class RestaurantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restuarants')->insert([
            [
                "id" => 1,
                "name" => "Costa Vida",
                "waitTimeMinutes" => 14,
                "type" => [
                  "Mexican",
                  "Fast Casual"
                ],
                "image" => "CostaVida.jpeg",
                "description" => "Costa Vida Fresh Mexican Grill was born on the sun-kissed beaches of Mexico. Inspired by whole ingredients and vibrant flavors, we envisioned a fresh take on Mexican food."
            ],
            [
                "id" => 2,
                "name" => "Jimmy John's",
                "waitTimeMinutes" => 5,
                "type" => [
                  "Sandwich",
                  "Fast Food"
                ],
                "image" => "JimmyJohns.jpeg",
                "description" => "Jimmy John’s Gourmet Sandwiches – We Deliver"
            ],
            [
                "id" => 3,
                "name" => "Buffalo Wild Wings",
                "waitTimeMin" => 25,
                "type" => [
                  "Chicken",
                  "Wings",
                  "Casual Dinning"
                ],
                "image" => "BuffaloWildWings.jpg",
                "description" => "B-Dubs® is your local sports restaurant, offering hand-spun wings, a range of cold drinks, and wall-to-wall live sports. Join the action now.",
                "waitTimeMinutes" => null
            ],
            [
                "id" => 4,
                "name" => "Chick-Fil-A",
                "waitTimeMinutes" => 12,
                "type" => [
                  "Chicken",
                  "Sandwich",
                  "Fast Food"
                ],
                "image" => "Chick-Fil-A.jpeg",
                "description" => "Home of the original chicken sandwich with two pickles on a toasted butter bun since 1964. We also offer many healthy alternatives to typical fast food."
            ],
            [
                "id" => 5,
                "name" => "Cafe Rio",
                "waitTimeMinutes" => 8,
                "type" => [
                  "Mexican",
                  "Fast Casual"
                ],
                "image" => "CafeRio.jpeg",
                "description" => "Cafe Rio Mexican Grill offers an expansive variety of delicious made from scratch menu options. Enjoy fresh mexican food in a fast casual atmosphere."
            ],
            [
                "id" => 6,
                "name" => "Arby's",
                "waitTimeMinutes" => 5,
                "type" => [
                  "Roast beef",
                  "Sandwich",
                  "Fast Food"
                ],
                "image" => "Arbys.jpeg",
                "description" => "Arby's sandwich shops are known for slow roasted roast beef, turkey, and premium Angus beef sandwiches, sliced fresh every day."
            ],
            [
                "id" => 7,
                "name" => "Marco's Pizza",
                "waitTimeMinutes" => 19,
                "type" => [
                  "Italian",
                  "Pizza",
                  "Fast Casual"
                ],
                "image" => "Pizza.jpg",
                "description" => "Marco's Pizza, Marcos Pizza, Italian, Pizza Restaurant, Pizza Delivery, Pizza Carry-out, Online Pizza Ordering, Specialty Pizza, Order Pizza Online, Online Pizza, Pizza Specials, Pizza Deals, Hot Pizza Deals, Pizza Coupon, Pizza Menu, Fresh Baked Subs, Chicken Wings, Cheese Bread, Meatballs"
            ],
            [
                "id" => 8,
                "name" => "Firehouse Subs",
                "waitTimeMinutes" => 9,
                "type" => [
                  "Sandwich",
                  "Fast Casual"
                ],
                "image" => "FirehouseSubs.jpeg",
                "description" => "Serving a variety of hot gourmet sub sandwiches. Made with premium meats and cheeses, steamed hot and piled high on a toasted sub roll."
            ],
            [
                "id" => 9,
                "name" => "Habit Burger",
                "waitTimeMinutes" => 19,
                "type" => [
                  "American",
                  "Burger",
                  "Fast Casual"
                ],
                "image" => "HabitBurger.jpeg",
                "description" => "Char-grilled burgers, sandwiches, salads, sides, kids meals, and milkshakes."
            ],
            [
                "id" => 10,
                "name" => "Popeye's",
                "waitTimeMinutes" => 10,
                "type" => [
                  "Chicken",
                  "Fast Food",
                  "Louisiana"
                ],
                "image" => "Popeyes.jpeg",
                "description" => "Popeyes Louisiana Kitchen shows off its New Orleans heritage with authentic spicy & mild fried chicken, chicken tenders, seafood and signature sides."
            ],
            [
                "id" => 11,
                "name" => "Taco Time",
                "waitTimeMinutes" => 14,
                "type" => [
                  "Mexican",
                  "Fast Food"
                ],
                "image" => "TacoTime.jpeg",
                "description" => "TacoTime is an upscale quick service restaurant chain that specializes in freshly prepared, home-style Mexican food."
            ],
            [
                "id" => 12,
                "name" => "Panda Express",
                "waitTimeMinutes" => 1,
                "type" => [
                  "Chinese",
                  "Fast Food"
                ],
                "image" => "Panda.jpg",
                "description" => "Panda Express is America's favorite Chinese restaurant, serving fresh and fast Chinese food for over 30 years. Visit Panda online or in store today"
            ],
            [
                "id" => 13,
                "name" => "Rock Creek Pizza Company",
                "waitTimeMinutes" => 6,
                "type" => [
                  "Italian",
                  "Pizza",
                  "Fast Casual"
                ],
                "image" => "Pizza.jpg",
                "description" => "Rock Creek Pizza Company | Small Riverton Pizzeria"
            ],
            [
                "id" => 14,
                "name" => "Astro Burger",
                "waitTimeMinutes" => 16,
                "description" => "Astro Burger - Quality Ingredients Delivered Fesh Daily"
            ],
            [
                "id" => 15,
                "name" => "Cafe Zupas",
                "waitTimeMinutes" => 10,
                "type" => [
                  "Sandwich",
                  "Soup",
                  "Salad",
                  "Fast Casual"
                ],
                "image" => "Zupas.jpg",
                "description" => "We make delicious soups, salads, sandwiches, & desserts. Each item is created by hand from chef-crafted recipes and quality-sourced ingredients in each of our kitchen"
            ],
            [
                "id" => 16,
                "name" => "DP Cheesesteak",
                "waitTimeMinutes" => 13,
                "type" => [
                  "Cheesesteak Sandwich",
                  "Fast Casual"
                ],
                "image" => "DPCheeseSteak.jpeg",
                "description" => "DP Cheesesteak - Utah's Cheesesteak Champ"
            ],
            [
                "id" => 17,
                "name" => "In-n-Out Burger",
                "waitTimeMinutes" => 17,
                "type" => [
                  "American",
                  "Burger",
                  "Fast Food"
                ],
                "image" => "In-n-Out.png",
                "description" => "At In-N-Out Burger, quality is everything. That's why in a world where food is often over-processed, prepackaged and frozen, In-N-Out makes everything the old fashion way"
            ],
            [
                "id" => 18,
                "name" => "Kneaders",
                "waitTimeMinutes" => 11,
                "type" => [
                  "Sandwich",
                  "Soup",
                  "Salad",
                  "Fast Casual"
                ],
                "image" => "Kneaders.jpg",
                "description" => "Soup, Sandwich, Salads, and more..."
            ],
            [
                "id" => 19,
                "name" => "Goodwood Barbecue Company",
                "waitTimeMinutes" => 35,
                "type" => [
                  "BBQ",
                  "Casual Dinning"
                ],
                "image" => "Goodwood.jpg",
                "description" => "At Goodwood Barbecue Company barbecue cooking is 'slow and low' in a closed pit using indirect heat and select hardwoods."
            ],
            [
                "id" => 20,
                "name" => "Five Guys",
                "waitTimeMinutes" => 2,
                "type" => [
                  "American",
                  "Burger",
                  "Fast Casual"
                ],
                "image" => "FiveGuys.jpg",
                "description" => "Offers burgers, hot dogs, and grilled sandwiches."
            ]
        ]);
    }
}
