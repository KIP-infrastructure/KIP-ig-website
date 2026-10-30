# Grundlidelse (DSR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Grundlidelse (DSR)**

## ValueSet: Grundlidelse (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDSR | *Version*:2.27.1 |
| Active as of 2022-10-05 | *Computable Name*:GrundlidelseDSR |

 
Grundlidelse (DSR) 

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
  "id" : "GrundlidelseDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/GrundlidelseDSR",
  "version" : "2.27.1",
  "name" : "GrundlidelseDSR",
  "title" : "Grundlidelse (DSR)",
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
  "description" : "Grundlidelse (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/BasicDisorder",
      "concept" : [{
        "code" : "fracture",
        "display" : "Fraktur"
      },
      {
        "code" : "arthrosis",
        "display" : "Artrose"
      },
      {
        "code" : "arthritis",
        "display" : "Artritis"
      },
      {
        "code" : "cuff_rupture_degenerative",
        "display" : "Cuff artopati (Flersenet rotator cuff ruptur med degenerative forandringer)"
      },
      {
        "code" : "cuff_rupture",
        "display" : "Flersenet rotator cuff ruptur uden degenerative forandringer"
      },
      {
        "code" : "caputnecrosis",
        "display" : "Caputnekrose"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden diagnose"
      }]
    }]
  }
}

```
