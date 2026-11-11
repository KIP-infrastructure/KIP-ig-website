# Mesh placering (DHDB) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh placering (DHDB)**

## ValueSet: Mesh placering (DHDB) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/MeshPlaceringDHDB | *Version*:2.27.2 |
| Active as of 2022-07-20 | *Computable Name*:MeshPlaceringDHDB |

 
Mesh Placering (DHDB) 

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
  "id" : "MeshPlaceringDHDB",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/MeshPlaceringDHDB",
  "version" : "2.27.2",
  "name" : "MeshPlaceringDHDB",
  "title" : "Mesh placering (DHDB)",
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
  "description" : "Mesh Placering (DHDB)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshPlacement",
      "concept" : [{
        "code" : "onlay",
        "display" : "Onlay"
      },
      {
        "code" : "inlay",
        "display" : "Inlay"
      },
      {
        "code" : "sublay",
        "display" : "Sublay"
      },
      {
        "code" : "retromuscular_preperitoneal",
        "display" : "Retromuskulær + præperitoneal"
      },
      {
        "code" : "preperitoneal",
        "display" : "Præperitoneal"
      },
      {
        "code" : "intraperitoneal",
        "display" : "Intraperitoneal"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden placering"
      }]
    }]
  }
}

```
