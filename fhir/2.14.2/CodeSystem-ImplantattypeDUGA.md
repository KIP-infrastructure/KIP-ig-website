# Implantattype - Urogynækologi (DUGA) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Implantattype - Urogynækologi (DUGA)**

## CodeSystem: Implantattype - Urogynækologi (DUGA) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/ImplantattypeDUGA | *Version*:2.14.2 |
| Active as of 2024-02-14 | *Computable Name*:ImplantattypeDUGA |

 
Implantattype - Urogynækologi (DUGA) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [ImplantattypeDUGA](ValueSet-ImplantattypeDUGA.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "ImplantattypeDUGA",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/ImplantattypeDUGA",
  "version" : "2.14.2",
  "name" : "ImplantattypeDUGA",
  "title" : "Implantattype - Urogynækologi (DUGA)",
  "status" : "active",
  "date" : "2024-02-14T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Implantattype - Urogynækologi (DUGA)",
  "content" : "complete",
  "count" : 5,
  "concept" : [
    {
      "code" : "mesh_resorberbar",
      "display" : "Syntetisk mesh, resorberbar",
      "definition" : "Syntetisk mesh, resorberbar"
    },
    {
      "code" : "mesh_non_resorberbar",
      "display" : "Syntetisk mesh, non-resorberbar",
      "definition" : "Syntetisk mesh, non-resorberbar"
    },
    {
      "code" : "bio_autolog_graft",
      "display" : "Biologisk implantat, autolog graft",
      "definition" : "Biologisk implantat, autolog graft"
    },
    {
      "code" : "bio_allograft",
      "display" : "Biologisk implantat, allograft",
      "definition" : "Biologisk implantat, allograft"
    },
    {
      "code" : "bio_xenograft",
      "display" : "Biologisk implantat, xenograft",
      "definition" : "Biologisk implantat, xenograft"
    }
  ]
}

```
