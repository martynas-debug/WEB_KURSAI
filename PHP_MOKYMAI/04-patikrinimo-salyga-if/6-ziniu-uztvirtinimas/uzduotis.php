<?php

// Užduoties tikslas

// Suskaičiuoti kiek duonos kepalų kepykla sugebės iškepti per dieną, ar
// spės įgyvendinti visus dienos užsakymus ir suskaičiuoti kiek iš jų uždirbs
// pelno.


// Duomenys

// 1. Apibrėžti duomenys:
//      1. Darbo valandų per dieną - 8 val.
// 2. Jūsų suvedami duomenys:
//      1. Kiek darbuotojas gali iškepti kepalų per valandą.
//      2. Kiek darbuotojų turi kepykla.
//      3. Vieno kepalo savikaina.
//      4. Vieno kepalo pardavimo kaina.
//      5. Kiek kepykla turi tą dieną iškepti kepalų (užsakymai).


// Skaičiavimai

// 1. Suskaičiuoti kiek kepykla per vieną darbo dieną spės iškepti duonos
// kepalų.
// 2. Apskaičiuoti visų kepalų savikainą, gautas pajamas pardavus ir iš to gauto
// pelno dalį.
// 3. Patikrinti ar kepykla spės iškepti visus tos dienos užsakymus. Jei ne,
// suskaičiuoti kiek kepalų nespės iškepti.
// 4. (Papildomai) Įvertinkite tai, kad pajamas ir pelną galite gauti tik iš
// parduotų kepalų.


// Duomenų įvedimas
$workHoursPerDay = 8;
$loavesPerHourPerWorker = 20; // Kiek kepalų gali iškepti vienas darbuotojas per valandą
$numberOfWorkers = 5; // Kiek darbuotojų dirba kepykloje
$costPerLoaf = 1.5; // Vieno kepalo savikaina
$salePricePerLoaf = 3.0; // Vieno kepalo pardavimo kaina
$dailyOrder = 800; // Kiek kepalų turi būti iškepta tą dieną (užsakymai)
// Skaičiavimai
$totalLoavesBaked = $workHoursPerDay * $loavesPerHourPerWorker * $numberOfWorkers;
$totalCost = $totalLoavesBaked * $costPerLoaf;
$totalRevenue = min($totalLoavesBaked, $dailyOrder) * $salePricePerLoaf;
$totalProfit = $totalRevenue - ($totalLoavesBaked * $costPerLoaf);
// Rezultatų išvedimas
echo "Kepykla per dieną iškeps: $totalLoavesBaked kepalų duonos.\n";
if ($totalLoavesBaked >= $dailyOrder) {
    echo "Kepykla spės įgyvendinti visus užsakymus.\n";
} else {
    $loavesShort = $dailyOrder - $totalLoavesBaked;
    echo "Kepykla nespės iškepti $loavesShort kepalų duonos.\n";
}
echo "Visų kepalų savikaina: €$totalCost.\n";
echo "Gautos pajamos: €$totalRevenue.\n";
echo "Gautas pelnas: €$totalProfit.\n";

// Papildoma užduotis įgyvendinta: pajamos ir pelnas skaičiuojami tik iš
// parduotų kepalų.







