# EORTC QLQ-C15-PAL 1-4 - KIP Infrastructure v2.16.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC QLQ-C15-PAL 1-4**

## CodeSystem: EORTC QLQ-C15-PAL 1-4 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1514 | *Version*:2.16.0 |
| Active as of 2022-07-28 | *Computable Name*:EORTCQLQC1514 |

 
EORTC Palliativ spørgeskema (1-15) grad 1-4. Se https://www.eortc.org/research_field/quality-of-life/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EORTC14DPD](ValueSet-EORTC14DPD.md)
* [EORTC24DPD](ValueSet-EORTC24DPD.md)
* [Skala](ValueSet-Skala.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EORTCQLQC1514",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1514",
  "version" : "2.16.0",
  "name" : "EORTCQLQC1514",
  "title" : "EORTC QLQ-C15-PAL 1-4",
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
  "description" : "EORTC Palliativ spørgeskema (1-15) grad 1-4. Se https://www.eortc.org/research_field/quality-of-life/",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 4,
  "concept" : [
    {
      "code" : "grade_1",
      "display" : "1. Slet ikke",
      "definition" : "1. Slet ikke"
    },
    {
      "code" : "grade_2",
      "display" : "2. Lidt",
      "definition" : "2. Lidt"
    },
    {
      "code" : "grade_3",
      "display" : "3. En del",
      "definition" : "3. En del"
    },
    {
      "code" : "grade_4",
      "display" : "4. Meget",
      "definition" : "4. Meget"
    }
  ]
}

```
