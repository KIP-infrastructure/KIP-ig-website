# Sygdomslokalisation er kun nodalt (LYFO) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomslokalisation er kun nodalt (LYFO)**

## ValueSet: Sygdomslokalisation er kun nodalt (LYFO) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/LocationNodal | *Version*:2.27.2 |
| Active as of 2023-03-15 | *Computable Name*:LocationNodal |

 
Sygdomslokalisation i lymfe områder er kun nodalt (LYFO) 

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
  "id" : "LocationNodal",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/LocationNodal",
  "version" : "2.27.2",
  "name" : "LocationNodal",
  "title" : "Sygdomslokalisation er kun nodalt (LYFO)",
  "status" : "active",
  "date" : "2023-03-15T00:00:00+02:00",
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
  "description" : "Sygdomslokalisation i lymfe områder er kun nodalt (LYFO)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SKS",
      "concept" : [{
        "code" : "T000647",
        "display" : "Rhinopharynx"
      },
      {
        "code" : "T000654",
        "display" : "Waldeyers svælgring"
      },
      {
        "code" : "T000657",
        "display" : "Tonsilla Palatina"
      },
      {
        "code" : "T000146",
        "display" : "Hals, Øvre"
      },
      {
        "code" : "T000148",
        "display" : "Supraclaviculært"
      },
      {
        "code" : "T000154",
        "display" : "Infraclaviculært"
      },
      {
        "code" : "T000174",
        "display" : "Axiller"
      },
      {
        "code" : "T001210",
        "display" : "Mediastinum"
      },
      {
        "code" : "T000400",
        "display" : "Lungehili"
      },
      {
        "code" : "T001227",
        "display" : "Retroperitoneum"
      },
      {
        "code" : "T000132",
        "display" : "Milt"
      },
      {
        "code" : "T000702",
        "display" : "Tarmkrøs"
      },
      {
        "code" : "T001231",
        "display" : "Pelvis"
      },
      {
        "code" : "T000177",
        "display" : "Ingvinale"
      }]
    }]
  }
}

```
