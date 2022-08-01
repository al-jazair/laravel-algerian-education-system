<?php

// $now = date('Y-m-d H:i:s');
$now = Carbon\Carbon::now();
$i = 1;

// TODO arabic names

return [
    [
        'id' => 1,
        'cycle_id' => 'pre-scolaire',
        'name' => 'pre-scolaire',
        'alias' => 'pre',
        'arabic_name' => '',
        'level' => $i, // 1
        'previous_class_type_id' => null,
        'previous_level' => null,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //
    [
        'id' => 2,
        'cycle_id' => 'primaire',
        'name' => '1re AP',
        'alias' => '1ap',
        'arabic_name' => '',
        'level' => ++$i, // 2
        'previous_class_type_id' => 1,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 3,
        'cycle_id' => 'primaire',
        'name' => '2e AP',
        'alias' => '2ap',
        'arabic_name' => '',
        'level' => ++$i, // 3
        'previous_class_type_id' => 2,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 4,
        'cycle_id' => 'primaire',
        'name' => '3e AP',
        'alias' => '3ap',
        'arabic_name' => '',
        'level' => ++$i, // 4
        'previous_class_type_id' => 3,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 5,
        'cycle_id' => 'primaire',
        'name' => '4e AP',
        'alias' => '4ap',
        'arabic_name' => '',
        'level' => ++$i, // 5
        'previous_class_type_id' => 4,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 6,
        'cycle_id' => 'primaire',
        'name' => '5e AP',
        'alias' => '5ap',
        'arabic_name' => '',
        'level' => ++$i, // 6
        'previous_class_type_id' => 5,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //
    [
        'id' => 7,
        'cycle_id' => 'moyen',
        'name' => '1re AM',
        'alias' => '1am',
        'arabic_name' => '',
        'level' => ++$i, // 7
        'previous_class_type_id' => 6,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 8,
        'cycle_id' => 'moyen',
        'name' => '2e AM',
        'alias' => '2am',
        'arabic_name' => '',
        'level' => ++$i, // 8
        'previous_class_type_id' => 7,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 9,
        'cycle_id' => 'moyen',
        'name' => '3e AM',
        'alias' => '3am',
        'arabic_name' => '',
        'level' => ++$i, // 9
        'previous_class_type_id' => 8,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 10,
        'cycle_id' => 'moyen',
        'name' => '4e AM',
        'alias' => '4am',
        'arabic_name' => '',
        'level' => ++$i, // 10
        'previous_class_type_id' => 9,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //
    [
        'id' => 11,
        'cycle_id' => 'secondaire',
        'name' => '1re AS TC sciences et technologie',
        'alias' => '1as-st',
        'arabic_name' => '',
        'level' => ++$i, // 11
        'previous_class_type_id' => 10,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 12,
        'cycle_id' => 'secondaire',
        'name' => '1re AS TC lettres',
        'alias' => '1as-l',
        'arabic_name' => '',
        'level' => $i, // 11
        'previous_class_type_id' => 10,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //
    [
        'id' => 13,
        'cycle_id' => 'secondaire',
        'name' => '2e AS sciences experimentales',
        'alias' => '2as-s',
        'arabic_name' => '',
        'level' => ++$i, // 12
        'previous_class_type_id' => 11,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 14,
        'cycle_id' => 'secondaire',
        'name' => '2e AS gestion et economie',
        'alias' => '2as-ge',
        'arabic_name' => '',
        'level' => $i, // 12
        'previous_class_type_id' => 11,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 15,
        'cycle_id' => 'secondaire',
        'name' => '2e AS math',
        'alias' => '2as-m',
        'arabic_name' => '',
        'level' => $i, // 14
        'previous_class_type_id' => 11,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 16,
        'cycle_id' => 'secondaire',
        'name' => '2e AS technique mathematique',
        'alias' => '2as-tm',
        'arabic_name' => '',
        'level' => $i, // 12
        'previous_class_type_id' => 11,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 17,
        'cycle_id' => 'secondaire',
        'name' => '2e AS langues etrangères',
        'alias' => '2as-le',
        'arabic_name' => '',
        'level' => $i, // 12
        'previous_class_type_id' => 12,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 18,
        'cycle_id' => 'secondaire',
        'name' => '2e AS lettres - philosophie',
        'alias' => '2as-lp',
        'arabic_name' => '',
        'level' => $i, // 12
        'previous_class_type_id' => 12,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    //
    [
        'id' => 19,
        'cycle_id' => 'secondaire',
        'name' => '3e AS sciences experimentales',
        'alias' => '3as-s',
        'arabic_name' => '',
        'level' => ++$i, // 13
        'previous_class_type_id' => 13,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 20,
        'cycle_id' => 'secondaire',
        'name' => '3e AS gestion et economie',
        'alias' => '3as-ge',
        'arabic_name' => '',
        'level' => $i, // 13
        'previous_class_type_id' => 14,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 21,
        'cycle_id' => 'secondaire',
        'name' => '3e AS math',
        'alias' => '3as-m',
        'arabic_name' => '',
        'level' => $i, // 13
        'previous_class_type_id' => 15,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 22,
        'cycle_id' => 'secondaire',
        'name' => '3e AS technique mathematique',
        'alias' => '3as-tm',
        'arabic_name' => '',
        'level' => $i, // 13
        'previous_class_type_id' => 16,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 23,
        'cycle_id' => 'secondaire',
        'name' => '3e AS langues etrangères',
        'alias' => '3as-le',
        'arabic_name' => '',
        'level' => $i, // 13
        'previous_class_type_id' => 17,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
    [
        'id' => 24,
        'cycle_id' => 'secondaire',
        'name' => '3e AS lettres - philosophie',
        'alias' => '3as-lp',
        'arabic_name' => '',
        'level' => $i, // 13
        'previous_class_type_id' => 18,
        'previous_level' => $i - 1,
        'created_at' => $now,
        'updated_at' => $now,
    ],
];
