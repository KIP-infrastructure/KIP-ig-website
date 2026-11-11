# EORTC Grad 1-7 (DPD) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC Grad 1-7 (DPD)**

## ValueSet: EORTC Grad 1-7 (DPD) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EORTC17DPD | *Version*:2.27.3 |
| Active as of 2022-07-28 | *Computable Name*:EORTC17DPD |

 
EORTC Grad 1-7 - Livskvalitetssvurdering (DPD) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "EORTC17DPD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EORTC17DPD",
  "version" : "2.27.3",
  "name" : "EORTC17DPD",
  "title" : "EORTC Grad 1-7 (DPD)",
  "status" : "active",
  "date" : "2022-07-28T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "EORTC Grad 1-7 - Livskvalitetssvurdering (DPD)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1517",
      "concept" : [{
        "code" : "grade_1",
        "display" : "1. Meget dårlig"
      },
      {
        "code" : "grade_2",
        "display" : "2. Dårlig"
      },
      {
        "code" : "grade_3",
        "display" : "3. Mindre dårlig"
      },
      {
        "code" : "grade_4",
        "display" : "4. Hverken god eller dårlig"
      },
      {
        "code" : "grade_5",
        "display" : "5. Mindre god"
      },
      {
        "code" : "grade_6",
        "display" : "6. God"
      },
      {
        "code" : "grade_7",
        "display" : "7. Særdeles god"
      }]
    }]
  }
}

```
