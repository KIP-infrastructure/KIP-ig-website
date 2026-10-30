# Implantattype (DUGA) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantattype (DUGA)**

## ValueSet: Implantattype (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ImplantattypeDUGA | *Version*:2.27.1 |
| Active as of 2024-02-14 | *Computable Name*:ImplantattypeDUGA |

 
Implantattype (DUGA) 

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
  "id" : "ImplantattypeDUGA",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ImplantattypeDUGA",
  "version" : "2.27.1",
  "name" : "ImplantattypeDUGA",
  "title" : "Implantattype (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
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
  "description" : "Implantattype (DUGA)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantattypeDUGA",
      "concept" : [{
        "code" : "mesh_resorberbar",
        "display" : "Syntetisk mesh, resorberbar"
      },
      {
        "code" : "mesh_non_resorberbar",
        "display" : "Syntetisk mesh, non-resorberbar"
      },
      {
        "code" : "bio_autolog_graft",
        "display" : "Biologisk implantat, autolog graft"
      },
      {
        "code" : "bio_allograft",
        "display" : "Biologisk implantat, allograft"
      },
      {
        "code" : "bio_xenograft",
        "display" : "Biologisk implantat, xenograft"
      }]
    }]
  }
}

```
