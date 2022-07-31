# Seeded tables

![database](db.png)

## class_types

`create_class_types_table` migration + `ClassTypeSeeder`

| id  | cycle_id       | name                                | alias    | level | previous_class_type_id | created_at | updated_at |
| --- | -------------- | ----------------------------------- | -------- | ----- | ---------------------- | ---------- | ---------- |
| 1   | "pre-scolaire" | "pre-scolaire"                      | "pre"    | 1     | NULL                   |            |            |
| 2   | "primaire"     | "1re AP"                            | "1ap"    | 2     | 1                      |            |            |
| 3   | "primaire"     | "2e AP"                             | "2ap"    | 3     | 2                      |            |            |
| 4   | "primaire"     | "3e AP"                             | "3ap"    | 4     | 3                      |            |            |
| 5   | "primaire"     | "4e AP"                             | "4ap"    | 5     | 4                      |            |            |
| 6   | "primaire"     | "5e AP"                             | "5ap"    | 6     | 5                      |            |            |
| 7   | "moyen"        | "1re AM"                            | "1am"    | 7     | 6                      |            |            |
| 8   | "moyen"        | "2e AM"                             | "2am"    | 8     | 7                      |            |            |
| 9   | "moyen"        | "3e AM"                             | "3am"    | 9     | 8                      |            |            |
| 10  | "moyen"        | "4e AM"                             | "4am"    | 10    | 9                      |            |            |
| 11  | "secondaire"   | "1re AS TC sciences et technologie" | "1as-st" | 11    | 10                     |            |            |
| 12  | "secondaire"   | "1re AS TC lettres"                 | "1as-l"  | 11    | 10                     |            |            |
| 13  | "secondaire"   | "2e AS sciences experimentales"     | "2as-s"  | 12    | 11                     |            |            |
| 14  | "secondaire"   | "2e AS gestion et economie"         | "2as-ge" | 12    | 11                     |            |            |
| 15  | "secondaire"   | "2e AS math"                        | "2as-m"  | 12    | 11                     |            |            |
| 16  | "secondaire"   | "2e AS technique mathematique"      | "2as-tm" | 12    | 11                     |            |            |
| 17  | "secondaire"   | "2e AS langues etrangères"          | "2as-le" | 12    | 12                     |            |            |
| 18  | "secondaire"   | "2e AS lettres - philosophie"       | "2as-lp" | 12    | 12                     |            |            |
| 19  | "secondaire"   | "3e AS sciences experimentales"     | "3as-s"  | 13    | 13                     |            |            |
| 20  | "secondaire"   | "3e AS gestion et economie"         | "3as-ge" | 13    | 14                     |            |            |
| 21  | "secondaire"   | "3e AS math"                        | "3as-m"  | 13    | 15                     |            |            |
| 22  | "secondaire"   | "3e AS technique mathematique"      | "3as-tm" | 13    | 16                     |            |            |
| 23  | "secondaire"   | "3e AS langues etrangères"          | "3as-le" | 13    | 17                     |            |            |
| 24  | "secondaire"   | "3e AS lettres - philosophie"       | "3as-lp" | 13    | 18                     |            |            |

## References

All the data is gathered exclusively from https://www.education.gov.dz/fr/systeme-educatif-algerien/ ([ar](https://www.education.gov.dz/%d8%a7%d9%84%d9%86%d8%b8%d8%a7%d9%85-%d8%a7%d9%84%d8%aa%d8%b1%d8%a8%d9%88%d9%8a-%d8%a7%d9%84%d8%ac%d8%b2%d8%a7%d8%a6%d8%b1%d9%8a/))

![Structuration-du-système-éducatif](https://education.gov.dz/wp-content/uploads/2014/12/Structuration-du-syst%C3%A8me-%C3%A9ducatif.jpg)

![RESTRUCTURATION-DU-POST-OBLIGATOIRE](https://education.gov.dz/wp-content/uploads/2015/01/RESTRUCTURATION-DU-POST-OBLIGATOIRE.jpg)
