# EORTC Grad 1-4 (DPD) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC Grad 1-4 (DPD)**

## ValueSet: EORTC Grad 1-4 (DPD) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EORTC14DPD | *Version*:2.27.3 |
| Active as of 2022-07-28 | *Computable Name*:EORTC14DPD |

 
EORTC Grad 1-4 - Helbredsvurdering (DPD) 

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
  "id" : "EORTC14DPD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EORTC14DPD",
  "version" : "2.27.3",
  "name" : "EORTC14DPD",
  "title" : "EORTC Grad 1-4 (DPD)",
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
  "description" : "EORTC Grad 1-4 - Helbredsvurdering (DPD)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EORTCQLQC1514",
      "concept" : [{
        "code" : "grade_1",
        "display" : "1. Slet ikke"
      },
      {
        "code" : "grade_2",
        "display" : "2. Lidt"
      },
      {
        "code" : "grade_3",
        "display" : "3. En del"
      },
      {
        "code" : "grade_4",
        "display" : "4. Meget"
      }]
    }]
  }
}

```
