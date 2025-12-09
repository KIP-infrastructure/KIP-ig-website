# Mesh placement - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Mesh placement**

## CodeSystem: Mesh placement 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/MeshPlacement | *Version*:2.17.1 |
| Active as of 2022-07-21 | *Computable Name*:MeshPlacement |

 
Mesh placement 

 This Code system is referenced in the content logical definition of the following value sets: 

* [MeshPlaceringDHDB](ValueSet-MeshPlaceringDHDB.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "MeshPlacement",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/MeshPlacement",
  "version" : "2.17.1",
  "name" : "MeshPlacement",
  "title" : "Mesh placement",
  "status" : "active",
  "date" : "2022-07-21T00:00:00+02:00",
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
  "description" : "Mesh placement",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "onlay",
      "display" : "Onlay",
      "definition" : "Onlay"
    },
    {
      "code" : "inlay",
      "display" : "Inlay",
      "definition" : "Inlay"
    },
    {
      "code" : "sublay",
      "display" : "Sublay",
      "definition" : "Sublay"
    },
    {
      "code" : "retromuscular_preperitoneal",
      "display" : "Retromuskulær + præperitoneal",
      "definition" : "Retromuskulær + præperitoneal"
    },
    {
      "code" : "preperitoneal",
      "display" : "Præperitoneal",
      "definition" : "Præperitoneal"
    },
    {
      "code" : "intraperitoneal",
      "display" : "Intraperitoneal",
      "definition" : "Intraperitoneal"
    }
  ]
}

```
