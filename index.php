
<?php


// Array order:
// [0] Atomic number
// [1] Symbol
// [2] Element name
// [3] Atomic mass
// [4] Category
// [5] Period
// [6] Group

$elements = [

    // Period 1
    [1, "H", "Hydrogen", "1.008", "nonmetal", 1, 1],
    [2, "He", "Helium", "4.0026", "noble-gas", 1, 18],

    // Period 2
    [3, "Li", "Lithium", "6.94", "alkali-metal", 2, 1],
    [4, "Be", "Beryllium", "9.0122", "alkaline-earth-metal", 2, 2],
    [5, "B", "Boron", "10.81", "metalloid", 2, 13],
    [6, "C", "Carbon", "12.011", "nonmetal", 2, 14],
    [7, "N", "Nitrogen", "14.007", "nonmetal", 2, 15],
    [8, "O", "Oxygen", "15.999", "nonmetal", 2, 16],
    [9, "F", "Fluorine", "18.998", "halogen", 2, 17],
    [10, "Ne", "Neon", "20.180", "noble-gas", 2, 18],

    // Period 3
    [11, "Na", "Sodium", "22.990", "alkali-metal", 3, 1],
    [12, "Mg", "Magnesium", "24.305", "alkaline-earth-metal", 3, 2],
    [13, "Al", "Aluminium", "26.982", "post-transition-metal", 3, 13],
    [14, "Si", "Silicon", "28.085", "metalloid", 3, 14],
    [15, "P", "Phosphorus", "30.974", "nonmetal", 3, 15],
    [16, "S", "Sulfur", "32.06", "nonmetal", 3, 16],
    [17, "Cl", "Chlorine", "35.45", "halogen", 3, 17],
    [18, "Ar", "Argon", "39.948", "noble-gas", 3, 18],

    // Period 4
    [19, "K", "Potassium", "39.098", "alkali-metal", 4, 1],
    [20, "Ca", "Calcium", "40.078", "alkaline-earth-metal", 4, 2],
    [21, "Sc", "Scandium", "44.956", "lanthanide", 4, 3],
    [22, "Ti", "Titanium", "47.867", "transition-metal", 4, 4],
    [23, "V", "Vanadium", "50.942", "transition-metal", 4, 5],
    [24, "Cr", "Chromium", "51.996", "transition-metal", 4, 6],
    [25, "Mn", "Manganese", "54.938", "transition-metal", 4, 7],
    [26, "Fe", "Iron", "55.845", "transition-metal", 4, 8],
    [27, "Co", "Cobalt", "58.933", "transition-metal", 4, 9],
    [28, "Ni", "Nickel", "58.693", "transition-metal", 4, 10],
    [29, "Cu", "Copper", "63.546", "transition-metal", 4, 11],
    [30, "Zn", "Zinc", "65.38", "transition-metal", 4, 12],
    [31, "Ga", "Gallium", "69.723", "post-transition-metal", 4, 13],
    [32, "Ge", "Germanium", "72.630", "metalloid", 4, 14],
    [33, "As", "Arsenic", "74.922", "metalloid", 4, 15],
    [34, "Se", "Selenium", "78.971", "nonmetal", 4, 16],
    [35, "Br", "Bromine", "79.904", "halogen", 4, 17],
    [36, "Kr", "Krypton", "83.798", "noble-gas", 4, 18],

    // Period 5
    [37, "Rb", "Rubidium", "85.468", "alkali-metal", 5, 1],
    [38, "Sr", "Strontium", "87.62", "alkaline-earth-metal", 5, 2],
    [39, "Y", "Yttrium", "88.906", "lanthanide", 5, 3],
    [40, "Zr", "Zirconium", "91.224", "transition-metal", 5, 4],
    [41, "Nb", "Niobium", "92.906", "transition-metal", 5, 5],
    [42, "Mo", "Molybdenum", "95.95", "transition-metal", 5, 6],
    [43, "Tc", "Technetium", "98", "transition-metal", 5, 7],
    [44, "Ru", "Ruthenium", "101.07", "transition-metal", 5, 8],
    [45, "Rh", "Rhodium", "102.91", "transition-metal", 5, 9],
    [46, "Pd", "Palladium", "106.42", "transition-metal", 5, 10],
    [47, "Ag", "Silver", "107.87", "transition-metal", 5, 11],
    [48, "Cd", "Cadmium", "112.41", "transition-metal", 5, 12],
    [49, "In", "Indium", "114.82", "post-transition-metal", 5, 13],
    [50, "Sn", "Tin", "118.71", "post-transition-metal", 5, 14],
    [51, "Sb", "Antimony", "121.76", "metalloid", 5, 15],
    [52, "Te", "Tellurium", "127.60", "metalloid", 5, 16],
    [53, "I", "Iodine", "126.90", "halogen", 5, 17],
    [54, "Xe", "Xenon", "131.29", "noble-gas", 5, 18],

    // Period 6
    [55, "Cs", "Cesium", "132.91", "alkali-metal", 6, 1],
    [56, "Ba", "Barium", "137.33", "alkaline-earth-metal", 6, 2],
    [57, "La", "Lanthanum", "138.91", "lanthanide", 6, 3],
    [58, "Ce", "Cerium", "140.12", "lanthanide", 6, 4],
    [59, "Pr", "Praseodymium", "140.91", "lanthanide", 6, 5],
    [60, "Nd", "Neodymium", "144.24", "lanthanide", 6, 6],
    [61, "Pm", "Promethium", "145", "lanthanide", 6, 7],
    [62, "Sm", "Samarium", "150.36", "lanthanide", 6, 8],
    [63, "Eu", "Europium", "151.96", "lanthanide", 6, 9],
    [64, "Gd", "Gadolinium", "157.25", "lanthanide", 6, 10],
    [65, "Tb", "Terbium", "158.93", "lanthanide", 6, 11],
    [66, "Dy", "Dysprosium", "162.50", "lanthanide", 6, 12],
    [67, "Ho", "Holmium", "164.93", "lanthanide", 6, 13],
    [68, "Er", "Erbium", "167.26", "lanthanide", 6, 14],
    [69, "Tm", "Thulium", "168.93", "lanthanide", 6, 15],
    [70, "Yb", "Ytterbium", "173.05", "lanthanide", 6, 16],
    [71, "Lu", "Lutetium", "174.97", "lanthanide", 6, 17],
    [72, "Hf", "Hafnium", "178.49", "transition-metal", 6, 4],
    [73, "Ta", "Tantalum", "180.95", "transition-metal", 6, 5],
    [74, "W", "Tungsten", "183.84", "transition-metal", 6, 6],
    [75, "Re", "Rhenium", "186.21", "transition-metal", 6, 7],
    [76, "Os", "Osmium", "190.23", "transition-metal", 6, 8],
    [77, "Ir", "Iridium", "192.22", "transition-metal", 6, 9],
    [78, "Pt", "Platinum", "195.08", "transition-metal", 6, 10],
    [79, "Au", "Gold", "196.97", "transition-metal", 6, 11],
    [80, "Hg", "Mercury", "200.59", "transition-metal", 6, 12],
    [81, "Tl", "Thallium", "204.38", "post-transition-metal", 6, 13],
    [82, "Pb", "Lead", "207.2", "post-transition-metal", 6, 14],
    [83, "Bi", "Bismuth", "208.98", "post-transition-metal", 6, 15],
    [84, "Po", "Polonium", "209", "post-transition-metal", 6, 16],
    [85, "At", "Astatine", "210", "halogen", 6, 17],
    [86, "Rn", "Radon", "222", "noble-gas", 6, 18],

    // Period 7
    [87, "Fr", "Francium", "223", "alkali-metal", 7, 1],
    [88, "Ra", "Radium", "226", "alkaline-earth-metal", 7, 2],
    [89, "Ac", "Actinium", "227", "actinide", 7, 3],
    [90, "Th", "Thorium", "232.04", "actinide", 7, 4],
    [91, "Pa", "Protactinium", "231.04", "actinide", 7, 5],
    [92, "U", "Uranium", "238.03", "actinide", 7, 6],
    [93, "Np", "Neptunium", "237", "actinide", 7, 7],
    [94, "Pu", "Plutonium", "244", "actinide", 7, 8],
    [95, "Am", "Americium", "243", "actinide", 7, 9],
    [96, "Cm", "Curium", "247", "actinide", 7, 10],
    [97, "Bk", "Berkelium", "247", "actinide", 7, 11],
    [98, "Cf", "Californium", "251", "actinide", 7, 12],
    [99, "Es", "Einsteinium", "252", "actinide", 7, 13],
    [100, "Fm", "Fermium", "257", "actinide", 7, 14],
    [101, "Md", "Mendelevium", "258", "actinide", 7, 15],
    [102, "No", "Nobelium", "259", "actinide", 7, 16],
    [103, "Lr", "Lawrencium", "266", "actinide", 7, 17],
    [104, "Rf", "Rutherfordium", "267", "transition-metal", 7, 4],
    [105, "Db", "Dubnium", "268", "transition-metal", 7, 5],
    [106, "Sg", "Seaborgium", "269", "transition-metal", 7, 6],
    [107, "Bh", "Bohrium", "270", "transition-metal", 7, 7],
    [108, "Hs", "Hassium", "277", "transition-metal", 7, 8],
    [109, "Mt", "Meitnerium", "278", "transition-metal", 7, 9],
    [110, "Ds", "Darmstadtium", "281", "transition-metal", 7, 10],
    [111, "Rg", "Roentgenium", "282", "transition-metal", 7, 11],
    [112, "Cn", "Copernicium", "285", "transition-metal", 7, 12],
    [113, "Nh", "Nihonium", "286", "post-transition-metal", 7, 13],
    [114, "Fl", "Flerovium", "289", "post-transition-metal", 7, 14],
    [115, "Mc", "Moscovium", "290", "post-transition-metal", 7, 15],
    [116, "Lv", "Livermorium", "293", "post-transition-metal", 7, 16],
    [117, "Ts", "Tennessine", "294", "halogen", 7, 17],
    [118, "Og", "Oganesson", "294", "noble-gas", 7, 18]
];


// ============================================
// 2. CATEGORY NAMES
// ============================================

$categoryNames = [
    "alkali-metal" => "Alkali metals",
    "alkaline-earth-metal" => "Alkaline-earth metals",
    "transition-metal" => "Transition metals",
    "post-transition-metal" => "Other metals",
    "metalloid" => "Metalloids",
    "nonmetal" => "Other nonmetals",
    "halogen" => "Halogens",
    "noble-gas" => "Noble gases",
    "lanthanide" => "Rare-earth elements",
    "actinide" => "Actinoid elements"
];


// ============================================
// 3. RENDER ELEMENT FUNCTION
// ============================================

function renderElement($element)
{
    // Extract values from the numeric array.

    [$number, $symbol, $name, $mass, $category] = $element;

    $symbol = htmlspecialchars($symbol, ENT_QUOTES, "UTF-8");
    $name = htmlspecialchars($name, ENT_QUOTES, "UTF-8");
    $mass = htmlspecialchars($mass, ENT_QUOTES, "UTF-8");
    $category = htmlspecialchars($category, ENT_QUOTES, "UTF-8");

    echo "
        <button
            type='button'
            class='element $category'
            data-number='$number'
            data-symbol='$symbol'
            data-name='$name'
            data-mass='$mass'
            data-category='$category'
            aria-label='$name'
        >
            <span class='atomic-number'>$number</span>
            <span class='element-symbol'>$symbol</span>
            <span class='element-name'>$name</span>
        </button>
    ";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Periodic Table of Elements</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="page">

    <!-- HEADER -->

    <header class="page-header">

        <h1>Periodic Table of Elements</h1>

        <input
            type="search"
            id="search-element"
            placeholder="Search element..."
            autocomplete="off"
        >

    </header>


    <main>

        <!-- GROUP NUMBERS -->

        <div class="group-numbers">

            <?php for ($group = 1; $group <= 18; $group++): ?>

                <span><?php echo $group; ?></span>

            <?php endfor; ?>

        </div>


        <!-- MAIN PERIODIC TABLE -->

        <section class="periodic-table">

            <?php foreach ($elements as $element): ?>

                <?php

                // Extract element information.

                [$number, $symbol, $name, $mass, $category, $period, $group] = $element;


                // Lanthanides and actinides are displayed separately.

                if (
                    ($number >= 58 && $number <= 71) ||
                    ($number >= 90 && $number <= 103)
                ) {
                    continue;
                }

                ?>

                <div
                    class="element-position"
                    style="
                        grid-column: <?php echo $group; ?>;
                        grid-row: <?php echo $period; ?>;
                    "
                >

                    <?php renderElement($element); ?>

                </div>

            <?php endforeach; ?>


            <!-- ELEMENT INFORMATION PANEL -->

            <section class="info-panel">

                <div class="selected-element">

                    <div class="selected-top">

                        <span id="detail-number">1</span>

                        <span id="detail-mass">1.008</span>

                    </div>


                    <div class="selected-main">

                        <h2 id="detail-symbol">H</h2>

                        <h3 id="detail-name">Hydrogen</h3>

                        <p id="detail-category">Nonmetal</p>

                    </div>


                    <div class="selected-bottom">

                        <p>
                            Atomic number:
                            <span id="detail-atomic-number">1</span>
                        </p>

                        <p>
                            Atomic mass:
                            <span id="detail-atomic-mass">1.008</span>
                        </p>

                    </div>

                </div>


                <!-- CATEGORY BUTTONS -->

                <div class="category-list">

                    <?php foreach ($categoryNames as $slug => $label): ?>

                        <button
                            type="button"
                            class="category-button <?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>"
                            data-category="<?php echo htmlspecialchars($slug, ENT_QUOTES, 'UTF-8'); ?>"
                        >

                            <?php echo htmlspecialchars($label, ENT_QUOTES, 'UTF-8'); ?>

                        </button>

                    <?php endforeach; ?>


                    <button
                        type="button"
                        class="category-button show-all"
                        data-category="all"
                    >

                        Show all elements

                    </button>

                </div>

            </section>

        </section>


        <!-- LANTHANIDE AND ACTINIDE SERIES -->

        <section class="series">


            <!-- LANTHANIDE SERIES -->

            <div class="series-row">

                <div class="series-label">

                    Lanthanide series

                </div>


                <div class="series-elements">

                    <?php foreach ($elements as $element): ?>

                        <?php

                        [$number] = $element;

                        if ($number >= 58 && $number <= 71):

                        ?>

                            <?php renderElement($element); ?>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>

            </div>


            <!-- ACTINIDE SERIES -->

            <div class="series-row">

                <div class="series-label">

                    Actinide series

                </div>


                <div class="series-elements">

                    <?php foreach ($elements as $element): ?>

                        <?php

                        [$number] = $element;

                        if ($number >= 90 && $number <= 103):

                        ?>

                            <?php renderElement($element); ?>

                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>

            </div>

        </section>


        <!-- FOOTER -->

        <footer class="footer">

            <p>Periodic Table of the Chemical Elements</p>

            <p>Click any element to see its details.</p>

        </footer>

    </main>

</div>


<!-- JAVASCRIPT -->

<script src="js/script.js"></script>

</body>

</html>
