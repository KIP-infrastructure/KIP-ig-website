# EORTC QLQ-C15-PAL G1-7 - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC QLQ-C15-PAL G1-7**

## CodeSystem: EORTC QLQ-C15-PAL G1-7 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1517 | *Version*:2.16.0 |
| Active as of 2022-07-28 | *Computable Name*:EORTCQLQC1517 |

 
EORTC Palliativ spørgeskema (1-15) grad 1-7. Se https://www.eortc.org/research_field/quality-of-life/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EORTC17DPD](ValueSet-EORTC17DPD.md)
* [EORTC17DUGA](ValueSet-EORTC17DUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EORTCQLQC1517",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1517",
  "version" : "2.16.0",
  "name" : "EORTCQLQC1517",
  "title" : "EORTC QLQ-C15-PAL G1-7",
  "status" : "active",
  "date" : "2022-07-28T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "EORTC Palliativ spørgeskema (1-15) grad 1-7. Se https://www.eortc.org/research_field/quality-of-life/",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 7,
  "concept" : [
    {
      "code" : "grade_1",
      "display" : "1. Meget dårlig",
      "definition" : "1. Meget dårlig"
    },
    {
      "code" : "grade_2",
      "display" : "2. Dårlig",
      "definition" : "2. Dårlig"
    },
    {
      "code" : "grade_3",
      "display" : "3. Mindre dårlig",
      "definition" : "3. Mindre dårlig"
    },
    {
      "code" : "grade_4",
      "display" : "4. Hverken god eller dårligt",
      "definition" : "4. Hverken god eller dårlig"
    },
    {
      "code" : "grade_5",
      "display" : "5. Mindre god",
      "definition" : "5. Mindre god"
    },
    {
      "code" : "grade_6",
      "display" : "6. God",
      "definition" : "6. God"
    },
    {
      "code" : "grade_7",
      "display" : "7. Særdeles god",
      "definition" : "7. Særdeles god"
    }
  ]
}

```
