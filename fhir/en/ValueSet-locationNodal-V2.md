# Sygdomslokalisation er kun nodalt (LYFO) version 2 - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sygdomslokalisation er kun nodalt (LYFO) version 2**

## ValueSet: Sygdomslokalisation er kun nodalt (LYFO) version 2 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/locationNodal-V2 | *Version*:2.27.0 |
| Active as of 2025-09-01 | *Computable Name*:LocationNodal_V2 |

 
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
  "id" : "locationNodal-V2",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/locationNodal-V2",
  "version" : "2.27.0",
  "name" : "LocationNodal_V2",
  "title" : "Sygdomslokalisation er kun nodalt (LYFO) version 2",
  "status" : "active",
  "date" : "2025-09-01T00:00:00+02:00",
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
        "code" : "T000653",
        "display" : "Waldeyers svælgring inkl. tonsiller"
      },
      {
        "code" : "T001184",
        "display" : "Halsregion inkl. periclavilulære glandler"
      },
      {
        "code" : "T000174",
        "display" : "Axiller"
      },
      {
        "code" : "T000165",
        "display" : "Mediastinum og lunge hili"
      },
      {
        "code" : "T000166",
        "display" : "Intraabdominale glandler"
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
        "code" : "T000177",
        "display" : "Femoral regionen/Lyske"
      }]
    }]
  }
}

```
