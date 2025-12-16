<?php

// 1. jeigu tekste yra dvigubos kabutes, tai prie echo viengubos
echo '<input type="text" name="vardas">';

// 2. jeigu tekste yra viengubos kabutes, tai prie echo dvigubos
echo "<input type='text' name='vardas'>";

// 3. jei reikia naudoti vienodo tipo kabutes, galima jas
// "escape" su \, tai reiskia, kad php jas tik isves,
// o ne apdoros
echo "<input type=\"text\" name=\"vardas\">";

// kai isvedame html zyma ir joje kam nors yra naudojamos
// kabutes, ten turetu buti naudojamos dvigubos kabutes,
// todel 1 budas yra geriausias
