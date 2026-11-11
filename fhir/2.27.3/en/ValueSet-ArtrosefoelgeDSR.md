# Artrosefølge (DSR) - KIP Infrastructure v2.27.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Artrosefølge (DSR)**

## ValueSet: Artrosefølge (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ArtrosefoelgeDSR | *Version*:2.27.3 |
| Active as of 2022-10-05 | *Computable Name*:ArtrosefoelgeDSR |

 
Artrosefølge (DSR) 

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
  "id" : "ArtrosefoelgeDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ArtrosefoelgeDSR",
  "version" : "2.27.3",
  "name" : "ArtrosefoelgeDSR",
  "title" : "Artrosefølge (DSR)",
  "status" : "active",
  "date" : "2022-10-05T00:00:00+02:00",
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
  "description" : "Artrosefølge (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
      "concept" : [{
        "code" : "fracture",
        "display" : "Frakturfølge"
      },
      {
        "code" : "instability",
        "display" : "Instabilitetsfølge"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden årsag"
      }]
    }]
  }
}

```
