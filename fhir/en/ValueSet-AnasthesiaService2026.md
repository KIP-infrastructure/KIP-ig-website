# Anæstesiydelse 2026 - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anæstesiydelse 2026**

## ValueSet: Anæstesiydelse 2026 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AnasthesiaService2026 | *Version*:2.27.1 |
| Active as of 2022-06-09 | *Computable Name*:AnasthesiaService2026 |

 
Anæstesiydelse 

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
  "id" : "AnasthesiaService2026",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AnasthesiaService2026",
  "version" : "2.27.1",
  "name" : "AnasthesiaService2026",
  "title" : "Anæstesiydelse 2026",
  "status" : "active",
  "date" : "2022-06-09T00:00:00+02:00",
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
  "description" : "Anæstesiydelse",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/AnasthesiaService",
      "concept" : [{
        "code" : "gen_anesthesia",
        "display" : "Generel anæstesi"
      },
      {
        "code" : "nerve_block",
        "display" : "Perifer nerveblokade"
      },
      {
        "code" : "central_block",
        "display" : "Central blokade"
      },
      {
        "code" : "sedation",
        "display" : "Sedation"
      },
      {
        "code" : "surveillance",
        "display" : "Overvågning"
      }]
    }]
  }
}

```
