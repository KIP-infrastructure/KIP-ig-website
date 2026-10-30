# EHS ventral hernie - lateral - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHS ventral hernie - lateral**

## ValueSet: EHS ventral hernie - lateral 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieLateral | *Version*:2.27.1 |
| Active as of 2022-07-20 | *Computable Name*:EHSVentralHernieLateral |

 
EHS ventral hernie - lateral 

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
  "id" : "EHSVentralHernieLateral",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/EHSVentralHernieLateral",
  "version" : "2.27.1",
  "name" : "EHSVentralHernieLateral",
  "title" : "EHS ventral hernie - lateral",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "EHS ventral hernie - lateral",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassification",
      "concept" : [{
        "code" : "l1",
        "display" : "L1 subcostal"
      },
      {
        "code" : "l2",
        "display" : "L2 flanke"
      },
      {
        "code" : "l3",
        "display" : "L3 fossa iliaca"
      },
      {
        "code" : "l4",
        "display" : "L4 lumbal"
      }]
    }]
  }
}

```
