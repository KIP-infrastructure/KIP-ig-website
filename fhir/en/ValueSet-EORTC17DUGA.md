# EORTC Grad 1-7 (DUGA) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC Grad 1-7 (DUGA)**

## ValueSet: EORTC Grad 1-7 (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EORTC17DUGA | *Version*:2.27.0 |
| Active as of 2024-03-06 | *Computable Name*:EORTC17DUGA |

 
EORTC Grad 1-7 - Livskvalitetssvurdering (DUGA) 

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
  "id" : "EORTC17DUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EORTC17DUGA",
  "version" : "2.27.0",
  "name" : "EORTC17DUGA",
  "title" : "EORTC Grad 1-7 (DUGA)",
  "status" : "active",
  "date" : "2024-03-06T00:00:00+02:00",
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
  "description" : "EORTC Grad 1-7 - Livskvalitetssvurdering (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1517",
      "concept" : [{
        "code" : "grade_7",
        "display" : "Rigtig meget bedre"
      },
      {
        "code" : "grade_6",
        "display" : "Meget bedre"
      },
      {
        "code" : "grade_5",
        "display" : "Lidt bedre"
      },
      {
        "code" : "grade_4",
        "display" : "Ingen ændring"
      },
      {
        "code" : "grade_3",
        "display" : "Lidt værre"
      },
      {
        "code" : "grade_2",
        "display" : "Meget værre"
      },
      {
        "code" : "grade_1",
        "display" : "Betydeligt værre"
      }]
    }]
  }
}

```
